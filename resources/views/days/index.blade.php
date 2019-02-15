@extends('layouts.master')

@section('title', '首頁')
@section('description', '')

@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url(https://images.pexels.com/photos/159621/open-book-library-education-read-159621.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>聽說</h1>
            <span class="subheading">聽說 / 知識語音頻道 / 認識一個愛讀書的人</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($collection as $item)
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Day {{$item->id}}
            </h2>
            <h3 class="post-subtitle">
              {{$item->title}}
            </h3>
          </a>
          <p class="post-meta">Posted on {{$item->created_at->format('Y-m-d')}}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
            {{ $collection->links() }}
        </div>
      </div>
    </div>
  </div>
@endsection