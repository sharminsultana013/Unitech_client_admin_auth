



<?php $__env->startSection('content'); ?>

  <!-- banner -->
  <section id="banner">
    <!-- caarousel -->
    <div id="carouselExampleCaptionsOne" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators" style="margin-bottom: 50px;">
        <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div> 

      <div class="carousel-inner">
        

        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="carousel-item  <?php echo e($loop->iteration == 1 ? 'active' : ''); ?>">
          <img src="<?php echo e(asset($slider->image)); ?>" class="d-block w-100" alt="...">
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
      </div>


      <button class="carousel-control-prev" style="margin-bottom: 0px;" type="button"
        data-bs-target="#carouselExampleCaptionsOne" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" style="margin-bottom: 0px;" type="button"
        data-bs-target="#carouselExampleCaptionsOne" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- end carousel -->
  </section>
  <!-- end banner -->

  <!-- About -->
  <section id="about" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>A</span>bout <span>U</span>s</h1>
    <div class="container my-5">
          
          
      <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


      <div class="row my-3">
          <div class="col-lg-6">
              <div class="aboutPageText">
                  <h1><?php echo e($about->title); ?></h1>
                  <p class="my-4 mb-5" style="text-align: justify"><?php echo e($about->description); ?></p>
              </div>
              <a href="<?php echo e(route('about')); ?>">
                <button type="button" class="aboutBtn btn mb-5" style="border: 1px solid rgb(33, 6, 189)">Learn
                  More</button>
              </a>
          </div>
          <div class="col-lg-6">
              <img class="aboutImg" src="<?php echo e(asset($about->image)); ?>" alt="">
          </div>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
      

      
    </div>
  </section>
  <!-- end about -->

  <!-- Our Products -->
  <section id="products" class="my-5" style="padding: 0 5%;">
    <h1 class="aboutTitle text-center my-5"><span>O</span>ur <span>P</span>roducts</h1>
    <div class="container product">
      <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">

          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <div class="col">
          <div class="card h-100 p-3">
            <img src="<?php echo e(asset($product->image)); ?>" width="100%"  class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($product->title); ?></h5>
              <p class="card-text" style="text-align: justify"><?php echo e($product->description); ?></p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo e($product->id); ?>" type="button">View
                Details</button>
            </div>
          </div>
        </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section id="services" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>O</span>ur <span>S</span>ervices</h1>
    <div class="service p-3">
      <div class="row row-cols-1 row-cols-md-2 g-3">

          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <div class="col">
          <div class="card h-100">
            <img src="<?php echo e(asset($service->image)); ?>" class="card-img-top serviceImg" alt="">
            <div class="serviceTextDiv">
              <p class="serviceTitle"><?php echo e($service->title); ?></p>
              <p class="serviceText"><?php echo e($service->description); ?></p>
            </div>
          </div>
        </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
      </div>
    </div>
  </section>
  <!-- end our services -->

  <!-- Gallery -->
  <section id="gallery" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>G</span>ellary</h1>
    <div class="container gallery">
      <div class="row">

        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        
        <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="<?php echo e(asset($gallery->image)); ?>" target="blank">
            <img src="<?php echo e(asset($gallery->image)); ?>" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        
      </div>
    </div>
  </section>
  <!-- end gallery -->

  <!-- Clients -->
  <section id="client" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center p-1 mb-5"><span>O</span>ur <span>C</span>lients</h1>
    <!-- <h1 class="text-center" >sharmin sultana</h1> -->
    <div class="container client">
      <section class="client-logos slider ">

        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="slide"><img src="<?php echo e(asset($client->image)); ?>">
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
      </section>
    </div>
  </section>
  <!-- end clients -->

  <!-- contact us -->
  <section id="contact" class="my-5">
    <h1 class="aboutTitle text-center p-5"><span>C</span>ontact <span>U</span>s</h1>
    <div class="container contact p-3">
      <!--Section: Contact v.2-->
      <section class="mb-4">
        <!--Section description-->

        <div class="row">
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
            <form action="<?php echo e(route('insert_contact')); ?>" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="name" class="form-control" name="name" id="floatingInput" placeholder="Name" required>
                    <label class="contactText" for="floatingInput">Name</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email Address" required>
                    <label class="contactText" for="floatingInput">Email address</label>
                  </div>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <input type="subject"  class="form-control" name="subject" id="floatingInput" placeholder="Subject" required>
                    <label class="contactText" for="floatingInput">Subject</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-12">
                  <div class="form-floating mb-3">
                    <input type="message" class="form-control" name="message" id="floatingInput" placeholder="Your Message" required>
                    <label class="contactText" for="floatingInput">Your Message</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->
              <div class="text-md-left">
                <button name="submit" type="submit" class="aboutBtn btn mb-5" style="border: 1px solid rgb(33, 6, 189)">Submit</button>
              </div>
          </div>
          </form>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
            
            <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <ul class="list-unstyled mb-0">
              <li class="contactList"><i class="fas fa-map-marker-alt fa-2x contactIcon"></i>
                <p><?php echo e($addr->address); ?></p>
              </li>
              <li class="contactList"><i class="fas fa-phone mt-4 fa-2x contactIcon"></i>
                <p><?php echo e($addr->mobile); ?></p>
              </li>
              <li class="contactList"><i class="fas fa-envelope mt-4 fa-2x contactIcon"></i>
                <p><?php echo e($addr->email); ?></p>
              </li>
            </ul>

            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 

          </div>
          <!--Grid column-->
        </div>
      </section>
      <!--Section: Contact v.2-->
    </div>
  </section>
  <!-- end contact us -->


  
  <?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="modal fade " id="exampleModal-<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog">
    <div class="modal-content modalBody">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel"><?php echo e($product->title); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <img src="<?php echo e(asset($product->image)); ?>" width="100%" height="320vh" class="card-img-top" alt="">
        <p class="modalText"><?php echo e($product->description); ?></p>
      </div>
    </div>
  </div>
</div> 


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Unitech laravel\resources\views/index.blade.php ENDPATH**/ ?>