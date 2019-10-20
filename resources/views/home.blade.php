@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($posts as $post)
            <a href="{{route('posts.show',['post'=>$post->id])}}">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{$post->title}}  <small>Posted By {{$post->user->name}}</small></div>

                <div class="card-body">
                 <div>  <img class="img img-fluid" src="https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/30/2560x1280/landscape-1500925839-golden-retriever-puppy.jpg?resize=480:*">
                 </div>
                   {{$post->body}}
                </div>
            </div>
        </div>
            </a>
@endforeach

    </div>
</div>
@endsection
