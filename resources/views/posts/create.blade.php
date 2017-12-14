@extends('main')

@section('title', '| Create a new post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create your post</h1>
            <br>
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', null, array('class'=>'form-control',
                                                'required' => '',
                                                'maxlength' => '255')) }}

            {{ Form::label('body', 'Post body: ') }}
            {{ Form::textarea('body', null, array('class'=>'form-control', 'required' => '')) }}

            {{ Form::submit('Create a post', array(
                                'class' => 'btn btn-success btn-lg btn-block',
                                'style' => 'margin-top: 20px'
                                ))
            }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection