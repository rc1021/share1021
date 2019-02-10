<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$row->title}}</title>

    <link href="//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
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
            <iframe src="{{$row->video_url}}?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <div>
            <b>文稿：</b>
            <p>{!!$row->content!!}</p>
        </div>
      </div>
    </main>
    
    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
</body>
</html>