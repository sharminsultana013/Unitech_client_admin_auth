

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('dashboard')); ?>">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('aboutAdmin')); ?>">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="fas fa-seedling"></i></h1>
                        <h6 class="text-white">About Us</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('productAdmin')); ?>">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">Our Products</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('serviceAdmin')); ?>">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white">Our Services</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('clientAdmin')); ?>">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                        <h6 class="text-white">Our Clients</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('galleryAdmin')); ?>">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="fas fa-image"></i></h1>
                        <h6 class="text-white">Gallery</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('overviewAdmin')); ?>">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white">Machine Overview</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                    <h6 class="text-white">Our Profile</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('sliderAdmin')); ?>">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="fas fa-image"></i></h1>
                        <h6 class="text-white">Carousel Image</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="<?php echo e(route('messageToClient')); ?>">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                        <h6 class="text-white">Messages</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/admin/indexAdmin.blade.php ENDPATH**/ ?>