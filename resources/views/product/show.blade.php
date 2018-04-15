@extends('default.default')

@section('breadcrumbs')
@parent
<li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
<li class="breadcrumb-item active">Product</li>
@endsection

@section("page_content")
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-list"></i> Product's details ...
	</div>
	<div class="card-body">
		<p><strong>Name:</strong> {{ $product->name}}</p>
		<p><strong>Cost:</strong> {{ $product->cost}}</p>
		{{ Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id], 'class' => 'pull-right']) }}
			<a class="btn btn-info" href="{{ route('product.edit', $product->id) }}">Edit</a>
			{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
		{{ Form::close() }}
	</div>
	<div class="card-footer small text-muted">Updated {{ $product->updated_at}}</div>
</div>
@endsection