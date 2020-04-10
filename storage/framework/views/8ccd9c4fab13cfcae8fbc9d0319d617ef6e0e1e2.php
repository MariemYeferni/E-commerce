
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Catégorie</strong>   
      <h5 class="mb-0"><?php echo e($Products->title); ?></h5>
      <hr>
      <p class="mb-auto text-muted"><?php echo e($Products->description); ?></p>
      <strong class="mb-auto font-weight-normal text-secondary"><?php echo e($Products->getPrice()); ?></strong>
      <form action="<?php echo e(route('Cart.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="Products_id" value="<?php echo e($Products->id); ?>">
        <button OnClick="increment()" type="submit" class="btn btn-dark">Ajouter au panier</button>
        <h3><em>att<span id='val'>1</span>: </em></h3>

         <script>
          document.addEventListener("DOMContentLoaded", function() {
          document.getElementById('add').addEventListener('click', function() {
           document.getElementById('val').innerHTML++;
          });
});
</script>
      </form>
      
    </div>
    <div class="col-auto d-none d-lg-block">
      <img src="<?php echo e($Products->image); ?>"alt="">
    </div>
  </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\E-commerce\resources\views/Products/show.blade.php ENDPATH**/ ?>