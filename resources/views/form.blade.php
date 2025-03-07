@extends('layout')
@section('title', @isset($user) ? "Update " . $user->name : 'Create user')
@section('content')
    <form 
        @if(isset($user))
            action="{{route('users.update', $user)}}" 
        @else 
            action="{{route('users.store')}}" 
        @endif
        method="POST"
        class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset

        <a href="{{route('users.index')}}" type="button" class="btn btn-secondary mt-3">Back</a>
            <div class="row mt-3">
                <div class="col">
                <input type="text"
                    value="{{ isset($user) ? $user->name : null}}"
                    name="name" class="form-control" placeholder="Name" aria-label="Name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col ">
                    <input type="text"
                    value="{{ isset($user) ? $user->email : null}}"
                    name="email" class=" form-control" placeholder="Email" aria-label="Emal">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col ">
                    <button type="submit" class=" col btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
@endsection