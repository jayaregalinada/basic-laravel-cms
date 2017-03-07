@extends('layouts.dashboard')

@section('title', 'Create Post')

@section('content')

<form action="{{ route('dashboard:post.store') }}" method="POST" name="dashboard_post_create">
    {!! csrf_field() !!}
    <fieldset>
        <header class="jumbotron container-fluid form-group">
            <input type="text" required class="form-control form-control-lg input-lg" name="title" placeholder="Post title" />
        </header>

        <section class="body container-fluid">
            <textarea name="body" required placeholder="Post contents" cols="30" rows="10" class="form-control no-resize"></textarea>
        </section>

        <hr>

        <div class="container-fluid">
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </div>
    </fieldset>
</form>


@stop
