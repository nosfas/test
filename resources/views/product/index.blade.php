@extends('default.default')

@section('breadcrumbs')
@parent
<li class="breadcrumb-item active">Products</li>
@endsection

@section("page_content")
<div class="card mb-3">
		<div class="card-header">
		  <i class="fa fa-table"></i> Product's List</div>
		<div class="card-body">
		@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		  <div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			  <thead>
				<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Cost</th>
				<th>Created At</th>
				<th>Updated At</th>
				</tr>
			  </thead>
			  <tfoot>
			  	<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Cost</th>
				<th>Created At</th>
				<th>Updated At</th>
				</tr>
			  </tfoot>
			  <tbody>
				@foreach ($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td><a href="{{ route('product.show', $product->id ) }}">{{$product->name}}</a></td>
					<td>{{$product->cost}}</td>
					<td>{{$product->created_at}}</td>
					<td>{{$product->updated_at}}</td>
				</tr>
				@endforeach
			  </tbody>
			</table>
			<br>
			<a class="btn btn-primary btn-block" href="{{ route("product.create") }}">New Product</a>
		  </div>
		</div>
		<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	  </div>
@endsection