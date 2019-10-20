@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}}  <span><a href="{{route('posts.edit',['post'=>$post->id])}}">Edit</a>/
                        <a href="{{route('posts.destroy',['post'=>$post->id])}}" onclick="event.preventDefault();
                                                    confirm('Are you sure you want to delete') && document.getElementById('delete-form').submit();">Delete</a>

                                    <form id="delete-form" action="{{ route('posts.destroy',['post'=>$post->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                    </form> </span></div>

                <div class="card-body">
                 <div>  <img src="https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/30/2560x1280/landscape-1500925839-golden-retriever-puppy.jpg?resize=480:*">
                 </div>
                    {{$post->body}}
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
