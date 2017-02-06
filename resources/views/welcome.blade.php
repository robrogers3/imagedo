@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="page-header">
            <h1>Give Me Your Images So I can Upload them to Amazon S3!!!</h1>
        </div>
        <form action="/images"
              method="post"
              class="dropzone"
              id="my-awesome-dropzone">
            {{ csrf_field() }}
        </form>
    </div>
    <hr>
    <div class="row">
        <dl class="list-group">
            <dt class="list-group-item">
                Check your Image Uploads
            </dt>
            @foreach($images as $image)
                <dd class="list-group-item">
                    <img src="https://s3.amazonaws.com/testtachu-1/{{$image->thumb_path}}">
                    <a href="https://s3.amazonaws.com/testtachu-1/{{$image->image_path}}">Full Size</a>

                </dd>
            @endforeach

        </dl>
    </div>
@endsection
