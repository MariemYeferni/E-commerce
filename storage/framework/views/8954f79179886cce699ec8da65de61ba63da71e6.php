
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Catégorie 1</strong>
          <h5 class="mb-0"><?php echo e($Products->title); ?></h5>
          <p class="mb-auto text-muted"><?php echo e($Products->subtitle); ?></p>
          <strong class="mb-auto font-weight-normal text-secondary"><?php echo e($Products->getPrice()); ?></strong>
          <a href="<?php echo e(route('Products.show', $Products->slug)); ?>" class="stretched-link">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="<?php echo e($Products->image); ?>" alt="">
    </div>
  </div>
</div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-commerce\resources\views/Products/index.blade.php ENDPATH**/ ?>