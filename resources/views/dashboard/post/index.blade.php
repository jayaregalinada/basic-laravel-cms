@extends('layouts.dashboard')

@section('title', 'Posts')

@section('content')

<header class="jumbotron container-fluid">
    <a href="{{ route('dashboard:post.create') }}" class="btn btn-lg btn-success">CREATE POST</a>
    <a href="{{ route('dashboard:post.type.create') }}" class="btn btn-info">CREATE TYPE</a>
</header>

<div class="container-fluid">
    @include('dashboard.post.lists')
</div>

@stop
