<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1>All stars list</h1>
            <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
            <table class="table table-bordered table-striped">
               <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>delete</th>
                <th>update</th>
               </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $star): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($star->id); ?></td>
                    <td> <?php echo e($star->name); ?></td>
                    <td><?php echo e($star->email); ?></td>
                    <td><?php echo e($star->age); ?></td>
                    <td><?php echo e($star->city); ?></td>
                    <td><a href="<?php echo e(route ('view.star',$star->id)); ?>" class="btn btn-primary btn-sm">View</a> </td>
                    <td><a href="<?php echo e(route ('delete.star',$star->id)); ?>" class="btn btn-danger btn-sm">delete</a> </td>
                    <td><a href="<?php echo e(route ('update.page',$star->id)); ?>" class="btn btn-warning btn-sm">update</a> </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <div class="mt-5">
                <?php echo e($data->links()); ?>

            </div>
        </div>
        </div>
    </div>
</body>
</html>




    <h3>
       
    </h3>
<?php /**PATH C:\xampp\htdocs\project_crud\resources\views/allstars.blade.php ENDPATH**/ ?>