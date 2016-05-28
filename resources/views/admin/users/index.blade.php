@extends('layouts.admin')

@section('content')

@if(Session::has('created_user'))

	<h3 class="bg-danger">{{session('created_user')}}</h3>

@endif

@if(Session::has('updated_user'))

	<h3 class="bg-danger">{{session('updated_user')}}</h3>

@endif

@if(Session::has('deleted_user'))

	<h3 class="bg-danger">{{session('deleted_user')}}</h3>

@endif



<h1>Users</h1>

<table class="table">
	<thead>
	<th>Id</th>
	<th>Photo</th>
	<th>Name</th>	
	<th>Email</th>
	<th>Role</th>
	<th>Status</th>
	<th>Created</th>
	<th>Updated</th>
	</thead>
	<tbody>

	@if($users)

	@foreach($users as $user)
	<tr>
		<td>{{$user->id}}</td>
		<td><img height="80" src="{{$user->photo ? $user->photo->file : 'https://placehold.it/150x150' }}"></td>
		<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
		<td>{{$user->email}}</td>				
		<td>{{$user->role->name}}</td>
		<td>{{$user->is_active == 1 ? 'active' : 'not active' }}</td>
		<td>{{$user->created_at->diffForHumans()}}</td>				
		<td>{{$user->updated_at->diffForHumans()}}</td>				
	</tr>		
	
	@endforeach


	@endif
	</tbody>
</table>

@endsection