<?php $__env->startSection('breadcrumbs'); ?>
##parent-placeholder-c251af3318e927f52e5ec39e68f0d16d6a85ab7f##
<li class="breadcrumb-item"><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
<li class="breadcrumb-item active">Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-list"></i> Editing Product's details ...
	</div>
	<div class="card-body">
		<?php echo e(Form::model($product, array('route' => array('product.update', $product->id), 'method' => 'PUT'))); ?>

		    <div class="form-group">
		        <?php echo e(Form::label('name', 'Name')); ?>

		        <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

		    </div>

		    <div class="form-group">
		        <?php echo e(Form::label('cost', 'Cost')); ?>

		        <?php echo e(Form::text('cost', null, array('class' => 'form-control'))); ?>

		    </div>

		    <?php echo e(Form::submit('Save', array('class' => 'btn btn-primary'))); ?>

		<?php echo e(Form::close()); ?>

	</div>
	<div class="card-footer small text-muted">Updated <?php echo e($product->updated_at); ?></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>