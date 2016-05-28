@extends('layouts.admin')



@section('content')

	<h1>Create Posts</h1>

	{!!	Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

<div class="form-group">

	{!! Form::label('title', 'Post title:' ) !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('category_id', 'Category:' ) !!}
	{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('photo_id', 'Photo:' ) !!}
	{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

</div>


<div class="form-group">

	{!! Form::label('body', 'Post Body:' ) !!}
	{!! Form::textarea('body', null, ['class'=>'form-control', 'rows' => 3]) !!}

</div>

<div class="form-group">

	{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

<div class="row">

	@include('includes.form_errors')

</div>

@endsection
