@extends('main')

@section('title', ' | Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr />
            {{-- the route property specifies a named routes (php artisan route:list) --}}
            {{-- data-parsley-validate initiates the form validation --}}
            {{-- Blade {{  }} statements are automatically sent through PHP's htmlentities function to prevent XSS attacks. --}}
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

                {{
                    Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block',
                                                      'style' => 'margin-top: 20px;'))
                }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection