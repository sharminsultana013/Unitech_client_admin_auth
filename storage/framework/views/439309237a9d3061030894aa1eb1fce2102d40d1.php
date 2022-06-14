

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?php echo e(route('insert_about')); ?>" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>


                    <div class="card-body">
                        <h4 class="card-title">Add New About Us Information</h4>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="About Title here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label"
                                place>Description</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="description" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname"
                                class="col-sm-3 text-end control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="ml-1 h4" style="color: red"><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                    <div class="border-top">
                        <div class="card-body">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About Information</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php $__currentLoopData = $aboutlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aboutlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($aboutlist->id); ?></td>
                                        <td><?php echo e($aboutlist->title); ?></td>
                                        <td><?php echo e($aboutlist->description); ?></td>
                                        <td><img width="60px" src="<?php echo e(asset($aboutlist->image)); ?>"></td>
                                        
                                        <td>
                                            <button class="btn btn-danger" type="submit"><a href="<?php echo e(url('/aboutDelete/')); ?>/<?php echo e($aboutlist->id); ?>" title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/admin/about.blade.php ENDPATH**/ ?>