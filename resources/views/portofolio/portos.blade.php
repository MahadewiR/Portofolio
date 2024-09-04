@extends('layouts-content.app')
@section('content')
    
<section class="portfolio_area section_gap_top" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title text-left">
                    <h2>Proof Activity</h2>
                </div>
            </div>
        </div>
        <div class="filters-content">
            <div class="row portfolio-grid justify-content-center">
                <div class="col-lg-4 col-md-6 all latest">
                    <div class="portfolio_box">
                        <div class="single_portfolio">
                            {{-- <img width="100" src="{{ asset('storage/image/' . $portos->gambar) }}" alt=""> --}}
                            <div class="overlay"></div>
                            <a href="{{route('portos')}}" class="">
                                <div class="icon">
                                    <span class="lnr lnr-cross"></span>
                                </div>
                            </a>
                        </div>
                        <div class="short_info">
                            <h4><a href="{{route('portos')}}">minimal design</a></h4>
                            <p>Animated, portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection