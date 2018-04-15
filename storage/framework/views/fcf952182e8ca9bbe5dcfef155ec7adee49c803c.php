<?php $__env->startSection('breadcrumbs'); ?>
##parent-placeholder-c251af3318e927f52e5ec39e68f0d16d6a85ab7f##
<li class="breadcrumb-item"><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
<li class="breadcrumb-item active">Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-list"></i> Creating Product
	</div>
	<div class="card-body">
		<?php if($errors->any()): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
		<?php echo e(Form::open(['route' => 'product.store'])); ?>

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
	<div class="card-footer small text-muted"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>