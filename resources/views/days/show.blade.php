@extends('layouts.master')

@section('title', '#'.$row->id.' '.$row->title)
@section('description', str_limit(strip_tags($row->content), 50))

@section('content')
<!-- Main Content -->
<div class="container mt-5 pt-2">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <!-- Begin page content -->
      <main role="main" class="flex-shrink-0">
        <div class="">
          <h4 class="mt-2">{{'#'.$row->id.' '.$row->title}}</h4>
          <div class="video-wrapper text-center"> 
              <iframe src="{{$row->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <hr>
          <div>
              <div class="text-right">
                  <small>從<span class="text-success"> {{$row->created_at->format("Y-m-d")}} </span>開始</small><br>
                  <small>您是這篇文章第 <span class="text-primary">{{$visit_count}} </span>個訪問者</small>
              </div>
              <b>文稿：</b>
              <article>
              <p>{!!$row->content!!}</p>
              </article>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>
    
  <!-- START FOOTER DARK-->
  <footer class="footer footer-light footer-shadow">
      <div class="text-center">
        <small>加入頻道週一至五6:30發送知識語音給您</small>
        <a href="https://line.me/R/ti/p/%40qkm8103n"><img height="20" border="0" alt="加入好友" src="https://media.line.me/img/web/lineit_select_line_icon_02.png"></a>
        <a href="https://www.instagram.com/share.1021/" target="_blank"><img height="20" border="0" alt="加入好友" src="https://instagram-brand.com/wp-content/uploads/2016/11/Instagram_AppIcon_Aug2017.png?w=20"></a>
      </div>
  </footer>
  <!-- START FOOTER DARK-->
@endsection