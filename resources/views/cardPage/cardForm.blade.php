@extends('navModal')
@extends('nav&fotter')
@section('body')
<div class="row">
    <div class="col-10 mx-auto">
    <div class="card text-bg-light p-2 border-0 shadow">
        <form>
            <div class="mb-2">
                <label for="cardNo" class="form-label ">কার্ড নং </label>
                <input type="number" class="form-control form-control-sm" id="cardNo" name="cardNo" placeholder="আপনার কার্ডের নাম্বার দিন">
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <label for="name" class="form-label ">নাম</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="">
                </div>
                <div class="col-4">
                    <label for="fName" class="form-label ">পিতার নাম</label>
                    <input type="text" class="form-control form-control-sm" id="fName" name="fName" placeholder="">
                </div>
                <div class="col-4">
                    <label for="photo" class="form-label ">ছ‌বি</label>
                    <input type="file" class="form-control form-control-sm" id="photo" name="photo" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <label for="mobile" class="form-label ">মোবাইল নং</label>
                    <input type="number" class="form-control form-control-sm" id="mobile" name="mobile" placeholder="">
                </div>
                <div class="col-4">
                    <label for="birthDate" class="form-label ">জন্ম তা‌রিখ</label>
                    <input type="date" class="form-control form-control-sm" id="birthDate" name="birthDate" placeholder="">
                </div>
                <div class="col-4">
                    <label for="nid" class="form-label ">ভোটার আইডি নং</label>
                    <input type="number" class="form-control form-control-sm" id="nid" name="nid" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="cardType" class="form-label ">বিভাগ</label>
                    <select id="cardType" class="form-select form-select-sm">
                        <option selected>--</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="cardType" class="form-label ">জেলা </label>
                    <select id="cardType" class="form-select form-select-sm">
                        <option selected>--</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="cardType" class="form-label ">উপজেলা/পৌরসভা</label>
                    <select id="cardType" class="form-select form-select-sm">
                        <option selected>--</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="cardType" class="form-label ">ইউনিয়ন</label>
                    <select id="cardType" class="form-select form-select-sm">
                        <option selected>--</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="row mb-5 ">
                <div class="col-6">
                    <label for="birthDate" class="form-label ">কার্ড সক্রিয় তারিখ </label>
                    <input type="date" class="form-control form-control-sm" id="birthDate" name="birthDate" placeholder="">
                </div>
                <div class="col-6">
                    <label for="nid" class="form-label ">কার্ড নিষ্ক্রিয় তারিখ</label>
                    <input type="date" class="form-control form-control-sm" id="nid" name="nid" placeholder="">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <button class="btn btn-info  btn-sm" type="button"> যাচাই করুন </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection