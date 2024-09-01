@extends('layouts-content.app')
@section('content')
<section class="about_area section_gap">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5" align="right">
                <div class="about_img">
                    <img class="img-fluid" style="width: 300px; height: auto;" src="{{asset('storage/image/' . $profile->gambar)}}" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <h2>let’s <br>
                        Introduce about <br>
                        myself</h2>
                    <p>
                        {{$profile->nama_lengkap}}
                    </p>
                    <p>
                        {{$profile->tentang}}
                    </p>
                    <p>{{$profile->email}}</p>
                    <p>{{$profile->no_tlp}}</p>
                    <p>{{$profile->alamat}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="whole-wrap">
		<div class="container">
            <div class="section-top-border">
				<h3 class="mb-30 title_color">Education</h3>
                <hr style="border: 1px solid black">
				<div class="row">
                    <div class="col-lg-12">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="serial">No.</div>
                                <div class="country">Nama Sekolah</div>
                                <div class="visit">Jurusan</div>
                                <div class="percentage">Tahun Lulus</div>
                            </div>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($edu as $e)
                            <div class="table-row">
                                    
                                <div class="serial">{{$no++}}</div>
                                <div class="country">{{$e->nama_sekolah}}</div>
                                <div class="visit">{{$e->jurusan}}</div>
                                <div class="visit">{{$e->tahun_lulus}}</div>
                                
                            </div>
                            @endforeach
                        </div>
					</div>
				</div>
                
			</div>
			<div class="section-top-border">
				<h3 class="mb-30 title_color">Skill</h3>
                <hr style="border: 1px solid black">
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">No.</div>
							<div class="country">Name Skils</div>
							<div class="visit">Category Skill</div>
							<div class="percentage">Percentages</div>
						</div>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($skill as $sk)
						<div class="table-row">
                                
                            <div class="serial">{{$no++}}</div>
							<div class="country">{{$sk->nama_skills}}</div>
							<div class="visit">{{$sk->category_skill}}</div>
							<div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-@php if ($sk->precentage < 50) {
                                       echo 2;
                                    }elseif ($sk->precentage >= 50) {
                                        echo 1;
                                    } @endphp" 
                                    role="progressbar" style="width: {{$sk->precentage}}%" 
                                    aria-valuenow="{{$sk->precentage}}" aria-valuemin="0" 
                                    aria-valuemax="100">
                                    </div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
		</div>
	</div>
</section>
@endsection