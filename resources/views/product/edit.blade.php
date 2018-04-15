@extends('default.default')

@section('breadcrumbs')
@parent
<li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
<li class="breadcrumb-item active">Product</li>
@endsection

@section("page_content")
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-list"></i> Editing Product's details ...
	</div>
	<div class="card-body">
		{{ Form::model($product, array('route' => array('product.update', $product->id), 'method' => 'PUT')) }}
		    <div class="form-group">
		        {{ Form::label('name', 'Name') }}
		        {{ Form::text('name', null, array('class' => 'form-control')) }}
		    </div>

		    <div class="form-group">
		        {{ Form::label('cost', 'Cost') }}
		        {{ Form::text('cost', null, array('class' => 'form-control')) }}
		    </div>

		    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
	<div class="card-footer small text-muted">Updated {{ $product->updated_at}}</div>
</div>
@endsection