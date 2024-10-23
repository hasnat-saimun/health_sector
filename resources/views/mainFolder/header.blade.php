<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Project Demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <!-- font owsam -->
        <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('/public/assets/css/') }}/style.css">
    </head>
    <body>
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
                            <span class="navbar-toggler-icon">
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto text-uppercase fw-bold">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('viewLogin')}}">Marchent Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contract Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Report Issue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container text-center fixed-margin">
          
            <div class="row">
                  <div class="col-12  my-2">
                    <h3 class="fw-bold ">আমাদের সেবা সমূহ</h3>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 service d-none d-md-block">
                                    <img class="rounded-circle shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/school.png" alt="avatar" />
                                </div>
                                <div class="col-12 service d-block d-md-none">
                                    <img class="rounded-circle shadow-1-strong w-100 d-block d-md-none" src="{{ asset('/public/assets/img') }}/school.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 text-uppercase fw-semibold mb-4">
                                    স্কুল ম্যানেজমেন্ট 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 service d-none d-md-block">
                                    <img class="rounded-circle shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/transprot.png" alt="avatar" />
                                </div>
                                <div class="col-12 service d-block d-md-none">
                                    <img class="rounded-circle shadow-1-strong w-100 d-block d-md-none" src="{{ asset('/public/assets/img') }}/transprot.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 text-uppercase fw-semibold mb-4">
                                    যানবাহন লাইসেন্স
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 service d-none d-md-block">
                                    <img class="rounded-circle shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/water.png" alt="avatar" />
                                </div>
                                <div class="col-12 service d-block d-md-none">
                                    <img class="rounded-circle shadow-1-strong w-100 d-block d-md-none" src="{{ asset('/public/assets/img') }}/water.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 text-uppercase fw-semibold mb-4">
                                    পানি বিল কালেকশন
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 service d-none d-md-block">
                                    <img class="rounded-circle shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/trade_licence.png" alt="avatar" />
                                </div>
                                <div class="col-12 service d-block d-md-none">
                                    <img class="rounded-circle shadow-1-strong w-100 d-block d-md-none" src="{{ asset('/public/assets/img') }}/trade_licence.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 text-uppercase fw-semibold mb-4">
                                    ট্রেড লাইসেন্স ম্যানেজমেন্ট
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 service d-none d-md-block">
                                    <img class="rounded-circle shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/holding_tax.png" alt="avatar" />
                                </div>
                                <div class="col-12 service d-block d-md-none">
                                    <img class="rounded-circle shadow-1-strong w-100 d-block d-md-none" src="{{ asset('/public/assets/img') }}/holding_tax.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 text-uppercase fw-semibold mb-4">
                                    হোল্ডিং ট্যাক্স ম্যানেজমেন্ট
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-md-4 mt-3">
                    <a href="">
                        <div class="card text-bg-light">
                            <div class="row">
                                <div class="col-md-12 service d-none d-md-block">
                                    <img class="rounded-circle shadow-1-strong w-75" src="{{ asset('/public/assets/img') }}/sonod.png" alt="avatar" />
                                </div>
                                <div class="col-12 service d-block d-md-none">
                                    <img class="rounded-circle shadow-1-strong w-100 d-block d-md-none" src="{{ asset('/public/assets/img') }}/sonod.png" alt="avatar" />
                                </div>
                                <div class="col-md-12 text-uppercase fw-semibold mb-4">
                                    সনদ ব্যবস্থাপনা
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4 text-center mx-auto mt-4">
                    <div class="col-12  my-2">
                    <h3 class="fw-bold">আমাদের গ্রাহক</h3>
                </div>
                <!-- Carousel wrapper -->
                <div id="carouselMultiItemExample" data-bs-carousel-init class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner py-4">
                        <!-- Inner -->
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client1.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client2.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client3.webp" alt="avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client4.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client5.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client6.webp" alt="avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client7.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client8.webp" alt="avatar" style="width: 150px;" />
                                    </div>

                                    <div class="col-lg-4 d-none d-lg-block">
                                        <img class="rounded-circle shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client9.webp" alt="avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inner -->
                    <!-- Controls -->
                    <div class="d-flex justify-content-center mb-4">
                        <button data-bs-button-init class="carousel-control-prev position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button data-bs-button-init class="carousel-control-next position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- Carousel wrapper -->
            </div>
        </div>
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="mt-5">
              <!-- Footer -->
            <footer class="text-center text-lg-start text-white" style="background-color: #1c2331;">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-between p-4" style="background-color: #6351ce;">
                    <!-- Left -->
                    <div class="me-5">
                        <span>আমাদের তথ্য :</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="mailto:ceolabib@gmail.com" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
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
                                <h6 class="text-uppercase fw-bold">Aichgati IT</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;" />
                                <p>
                                আমরা আমাদের সেবা গুলো গ্রাহকের প্রত্যাশা ও প্রয়োজন অনুযায়ী পূরণ করতে সক্ষম ।
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">পেমেন্ট পদ্ধতি</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px;" />
                                <div class="row">
                                  <div class="col-4  ">
                                    <a href="">
                                      <img class="rounded-circle shadow-1-strong w-100 " src="{{ asset('/public/assets/payment') }}/roket.png" alt="avatar" />
                                    </a>
                                  </div>
                                  <div class="col-4 ">
                                    <a href="">
                                      <img class="rounded-circle shadow-1-strong w-75 " src="{{ asset('/public/assets/payment') }}/bekash.png" alt="avatar" />
                                    </a>
                                  </div>
                                  <div class="col-4 ">
                                    <a href="">
                                      <img class="rounded-circle shadow-1-strong w-75 " src="{{ asset('/public/assets/payment') }}/nogod.png" alt="avatar" />
                                    </a>
                                  </div>
                                  <div class="col-4 mt-3">
                                    <a href="">
                                      <img class="rounded-circle shadow-1-strong w-100 " src="{{ asset('/public/assets/payment') }}/upya.png" alt="abaer" />
                                    </a>
                                  </div>
                                </div>
                                
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">যোগাযোগ</h6>
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
                    <a class="text-white" href="">Aichgati IT</a>
                </div>
            </footer>
            <!-- Footer -->
        </div>
        <!-- End of .container -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
