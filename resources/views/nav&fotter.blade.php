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
                                    <a class="nav-link" href="#">হোম</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">হাসপাতাল এবং ডায়াগনস্টিক সেন্টার</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="">ডাক্তার</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">ই-মেডিসিন</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="#">ব্লাড খুঁজুন</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container text-center fixed-margin "  >
            
            
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
