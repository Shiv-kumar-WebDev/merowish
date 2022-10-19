@extends('layouts.simple.master')
@section('title', 'User Cards')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Employee Cards</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Employee</li>
    <li class="breadcrumb-item active">Employee Cards</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($employees as $row)
                <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                    <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="{{ asset('assets/images/user-card/1.jpg') }}"
                                alt=""></div>
						@if (isset($row->image))
							{{-- <img src="{{ url('../../public/public/images/employee/'.$row->image) }}" alt="" width="100px" height="100px"> --}}
							<div class="card-profile"><img class="rounded-circle" src="{{ url('../../public/public/images/employee/'.$row->image) }}"
                                alt=""></div>
						@else
							<div class="card-profile"><img class="rounded-circle" src="{{ asset('assets/images/avtar/3.jpg') }}"
                                alt=""></div>
						@endif
                        {{-- <ul class="card-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
				</ul> --}}
                        <div class="text-center profile-details">
                            <h4 class="mt-2">{{ $row->fullname }}</h4>
                            <h6>{{ $row->email }}</h6>
                            <h6><b>Mobile: </b>{{ $row->mobile }}</h6>
                            <h6> <b>Gender: </b> {{ $row->gender }}</h6>
                            <h6> <b>Birthday: </b> {{ $row->birthday }}</h6>
                        </div>
                        {{-- <div class="card-footer row">
					<div class="col-4 col-sm-4">
						<h6>Follower</h6>
						<h3 class="counter">9564</h3>
					</div>
					<div class="col-4 col-sm-4">
						<h6>Following</h6>
						<h3><span class="counter">49</span>K</h3>
					</div>
					<div class="col-4 col-sm-4">
						<h6>Total Post</h6>
						<h3><span class="counter">96</span>M</h3>
					</div>
				</div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')

@endsection
