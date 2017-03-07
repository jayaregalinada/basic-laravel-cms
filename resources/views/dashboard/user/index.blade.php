@extends('layouts.dashboard')

@section('title', 'Users')

@section('content')

<header class="jumbotron container-fluid">
    <a href="{{ route('dashboard:user.create') }}" class="btn btn-lg btn-success">CREATE USER</a>
    <a href="{{ route('dashboard:user.role.create') }}" class="btn btn-info">CREATE ROLE</a>
</header>

<div class="container-fluid">
    {{-- @include('dashboard.post.lists') --}}
</div>

@stop
