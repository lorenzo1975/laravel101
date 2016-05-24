@extends('layouts.admin')

@section('content')

<h1>Edit user</h1>

<div class="row">

<div class="col-sm-3">
		
		<img src="{{$user->photo ? $user->photo->file : 'https://placehold.it/150x250' }}" alt="" class="img-responsive img-rounded">

</div>

<div class="col-sm-9">
{!! Form::model($user,array('method' => 'PATCH', 'action' => ['AdminUsersController@update',$user->id],'files'=>true)) !!}

<div class="form-group">

	{!! Form::label('name', 'Name:' ) !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('email', 'Email:' ) !!}
	{!! Form::email('email', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('photo_id', 'Your file:' ) !!}
	{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('password', 'Password:' ) !!}
	{!! Form::password('password', ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('role_id', 'Role:' ) !!}
	{!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('is_active', 'Status:' ) !!}
	{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

</div> {{-- end col smn9 --}}

</div>

<div class="row">

	@include('includes.form_errors')

</div>



@endsection