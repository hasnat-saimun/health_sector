@extends('navModal') @extends('nav&fotter') @section('body')
<div class="row mt-4 text-center mx-auto mt-4">
    <div class="col-12 my-2">
        <h3 class="fw-bold">আপনার প্রয়োজনীয় ওষুধ</h3>
    </div>
    <div class="col-12 d-block d-lg-none">
    <div class="row mb-3">
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine1.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Medicien</h5>
            </a>
        </div>
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine2.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Personal Care</h5>
            </a>
        </div>
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine3.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Baby & Mom</h5>
            </a>
        </div>
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine4.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Women Cear</h5>
            </a>
        </div></div>
        <div class="row mb-2">
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine5.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Sexual Wellbeing</h5>
            </a>
        </div>
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine6.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Diabetic Care</h5>
            </a>
        </div>
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine7.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">vitamin & suppliments</h5>
            </a>
        </div>
        <div class="col-3">
            <a href="#">
                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine8.jpg" alt="avatar" style="width: 80px;" />
                <h5 class="text-dark">Health Accessories</h5>
            </a>
        </div>
    </div>
        
        </div>
    <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample" data-bs-carousel-init class="carousel slide carousel-dark d-none d-lg-block" data-bs-ride="carousel">
        <div class="carousel-inner py-4 ">
            <!-- Inner -->
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine1.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Medicien</h6>
                            </a>
                        </div>

                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine2.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Personal Care</h6>
                            </a>
                        </div>

                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine3.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Baby & Mom</h6>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine4.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Women Cear</h6>
                            </a>
                        </div>

                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine5.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Sexual Wellbeing</h6>
                            </a>
                        </div>

                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine6.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Diabetic Care</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine7.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">vitamin & suppliments</h6>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/slider/') }}/medicine8.jpg" alt="avatar" style="width: 150px;" />
                                <h6 class="text-dark">Health Accessories</h6>
                            </a>
                        </div>

                        <div class="col-lg-2">
                            <a href="#">
                                <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client3.webp" alt="avatar" style="width: 150px;" />
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client4.webp" alt="avatar" style="width: 150px;" />
                        </div>

                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client5.webp" alt="avatar" style="width: 150px;" />
                        </div>

                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client6.webp" alt="avatar" style="width: 150px;" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client1.webp" alt="avatar" style="width: 150px;" />
                        </div>

                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client2.webp" alt="avatar" style="width: 150px;" />
                        </div>

                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client3.webp" alt="avatar" style="width: 150px;" />
                        </div>
                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client4.webp" alt="avatar" style="width: 150px;" />
                        </div>

                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client5.webp" alt="avatar" style="width: 150px;" />
                        </div>

                        <div class="col-lg-2">
                            <img class="shadow-1-strong mb-4" src="{{ asset('/public/assets/client/') }}/client6.webp" alt="avatar" style="width: 150px;" />
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
@endsection
