<h1>Star detail</h1>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $star): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3>Name : <?php echo e($star->name); ?> </h3>
    <h3>Email : <?php echo e($star->email); ?> </h3>
    <h3>Age : <?php echo e($star->age); ?> </h3>
    <h3>City : <?php echo e($star->city); ?> </h3>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp1\htdocs\project_crud\resources\views/star.blade.php ENDPATH**/ ?>