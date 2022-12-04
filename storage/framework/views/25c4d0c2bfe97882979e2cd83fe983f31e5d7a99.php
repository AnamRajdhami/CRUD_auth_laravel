

<?php $__env->startSection('content'); ?>

<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card m-2 p-2" style="width: 18rem;">
                <!-- <img src="images/<?php echo e($product->picture); ?>" class="card-img-top" alt="..."> -->
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($product->title); ?></h5>
                  <h5 class="card-title">Price: $<?php echo e($product->price); ?></h5>
                  <hr>
                  <!-- <p class="card-text"><?php echo e($product->description); ?> </p>-->
                  <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-success">Details</a> 
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\product_management_system\resources\views/product/index.blade.php ENDPATH**/ ?>