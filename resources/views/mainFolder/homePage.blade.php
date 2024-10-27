@extends('navModal') @extends('nav&fotter') @section('body')
<div class="row text-center">
    <div class="row">
        <div class="col-12 text-info my-2">
            <h4 class="fw-bold">স্মার্ট স্বাস্থ্য সেবা নাগরিক পোর্টালে স্বাগতম</h4>
            <h6 class="text-uppercase fw-bold mt-3">এইচপিভি টিকা গ্রহণের প্রক্রিয়া</h6>
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
                            <img class="w-100 p-2" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
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
                            <img class="w-100 p-2" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
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
                            <img class="w-100 p-2" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
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
                            <img class="w-100 p-2" src="{{ asset('/public/assets/img') }}/info_2.png" alt="avatar" />
                        </div>
                        <div class="col-md-12 mt-4 text-uppercase fw-semibold text-info">
                            <h4>টিকা কেন্দ্রে টিকা গ্রহণ করুন</h4>
                        </div>
                        <div class="col-12 text-center px-3 text-info">
                            <p>টিকা গ্রহণের জন্য টিকা কার্ডটি নিয়ে নির্ধারিত টিকা কেন্দ্রে যান। ভবিষ্যতে বিভিন্ন নাগরিক সেবা এবং টিকা পাওয়ার প্রমাণস্বরূপ টিকা কার্ডটি সংরক্ষণ করুন।</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row text-start">
        <div class="">
            <p>
                <div class="card p-2"  data-bs-toggle="collapse" data-bs-target="#collapseWidthExample1" aria-expanded="false" aria-controls="collapseWidthExample1">
                    এই ওয়েব পোর্টালের উদ্দেশ্য কি?
                </div>
            </p>
            <div >
                <div class="collapse " id="collapseWidthExample1">
                    <div class="alert alert-info"  >
                    এই পোর্টালের মাধ্যমে নাগরিকরা স্মার্ট স্বাস্থ্যসেবা সুবিধা সমূহ গ্রহণ করতে পারবে
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <p
                 class="card p-2"  data-bs-toggle="collapse" data-bs-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2">
                কিভাবে রেজিস্ট্রেশন করবো?
                
            </p>
            <div >
                <div class="collapse " id="collapseWidthExample2">
                    <div class="alert alert-info"  >
                        রেজিস্ট্রেশন করতে আপনার জন্ম নিবন্ধন সনদ প্রয়োজন।
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <p class="card p-2"  data-bs-toggle="collapse" data-bs-target="#collapseWidthExample3" aria-expanded="false" aria-controls="collapseWidthExample3">
                কে বা কারা এই পোর্টালে নিবন্ধন করতে পারবে?
                
            </p>
            <div >
                <div class="collapse " id="collapseWidthExample3">
                    <div class="alert alert-info"  >
                        বাংলাদেশের আওতাভুক্ত নাগরিকরা এই পোর্টালে নিবন্ধন করতে পারবে
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <p class="card p-2"  data-bs-toggle="collapse" data-bs-target="#collapseWidthExample4" aria-expanded="false" aria-controls="collapseWidthExample4">
                লগ ইন করতে কি প্রয়োজন?
                
            </p>
            <div >
                <div class="collapse " id="collapseWidthExample4">
                    <div class="alert alert-info"  >
                    লগ ইন করতে হলে সঠিক জন্ম নিবন্ধন নম্বর এবং জন্ম তারিখ প্রদান করতে হবে। জন্ম নিবন্ধন এবং জন্ম তারিখ সঠিক হলে এই পোর্টালে নিবন্ধন এর সময় ব্যবহারকৃত মোবাইল নম্বরটিতে ওটিপি প্রেরন করা হবে।
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
