@extends('layouts.app')

@section('content')
    @include('users.users', ['user' => $users])
@endsection