@extends('layouts.master')

@section('title', $row->title)
@section('description', str_limit(strip_tags($row->content), 50))

@section('content')
  
  <!-- Page Header -->
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>{{$row->title}}</h1>
            <span class="subheading">{{$row->brief}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>{!!$row->content!!}</p>
      </div>
    </div>
  </div>
@endsection