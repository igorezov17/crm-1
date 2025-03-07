@extends('layout')

@section('title', 'User' . $user->name)

@section('content')
    {{dd($user)}}
@endsection