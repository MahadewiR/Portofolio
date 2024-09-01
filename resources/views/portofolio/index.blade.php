@extends('layouts-content.app')
@section('content')
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h3 class="text-uppercase">Anyyoonggg</h3>
                        <h1 class="text-uppercase">I am {{$profile->nama_lengkap}}</h1>
                        <h5 class="text-uppercase">Newbie Programmer</h5>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <img class="" style="width: 300px; height:auto;" src="{{ asset('storage/image/' . $profile->gambar) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
