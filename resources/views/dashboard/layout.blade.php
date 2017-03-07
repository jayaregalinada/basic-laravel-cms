@extends('layout')

@section('head')
@include('dashboard.head')

@stop

@section('body-pre')
@include('dashboard.offsetnav')

@stop

@section('content')

    @parent
<main id="content">
    @yield('content')

</main>

@stop


@section('body-post')
@include('dashboard.footer')
@include('dashboard.scripts')

@stop
