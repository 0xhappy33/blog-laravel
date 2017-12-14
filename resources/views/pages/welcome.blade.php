@extends('main')

{{--set title for home page--}}
@section('title', "| A awesome blog")

@section('stylesheets')
    <link rel="stylesheet" href="../../assets/sass/app.scss">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-3">Welcome to my blog!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger
                    container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>The first post</h3>
                <p>It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum</p>
                <a href="#" class="btn btn-success">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>The first post</h3>
                <p>It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum</p>
                <a href="#" class="btn btn-success">Read more</a>
            </div>
            <hr>
            <div class="post">
                <h3>The first post</h3>
                <p>It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum</p>
                <a href="#" class="btn btn-success">Read more</a>
            </div>
        </div>
        <div class="col-md-3 col-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection
