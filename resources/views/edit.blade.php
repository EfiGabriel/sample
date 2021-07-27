@extends('adminlte::page')

@section('title_postfix', " - Create Workflow")

@section('page_header')
<h1>USER<small>Edit Workflow</small></h1>
@endsection


@section('content')

<link rel="stylesheet" type="text/css" href="/css/chosen.css">

<form id="create_store_form" method="POST" action="{{ route('workflow.update', $workflow->id) }}">
<input name="_method" type="hidden" value="PUT">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Please fill out the form</h3>
    </div>

    <div class="box-body">

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (Session::has('success'))
			<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif

		@if (Session::has('error'))
		    <div class="alert alert-danger">{{ Session::get('error') }}</div>
		@endif

        <div class="form-group @if ($errors->has('name')) has-error @endif">
            <label for="name">Name</label>
            <input id="name" required class="form-control" placeholder="Name" type="text" name="name" value="<?php echo $workflow->name ?>">
        </div>

        <div class="form-group @if ($errors->has('description')) has-error @endif">
            <label for="description">Description</label>
            <input id="description" class="form-control" placeholder="description" type="text" name="description" value="<?php echo $workflow->description ?>">
        </div>


    </div>
    <!-- /.box-body -->
</div>

<div class="box-footer">

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/workflow" class="btn btn-danger">Cancel</a>
</div>
</form>
@stop
