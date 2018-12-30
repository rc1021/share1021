<?php

namespace App\Repositories;

use App\Goal;
use App\Common\LINEBotTiny;
use Illuminate\Http\Request;

class MyGoalRepository
{
    private $channelAccessToken;
    private $channelSecret;

    function __construct() {
        $this->channelAccessToken = ENV('CHANNEL_ACCESS_TOKEN');
        $this->channelSecret = ENV('CHANNEL_SECRET');
    }
    
    public function store(Request $request)
    {
        $client = new LINEBotTiny($this->channelAccessToken, $this->channelSecret);
        foreach ($client->parseEvents() as $event) {
            switch ($event['type']) {
                case 'message':
                    $message = $event['message'];
                    $source = $event['source'];
                    switch ($message['type']) {
                        case 'text':
                            // 記在資料庫
                            $new_goal = new Goal;
                            $new_goal->year = date('Y');
                            $new_goal->text = $message['text'];
                            if($source['type'] == "user")
                                $new_goal->userId = $source['userId'];

                            $new_goal->save();

                            // 通知聽友 OK
                            $client->replyMessage([
                                'replyToken' => $event['replyToken'],
                                'messages' => [
                                    [
                                        'type' => 'text',
                                        'text' => "已更新年計劃\n".$message['text']."\n---\n並放入時光彩裡"
                                    ]
                                ]
                            ]);
                            break;
                        default:
                            error_log('Unsupported message type: ' . $message['type']);
                            break;
                    }
                    break;
                default:
                    error_log('Unsupported event type: ' . $event['type']);
                    break;
            }
        };
    }

    public function show(Goal $goal)
    {
        //
    }

    public function update(Request $request, Goal $goal)
    {
        //
    }
}
