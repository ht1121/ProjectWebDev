<?php $__env->startSection('title', 'Popular'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Popular Food This Week</h1>

          <table class="table">
          	<thead class="bg-warning">
          		<tr>
	          		<th scope="col">No</th>
	          		<th scope="col">Restaurant</th>
	          		<th scope="col">Food</th>
	          		<th scope="col">Show</th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          		<tr>
          			<th scope="row"><?php echo e($loop->iteration); ?></th>

          			<td><?php echo e($f->restaurant); ?></td>
          			<td><?php echo e($f->food); ?></td>
          			<td>
          				<a href="" class="badge badge-info">Check</a>
          			</td>
          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          		</tr>
          	</tbody>
          </table>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webdev\resources\views/Popular/index.blade.php ENDPATH**/ ?>