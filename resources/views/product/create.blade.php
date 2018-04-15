@extends('default.default')

@section('breadcrumbs')
@parent
<li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
<li class="breadcrumb-item active">Product</li>
@endsection

@section("page_content")
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-list"></i> Creating Product
	</div>
	<div class="card-body">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		{{ Form::open(['route' => 'product.store']) }}
		    <div class="form-group">
		        {{ Form::label('name', 'Name') }}
		        {{ Form::text('name', null, array('class' => 'form-control')) }}
		    </div>

		    <div class="form-group">
		        {{ Form::label('cost', 'Cost') }}
		        {{ Form::text('cost', null, array('class' => 'form-control')) }}
		    </div>

		    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>
	<div class="card-footer small text-muted"></div>
</div>
@endsection