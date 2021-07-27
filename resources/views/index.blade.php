@extends('adminlte::page')

@section('content_header')
	<h1>Workflows</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class=""><a href="/workflows">Workflows</a></li>
	</ol>
@endsection

@section('content')
	<div id="formMessageHolder"></div>

	<style>
		.rawLink, .deleteForm { margin-left: 3px; }
	</style>

	<div class="box box-warning">
		<div class="box-header"></div>
		<div class="box-body">
			<div class="table-responsive">

				@if (Session::has('success'))
				    <div class="alert alert-success">{{ Session::get('success') }}</div>
				@endif

				@if (Session::has('error'))
				    <div class="alert alert-danger">{{ Session::get('error') }}</div>
				@endif

				<table class="table table-bordered table-striped dataTable">
					<thead>
						<tr role="row">
							<th>ID</th>
							<th>Name</th>
							<th>Description</th>
							<th width="20%" ></th>
						</tr>
					</thead>
					<tbody>

						@foreach($workflows as $workflow)
							<tr role="row" id="{{ $workflow->id }}">
								<td>{{ $workflow->id}}</td>
								<td>{{ $workflow->name }}</td>
								<td>{{ $workflow->description }}</td>
								<td>

									<a class="pull-left btn btn-warning rawLink btn-block mb-1 " href="workflow/{{ $workflow->id }}/edit">Edit</a>
									<form method="POST" action="{{ route('workflow.destroy', $workflow->id) }}" accept-charset="UTF-8" class="deleteForm pull-left">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<input name="_method" type="hidden" value="DELETE">
										<input onclick="if(confirm(&quot;Are you sure you want to delete this entry?&quot;)) { return true; } event.returnValue = false; return false;" class="btn btn-danger deleteTag btn-block mb-1 " type="submit" value="Remove">
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<a class="btn btn-info" href="{{$url_create}}">Create</a>
			</div>
		</div>
	</div>
@stop

@section('js')

@endsection
