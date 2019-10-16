@extends('layouts.app')


@section('content')
    <h1> Users </h1>
    <a href="{{route('auth.custom.Registration')}}">Create User</a>
    @foreach($users as $user)
    <p>{{$user->name }} {{$user->surname}}</p>
    @endforeach
@endsection
