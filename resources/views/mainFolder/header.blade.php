@extends('navModal')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Project Demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <!-- font owsam -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('/public/assets/css/') }}/style.css" />
    </head>
    <body style="background-color: #e8f9f7;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow mb-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-2 mx-auto text-center">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('/public/assets/img') }}/logo.png" alt="" class="w-50" />
                        </a>
                    </div>
                    <div class="col-12 col-md-10 mx-auto">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"> </span>
                        </button>
                        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto text-uppercase fw-bold ">
                                <li class="nav-item px-2">
                                    <a class="nav-link"  href="{{route('home')}}" >হোম</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">হাসপাতাল এবং ডায়াগনস্টিক</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href=""  data-bs-toggle="modal" data-bs-target="#exampleModal">ডাক্তার</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">ই-মেডিসিন</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">অ্যাম্বুলেন্স</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">ব্লাড খুঁজুন</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container text-center fixed-margin "  >
            <div class="row">
                <div class="col-12 text-info my-2">
                    <h4 class="fw-bold">স্মার্ট স্বাস্থ্য সেবা নাগরিক পোর্টালে স্বাগতম</h4>
                    <h6 class="text-uppercase fw-bold mt-3 ">এইচপিভি টিকা গ্রহণের প্রক্রিয়া</h6>
                </div>
                <div class="col-12 mt-3">
                    <img class="shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/hpv-setps.png" alt="avatar" />
                </div>
            </div>
            <div class="row mt-4 text-center mx-auto">
                <!-- Carousel wrapper -->
                <div id="carouselMultiItemExample" data-bs-carousel-init class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner py-4">
                        <!-- Inner -->
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('public/assets/slider/') }}/Banner-01-c3042eb0.png" class="d-block w-100" alt="payOnline" />
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('public/assets/slider/') }}/Banner-02-97b3a83c.png" class="d-block w-100" alt="payplusApps" />
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('public/assets/slider/') }}/Banner-03-e906c2c7.png" class="d-block w-100" alt="payplusShop" />
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>
                    <!-- Inner -->
                    <!-- Controls -->
                </div>
                <!-- Carousel wrapper -->
                 
                <!-- <div class="d-grid gap-2 col-md-3 col-6 mx-auto py-2">
                    
                    <button class="btn btn-info" type="button"><a href="{{route('registerPage')}}" class="text-dark">নিবন্ধন করুন
                    </a></button>
                    
                </div> -->
                <div class="d-grid gap-2 col-md-3 col-6 mx-auto py-2">
                    <button class="btn btn-info" type="button"><a href="{{route('viewLogin')}}" class="text-dark">লগ ইন</a></button>
                </div>
                <div class="d-grid gap-2 col-md-3 col-6 mx-auto py-2">
                    <button class="btn btn-info" type="button"><a href="{{route('registerPage')}}" class="text-dark">স্মার্ট সেবা কার্ড সংগ্রহ</a></button>
                </div>
                <div class="d-grid gap-2 col-md-3 col-6 mx-auto py-2">
                    <button class="btn btn-info" type="button"><a href="{{route('formView')}}" class="text-dark">কার্ড যাচাই করুন</a></button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 my-2">
                    <h4 class="fw-bold text-info"><a href="{{route('registerPage')}}" class="text-dark">টিকা গ্রহণের প্রক্রিয়া</a></h4>
                </div>
                
                <div class="col-6 col-md-3 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 text-uppercase fw-semibold mt-3 text-info">
                                    <h4>১ম ধাপ</h4> 
                                </div>
                                <div class="col-md-12">
                                    <img class="" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 mt-4 text-uppercase fw-semibold text-info">
                                    <h4>অনলাইনে নিবন্ধন</h4>
                                </div>
                                <div class="col-12 text-center px-3 text-info">
                                <p>প্রথমে এই পোর্টালের মাধ্যমে জন্ম নিবন্ধন সনদ নম্বর ও সঠিক মোবাইল নম্বর যাচাইপূর্বক অনলাইনে নিবন্ধন সম্পন্ন করবেন।</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 text-uppercase fw-semibold mt-3 text-info">
                                    <h4>২য় ধাপ</h4> 
                                </div>
                                <div class="col-md-12">
                                    <img class="" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 mt-4 text-uppercase fw-semibold text-info">
                                    <h4>কাঙ্ক্ষিত টিকাদান প্রোগামে নিবন্ধন করুন</h4>
                                </div>
                                <div class="col-12 text-center px-3 text-info">
                                <p>আপনার প্রোফাইলে থাকা টিকাদান তালিকা থেকে কাঙ্ক্ষিত টিকাটি নির্বাচন করে প্রয়োজনীয় তথ্যাদি প্রদান করে নিবন্ধন করুন।</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 text-uppercase fw-semibold mt-3 text-info">
                                    <h4>৩য় ধাপ</h4> 
                                </div>
                                <div class="col-md-12">
                                    <img class="" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 mt-4 text-uppercase fw-semibold text-info">
                                    <h4>টিকা কার্ড ডাউনলোড</h4>
                                </div>
                                <div class="col-12 text-center px-3 text-info">
                                <p>টিকা কার্ডটি ডাউনলোড করে সংরক্ষণ করুন, টিকা গ্রহণের জন্য কার্ডটি আবশ্যক, কার্ডে থাকা গুরুত্বপূর্ণ নির্দেশনাসমূহ অনুসরণ করুন।</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 text-uppercase fw-semibold mt-3 text-info">
                                    <h4>৪র্থ ধাপ</h4> 
                                </div>
                                <div class="col-md-12">
                                    <img class="" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 mt-4 text-uppercase fw-semibold text-info">
                                    <h4>টিকা কেন্দ্রে টিকা গ্রহণ করুন</h4>
                                </div>
                                <div class="col-12 text-center px-3 text-info">
                                <p>টিকা গ্রহণের জন্য টিকা কার্ডটি নিয়ে নির্ধারিত টিকা কেন্দ্রে যান। ভবিষ্যতে বিভিন্ন নাগরিক সেবা এবং টিকা পাওয়ার প্রমাণস্বরূপ টিকা কার্ডটি সংরক্ষণ করুন। </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="mt-5">
            <!-- Footer -->
            <footer class="text-center text-lg-start text-white" style="background-color: #1c2331;">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center p-4" >
                    <div class="row text-center">

                    <div class="">
                        <span>নিবন্ধন সম্পর্কিত যেকোনো সহযোগিতায় :</span>
                        
                    </div>
                    <div>
                    <img class="" src="{{ asset('/public/assets/payment') }}/phone.png" alt="avatar" />
                    <span class="mt-2">১০৩৫৪</span>
                    </div>
                    </div>

                    
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 >স্মার্ট স্বাস্থ্য সেবা</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;" />
                                <p>
                                    আমরা আমাদের সেবা গুলো গ্রাহকের প্রত্যাশা ও প্রয়োজন অনুযায়ী পূরণ করতে সক্ষম ।
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6>সহযোগী সংস্থাসমূহ</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;" />
                                <div class="row text-center">
                                    <div class="col-4">
                                        <a href="">
                                            <img class="w-100" src="{{ asset('/public/assets/payment') }}/mis_logo 1.png" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <a href="">
                                            <img class=" w-75" src="{{ asset('/public/assets/payment') }}/unicef_logo.png" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <a href="">
                                            <img class=" w-75" src="{{ asset('/public/assets/payment') }}/gavi.png" alt="avatar" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 >যোগাযোগ</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;" />
                                <p><i class="fas fa-home mr-3"></i> কুমিল্লা, ৩৫০০</p>
                                <p><i class="fas fa-envelope mr-3"></i> <a href="mailto: ceolabib@gmail.com.com"> ceolabib@gmail.com</a></p>
                                <p><i class="fas fa-phone mr-3"></i> +৮৮০ ১৭৫৫০-৪৮০১৭</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © {{ date('Y') }}
                    <a class="text-white" href="">ই-সেবা</a>
                </div>
            </footer>
            <!-- Footer -->
        </div>
        <!-- End of .container -->

      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
