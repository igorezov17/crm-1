@extends('layout')

@section('title', 'User: ' . $user->name)

@section('content')
<a href="{{route('users.index')}}" type="button" class="btn btn-secondary mb-3">Back</a>
<div class="card " style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Id: {{$user->id}}</li>
      <li class="list-group-item">Name: {{$user->name}}</li>
      <li class="list-group-item">Email: {{$user->email}}</li>
      <li class="list-group-item">Create: {{$user->created_at->format('d.m.Y')}}</li>
      <li class="list-group-item">Update: {{$user->updated_at->format('d.m.Y')}}</li>
    </ul>
  </div>
  <a type="button" class="btn btn-warning mt-3" href="{{route('users.edit', $user)}}">Edit</a>
@endsection