<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$row->title}}</title>

    <link href="//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
      body {
        padding-bottom: 40px;
      }
      footer {
        background-color: aliceblue;
      }
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;  //16:9
            overflow: hidden;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
      </style>
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134198588-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-134198588-1');
    </script>

</head>
<body>
    
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h4 class="mt-2">{{$row->title}}</h4>
        <div class="video-wrapper text-center"> 
            <iframe src="{{$row->video_url}}?rel=0&autoplay=1" frameborder="0"></iframe>
        </div>
        <hr>
        <div>
            <div class="text-right">
                <small>從<span class="text-success"> {{$row->created_at->format("Y-m-d")}} </span>開始</small><br>
                <small>您是這篇文章第 <span class="text-primary">{{$visit_count}} </span>個訪問者</small>
            </div>
            <b>文稿：</b>
            <p>{!!$row->content!!}</p>
        </div>
      </div>
    </main>
    
    <!-- START FOOTER DARK-->
    <footer class="navbar footer fixed-bottom footer-light footer-shadow content container-fluid text-right">
        <div>
          <small>加入頻道 週一至五6:30發送知識語音給您</small>
          <a href="https://line.me/R/ti/p/%40qkm8103n"><img height="20" border="0" alt="加入好友" src="https://media.line.me/img/web/lineit_select_line_icon_02.png"></a>
          <a href="https://www.instagram.com/share.1021/" target="_blank"><img height="20" border="0" alt="加入好友" src="https://instagram-brand.com/wp-content/uploads/2016/11/Instagram_AppIcon_Aug2017.png?w=20"></a>
        </div>
    </footer>
    <!-- START FOOTER DARK-->

    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
</body>
</html>