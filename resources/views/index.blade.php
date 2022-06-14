
@extends('welcome')


@section('content')

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
        

        @foreach($sliders as $slider)

        <div class="carousel-item  {{$loop->iteration == 1 ? 'active' : ''}}">
          <img src="{{asset($slider->image)}}" class="d-block w-100" alt="...">
        </div>

        @endforeach

        
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
          
          
      @foreach($abouts as $about)


      <div class="row my-3">
          <div class="col-lg-6">
              <div class="aboutPageText">
                  <h1>{{$about->title}}</h1>
                  <p class="my-4 mb-5" style="text-align: justify">{{$about->description}}</p>
              </div>
              <a href="{{route('about')}}">
                <button type="button" class="aboutBtn btn mb-5" style="border: 1px solid rgb(33, 6, 189)">Learn
                  More</button>
              </a>
          </div>
          <div class="col-lg-6">
              <img class="aboutImg" src="{{asset($about->image)}}" alt="">
          </div>
      </div>

      @endforeach

      
      {{-- <div class="row">
        <div class="col-lg-6">
          <div class="aboutText">
            <h1>Lorem Ipsum Dolor</h1>
            <p class="my-4 mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum voluptates nesciunt
              saepe aut autem id architecto numquam iusto non deleniti vitae, nihil exercitationem dolores cum. Dolor ab
              sapiente recusandae possimus? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum voluptates
              nesciunt saepe aut autem id architecto numquam iusto non deleniti vitae, nihil exercitationem dolores cum.
              Dolor ab sapiente recusandae possimus?</p>

            <a href="{{route('about')}}">
              <button type="button" class="aboutBtn btn mb-5" style="border: 1px solid rgb(33, 6, 189)">Learn
                More</button>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img class="aboutImg" src="{{asset('frontend/slider/9.jpg')}}" alt="">
        </div>
      </div> --}}

      
    </div>
  </section>
  <!-- end about -->

  <!-- Our Products -->
  <section id="products" class="my-5" style="padding: 0 5%;">
    <h1 class="aboutTitle text-center my-5"><span>O</span>ur <span>P</span>roducts</h1>
    <div class="container product">
      <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">

          @foreach($products as $product)


        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset($product->image)}}" width="100%"  class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$product->title}}</h5>
              <p class="card-text" style="text-align: justify">{{$product->description}}</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$product->id}}" type="button">View
                Details</button>
            </div>
          </div>
        </div>

          @endforeach


        {{-- <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/2.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title" style="font-family: 'Lora', serif;">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section id="services" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>O</span>ur <span>S</span>ervices</h1>
    <div class="service p-3">
      <div class="row row-cols-1 row-cols-md-2 g-3">

          @foreach($services as $service)


        <div class="col">
          <div class="card h-100">
            <img src="{{asset($service->image)}}" class="card-img-top serviceImg" alt="">
            <div class="serviceTextDiv">
              <p class="serviceTitle">{{$service->title}}</p>
              <p class="serviceText">{{$service->description}}</p>
            </div>
          </div>
        </div>

          @endforeach

        
      </div>
    </div>
  </section>
  <!-- end our services -->

  <!-- Gallery -->
  <section id="gallery" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>G</span>ellary</h1>
    <div class="container gallery">
      <div class="row">

        @foreach($galleries as $gallery)

        
        <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="{{asset($gallery->image)}}" target="blank">
            <img src="{{asset($gallery->image)}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          {{-- <a href="{{asset($gallery->image)}}" target="blank">
            <img src="{{asset($gallery->image)}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a> --}}
        </div>

        @endforeach



        {{-- <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="{{asset('frontend/gallery/3.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/3.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          <a href="{{asset('frontend/gallery/1.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/1.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="{{asset('frontend/gallery/5.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/5.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          <a href="{{asset('frontend/gallery/5.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/4.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>
        </div> --}}
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

        @foreach($clients as $client)

        <div class="slide"><img src="{{asset($client->image)}}">
        </div>

        @endforeach


        {{-- <div class="slide"><img src="{{asset('frontend/clients/2.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/3.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/4.webp/')}}">
        </div>
        <div class="slide"><img src="{{asset('frontend/clients/5.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/6.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/7.webp')}}">
        </div> --}}
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
            <form action="{{route('insert_contact')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
              @csrf

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
            
            @foreach($address as $addr)


            <ul class="list-unstyled mb-0">
              <li class="contactList"><i class="fas fa-map-marker-alt fa-2x contactIcon"></i>
                <p>{{$addr->address}}</p>
              </li>
              <li class="contactList"><i class="fas fa-phone mt-4 fa-2x contactIcon"></i>
                <p>{{$addr->mobile}}</p>
              </li>
              <li class="contactList"><i class="fas fa-envelope mt-4 fa-2x contactIcon"></i>
                <p>{{$addr->email}}</p>
              </li>
            </ul>

            
            @endforeach
 

          </div>
          <!--Grid column-->
        </div>
      </section>
      <!--Section: Contact v.2-->
    </div>
  </section>
  <!-- end contact us -->


  {{-- modal --}}
  @foreach($productList as $product)

  <div class="modal fade " id="exampleModal-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog">
    <div class="modal-content modalBody">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">{{$product->title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <img src="{{asset($product->image)}}" width="100%" height="320vh" class="card-img-top" alt="">
        <p class="modalText">{{$product->description}}</p>
      </div>
    </div>
  </div>
</div> 
{{-- end modal --}}

@endforeach

@endsection