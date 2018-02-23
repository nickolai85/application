@extends('layouts.index')

@section('content')
    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Page Heading
            <small>Secondary Text</small>
        </h1>

        <!-- First Blog Post -->

        @foreach($posts as $post)

            <h2>
                <a href="#">{{$post->title}}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">{{$post->user->name}}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
            <hr>
            <img class="img-responsive" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/900x300'}}" alt="">
            <hr>
            <p>{!! \Illuminate\Support\Str::words($post->body, 30,'...')  !!}</p>

            <a class="btn btn-primary" href="{{route('post',$post->id )}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

        @endforeach

        <hr>

        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Older</a>
            </li>
            <li class="next">
                <a href="#">Newer &rarr;</a>
            </li>
        </ul>

    </div>


@endsection
