

<?php $__env->startSection('content'); ?>

<div class="container mt-5 mb-5">

    <h2>Update Product</h2>
    <hr>

    <form action="<?php echo e(route('products.update', $product->id)); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="<?php echo e($product->title); ?>" placeholder="Enter title">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" value="<?php echo e($product->price); ?>" placeholder="Enter price">
          </div>

          <button type="submit" class="btn btn-primary">Update Product</button>

    </form>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\product_management_system\resources\views/product/edit.blade.php ENDPATH**/ ?>