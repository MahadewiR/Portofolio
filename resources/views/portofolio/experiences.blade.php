@extends('layouts-content.app')
@section('content')
<section class="features_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>Experiences</h2>
                    <hr style="border: 1px solid black">
                </div>
            </div>
        </div>
        <div class="row feature_inner justify-content-center">
            @foreach ($exp as $x)
                
            <div class="col-lg-3 col-md-6">
                <div class="feature_item" style="background-color: rgb(199, 213, 228)">
                    <h4>{{$x->nama_perusahaan}}</h4>
                    <p style="color: black">{{$x->posisi}}</p>
                    <p style="color: black">{{$x->lama_kerja}}</p>
                    <p style="color: black">{{$x->deskripsi}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection