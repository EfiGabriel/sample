-@extends('adminlte::page')

@section('title_postfix', " - Create Workflow")

@section('page_header')
<h1>USER<small>Create Workflow</small></h1>
@endsection


@section('content')

<link rel="stylesheet" type="text/css" href="/css/chosen.css">

<form id="create_store_form" method="POST" action="{{ route('sample.store') }}">
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


        <div class="form-group @if ($errors->has('code')) has-error @endif">
            <label for="code">Name</label>
            <input id="code" class="form-control" required placeholder="Name" type="text" name="name" value="">
        </div>

        <div class="form-group @if ($errors->has('name')) has-error @endif">
            <label for="name">Description</label>
            <textarea id="description" class="form-control" placeholder="Description" name="description"></textarea>
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
