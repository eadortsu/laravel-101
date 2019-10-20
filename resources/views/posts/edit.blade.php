@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <form method="post" action="{{route('posts.update',['post'=>$post->id])}}" enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="title">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                   >

                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}" id="title"
                                    placeholder="Enter POst Title">

                        </div>
                        <div class="form-group">
                            <label for="body">Post</label>
                            <textarea  class="form-control" id="body" name="body"
                                      placeholder="Body">{{$post->body}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
