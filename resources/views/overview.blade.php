{{-- @extends('welcome')

@section('content')

<style>
    body{
    overflow-x: hidden;
    background-image: linear-gradient(to bottom right,  rgb(247, 107, 205), rgb(243, 243, 137));
    }
</style> --}}




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unitech Label</title>
        <link rel="icon" type="image/x-icon" href="{{asset('frontend/logo/viewport2.png')}}">
        <!-- bootstrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- second carousel jquery -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- css -->
        <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/overview.css')}}">
        {{-- animation --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min. css"/>
        {{-- <style>
            body{
            overflow-x: hidden;
            background-image: linear-gradient(to bottom right,  rgb(247, 107, 205), rgb(243, 243, 137));
            }
        
        .aboutPageTitle{
            z-index: 1;
            margin-top: 20%;
            font-size: 4em;
            font-weight: bold;
            font-family: 'Lora', serif;
            color: white;
            text-shadow: 2px 2px 5px #1f2274;
        }
        
        .aboutPageText{
            text-align: justify;
            padding: 5%;
        }
        
        .aboutPageText h1{
            font-size: 2em;
            font-weight: bold;
            font-family: 'Lora', serif;
        }
        
        #about{
            background-color: white;
            margin-top: 18%;
        }
         
        
        </style> --}}
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
                <a class="navbar-brand" href="{{route('/')}}" style="padding-left: 3em; ">
                    <img src="{{asset('frontend/logo/logo.png')}}" style="width:90px; height:50px;" alt="">
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
                            <a class="nav-link active menuItem" aria-current="page" href="{{route('/')}}">Go Back to
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active menuItem" aria-current="page" href="{{route('overview')}}">Company
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
    <section id="overview" class="my-5">
        <h1 class="overviewTitle text-center mb-5">Company Overview</h1>
        <div class="container overview">
            <div class="row">
                {{-- <div class="col-lg-4 col-md-6">
                    <img src="{{asset('frontend/1.jpeg')}}" class="mb-3" width="100%" alt="">
                </div> --}}

                <div class="col-lg-12 col-md-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
            

                        @foreach($overviews as $overview)
              
              
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{$overview->id}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{$overview->id}}" aria-expanded="false"
                                    aria-controls="flush-collapse{{$overview->id}}">
                                    {{$overview->title}}
                                </button>
                            </h2>
                            <div id="flush-collapse{{$overview->id}}" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading{{$overview->id}}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body d-flex">
                                    <div class="col-lg-4 col-md-6">
                                        <a href="{{asset($overview->image)}}" target="blank">
                                            <img src="{{asset($overview->image)}}" class="mb-3" width="100%" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-6" style="padding: 1%">
                                        {{$overview->description}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
              
              
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body d-flex">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{asset('frontend/slider/11.jpg')}}" class="mb-3" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-6" style="padding: 1%">
                                        Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                        accordion body.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div> --}}
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

{{-- @endsection --}}