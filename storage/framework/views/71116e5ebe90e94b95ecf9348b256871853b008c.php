

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?php echo e(route('insert_overview')); ?>" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>


                    <div class="card-body">
                        <h4 class="card-title">Add New Company Information</h4>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Company Information Title here" required>
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
                            <label for="name"
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
                        <h5 class="card-title">Company Overview Table</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $overviewlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $overviewlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($overviewlist->id); ?></td>
                                        <td><?php echo e($overviewlist->title); ?></td>
                                        <td><img width="60px" src="<?php echo e(asset($overviewlist->image)); ?>"></td>
                                        <td><?php echo e($overviewlist->description); ?></td>
                                        <td>
                                            
                                            <button class="btn btn-danger" type="submit"><a href="<?php echo e(url('/overviewDelete/')); ?>/<?php echo e($overviewlist->id); ?>" title="delete">
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
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/admin/overviewAdmin.blade.php ENDPATH**/ ?>