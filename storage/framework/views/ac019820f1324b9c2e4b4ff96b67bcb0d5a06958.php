

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?php echo e(route('insert_message')); ?>" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    

                    <div class="card-body">
                        <h4 class="card-title">Add New Message</h4>
                        <div class="form-group row">
                            <label for="name"
                                class="col-sm-3 text-end control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="designition"
                                class="col-sm-3 text-end control-label col-form-label">Designition</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="designition" name="designition"
                                    placeholder="Your designition" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-3 text-end control-label col-form-label"
                                place>Message</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="message" name="message" required></textarea>
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
                        <h5 class="card-title">Message Table</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designition</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $messagelists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $messagelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($messagelist->id); ?></td>
                                        <td><img width="60px" src="<?php echo e(asset($messagelist->image)); ?>"></td>
                                        <td><?php echo e($messagelist->name); ?></td>
                                        <td><?php echo e($messagelist->designition); ?></td>
                                        <td><?php echo e($messagelist->message); ?></td>
                                        <td>
                                            
                                            <button class="btn btn-danger" type="submit"><a href="<?php echo e(url('/messageDelete/')); ?>/<?php echo e($messagelist->id); ?>" title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designition</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/admin/messageToClient.blade.php ENDPATH**/ ?>