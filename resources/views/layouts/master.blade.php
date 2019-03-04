<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - @yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="google" content="nositelinkssearchbox" />
    <meta property="og:url"                content="{{url()->full()}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@yield('title')" />
    <meta property="og:description"        content="@yield('description')" />

    <link href="//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('css/clean-blog.min.css') }}" rel="stylesheet">
  
    <style>
      @import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);
      body {
        font-family: 'cwTeXYen', sans-serif;
        font-weight: 300;
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134198588-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-134198588-1');
    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-9965291835469846",
              enable_page_level_ads: true
        });
    </script>

    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
</head>
<body>

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand" href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/page/about">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

    @yield('content')

    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ secure_asset('js/clean-blog.min.js') }}"></script>
</body>
</html>