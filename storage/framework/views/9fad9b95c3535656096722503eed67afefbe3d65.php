




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unitech Label</title>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('frontend/logo/viewport2.png')); ?>">
        <!-- bootstrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- second carousel jquery -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- css -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/overview.css')); ?>">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min. css"/>
        
        <style>
            body{
            overflow-x: hidden;
            background-image: linear-gradient(to bottom right,  rgb(247, 107, 205), rgb(243, 243, 137));
            }
        </style> 

      </head>

<body>

    <!-- navbar -->
    <section id="menubar" class="">
        <nav class="navbar navbar-expand-lg fixed-top shadow p-1 mb-5 bg-body" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(route('/')); ?>" style="padding-left: 3em; ">
                    <img src="<?php echo e(asset('frontend/logo/logo.png')); ?>" style="width:90px; height:50px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon bg-dark" style="color: black;"></span> -->
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="margin-bottom: 0;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 30%;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active menuItem" aria-current="page" href="<?php echo e(route('/')); ?>">Go Back to
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active menuItem" aria-current="page" href="<?php echo e(route('overview')); ?>">Company
                                Overview</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menuItem" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Profiles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item menuItem" target="blank" href="https://drive.google.com/file/d/1dJqNJEWI0q85sOgzldg_o_RJPhuieiNL/view?usp=sharing">Unitech Label</a></li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item menuItem" target="blank" href="https://drive.google.com/file/d/1QWtdppMyJx5rcTvas20vzB0l3o3piB0V/view?usp=sharing">Unitek Trims</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- end navbar -->



    <!-- overview section -->
    <section id="overview" class="my-5  animate__animated animate__fadeInUp">
        <h1 class="overviewTitle text-center mb-5">Company Overview</h1>
        <div class="container overview">
            <div class="row">
                

                <div class="col-lg-12 col-md-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
            

                        <?php $__currentLoopData = $overviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $overview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading<?php echo e($overview->id); ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse<?php echo e($overview->id); ?>" aria-expanded="false"
                                    aria-controls="flush-collapse<?php echo e($overview->id); ?>">
                                    <?php echo e($overview->title); ?>

                                </button>
                            </h2>
                            <div id="flush-collapse<?php echo e($overview->id); ?>" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading<?php echo e($overview->id); ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body d-flex">
                                    <div class="col-lg-4 col-md-6">
                                        <a href="<?php echo e(asset($overview->image)); ?>" target="blank">
                                            <img src="<?php echo e(asset($overview->image)); ?>" class="mb-3" width="100%" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-6" style="padding: 1%">
                                        <?php echo e($overview->description); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end overview section -->


    
    <!-- footer -->
    <section id="footer"
        style="background-image: linear-gradient(to bottom, #2E3192, #040636); color: white; overflow-x: hidden;">
        <p class="text-center footerText">© 2022 Unitech Label & Tag. All rights reserved. </p>
    </section>
    <!-- end footer -->

    <!-- js -->
    <script src="script.js"></script>
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- second carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>

</html>

<?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/overview.blade.php ENDPATH**/ ?>