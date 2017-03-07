@extends('layout')

@section('head')
@include('default.head')

@stop

@section('body-pre')
@include('default.navigation')

@stop

@section('content')
@include('components.carousel')

@stop

@section('body-post')
@include('default.footer')
@include('default.scripts')

@stop
