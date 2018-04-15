<?php $__env->startSection('breadcrumbs'); ?>
##parent-placeholder-c251af3318e927f52e5ec39e68f0d16d6a85ab7f##
<li class="breadcrumb-item active">Products</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>
<div class="card mb-3">
		<div class="card-header">
		  <i class="fa fa-table"></i> Product's List</div>
		<div class="card-body">
		<?php if(Session::has('message')): ?>
		<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
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
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($product->id); ?></td>
					<td><a href="<?php echo e(route('product.show', $product->id )); ?>"><?php echo e($product->name); ?></a></td>
					<td><?php echo e($product->cost); ?></td>
					<td><?php echo e($product->created_at); ?></td>
					<td><?php echo e($product->updated_at); ?></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
			<br>
			<a class="btn btn-primary btn-block" href="<?php echo e(route("product.create")); ?>">New Product</a>
		  </div>
		</div>
		<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>