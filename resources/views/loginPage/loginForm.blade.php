@extends('navModal')
@extends('nav&fotter')
@section('body')
<div class="row form-box">
    <div class="col-12 card text-center border-0">
        <div class="">
            <div id="btn"></div>
            <img src="{{ asset('/public/assets/img') }}/logo.png" alt="" class="w-50" />
        </div>
    </div>
    <div class="col-12 card card-body  rounded-0 border-0">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pin Number</label>
                <input type="email" class="form-control input-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your pin " required />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control input-field" id="exampleInputPassword1" placeholder="enter your password" required />
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label span" for="exampleCheck1">Remember Password</label>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-sm btn-info  text-white">Log in</button>
            </div>
            
        </form>
    </div>
</div>

@endsection