<?php

namespace App\Repositories;

use App\Goal;
use App\Common\LINEBotTiny;
use Illuminate\Http\Request;

class MyGoalRepository
{
    public function store(Request $request)
    {
        $client = new LINEBotTiny(ENV('CHANNEL_ACCESS_TOKEN'), ENV('CHANNEL_SECRET'));
        foreach ($client->parseEvents() as $event) {
            switch ($event['type']) {
                case 'message':
                    $message = $event['message'];
                    $source = $event['source'];
                    switch ($message['type']) {
                        case 'text':

                            switch($message['text']) {
                                case '敲金蛋':

                                    $msg = "";

                                    try {
                                        $goals = Goal::where('userId', $source['userId'])->get();

                                        if(count($goals) == 0)
                                            throw new Exception("嗨，去年年底你還來不及參加這個活動，所以還沒有你的記錄，請關注聽說的 instagram 最新消息都可以在那裡找到喔 :) 祝你順心", 1);

                                        foreach ($goals as $goal)
                                        {
                                            $msg =  $goal->text."\n\n立願日(".$goal->created_at.")";
                                        }
                                    }
                                    catch(Exception $e) {
                                        $msg = $e->getMessage();
                                    }


                                    // 通知聽友 OK
                                    $client->replyMessage([
                                        'replyToken' => $event['replyToken'],
                                        'messages' => [
                                            [
                                                'type' => 'text',
                                                'text' => $msg
                                            ]
                                        ]
                                    ]);
                                    break;
                            }
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
