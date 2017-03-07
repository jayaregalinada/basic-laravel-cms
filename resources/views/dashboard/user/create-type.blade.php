@extends('layouts.dashboard')

@section('title', 'Post Type')

@section('content')

<form action="{{ route('dashboard:post.type.store') }}" method="POST" name="dashboard_post_type_create">
    {!! csrf_field() !!}
    <fieldset>
        <header class="jumbotron container-fluid no-margin-bottom no-padding-bottom">
            <h1>Post Types</h1>
            <hr class="no-margin">
        </header>

        <div class="well container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-4">
                        <input type="text" placeholder="Post type name" class="form-control" name="name" required />
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Description" name="description" class="form-control" />
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn-info btn">CREATE</button>
                    </div>
                </div>

            </div>
        </div>
    </fieldset>
</form>



<div class="container-fluid">
    @if ($types->isEmpty())
    <alert class="panel-warning" title="Oops!">No data as of the moment</alert>
    @else
    @include('dashboard.post.types-list')
    @endif
</div>


@stop
