@extends('main')

{{--set title for contact page--}}
@section('title', "| Contact")


@section('stylesheets')
    <link rel="stylesheet" href="main.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <form>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" name="message" id="message"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send message</button>
            </form>
        </div>
    </div>
@endsection

