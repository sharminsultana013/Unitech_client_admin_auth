

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Messages</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $MessagesFromClient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $messagelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 
                                <tr>
                                    <td><?php echo e($messagelist->id); ?></td>
                                    <td><?php echo e($messagelist->name); ?></td>
                                    <td><?php echo e($messagelist->email); ?></td>
                                    <td><?php echo e($messagelist->subject); ?></td>
                                    <td><?php echo e($messagelist->message); ?></td>
                                    <td>
                                        
                                            <button class="btn btn-danger" type="submit"><a href="<?php echo e(url('/userMessageDelete/')); ?>/<?php echo e($messagelist->id); ?>" title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
            
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/admin/MessagesFromClients.blade.php ENDPATH**/ ?>