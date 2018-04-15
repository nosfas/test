<?php $__env->startSection('breadcrumbs'); ?>
##parent-placeholder-c251af3318e927f52e5ec39e68f0d16d6a85ab7f##
<li class="breadcrumb-item"><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
<li class="breadcrumb-item active">Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-list"></i> Product's details ...
	</div>
	<div class="card-body">
		<p><strong>Name:</strong> <?php echo e($product->name); ?></p>
		<p><strong>Cost:</strong> <?php echo e($product->cost); ?></p>
		<?php echo e(Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id], 'class' => 'pull-right'])); ?>

			<a class="btn btn-info" href="<?php echo e(route('product.edit', $product->id)); ?>">Edit</a>
			<?php echo e(Form::submit('Delete', array('class' => 'btn btn-warning'))); ?>

		<?php echo e(Form::close()); ?>

	</div>
	<div class="card-footer small text-muted">Updated <?php echo e($product->updated_at); ?></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>