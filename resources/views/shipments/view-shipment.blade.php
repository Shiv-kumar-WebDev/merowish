@extends('layouts.simple.master')
@section('title', 'Add Post')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Shipment</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Shipment</li>
<li class="breadcrumb-item active">Shipment Details</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				{{-- <div class="card-header">
					<h5>City</h5>
				</div> --}}
				<div class="card-body add-post">
					<form class="row needs-validation" novalidate="" action="{{ route('cityCreate') }}" enctype="multipart/form-data" method="post">
						@csrf
						<input type="hidden" name="id" value="{{ $shipments[0]->id_order??'' }}">
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">Amount:</label>
								<div class="d-flex align-items-center justify-content-between">
									<p> <b>INR. {{ $shipments[0]->amount??'' }}</b> </p>
									<a href="" class="badge badge-primary rounded-pill">COD</a>
								</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">Tracking ID:</label>
								<p> <b>{{ $shipments[0]->tracking_id??'' }}</b> </p>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-sm-12 my-4">
							<div class="mb-3 d-flex p-2 gap-4" style="background: #f2f2f2;">
								<div>
									<img height="100px" src="https://picsum.photos/200/300" alt="">
								</div>
								<div>
									<p> <b>{{ $shipments[0]->tracking_id??'' }}</b> </p>
									<label for="validationCustom01">{{ $shipments[0]->product_name??'' }}</label>
								</div>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">Customer Name:</label>
								<p> <b>{{ $shipments[0]->mcName??'' }}</b> </p>
								<label for="validationCustom01">Contact Number:</label>
								<p> <b>{{ $shipments[0]->phone??'' }}</b> </p>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">Membership Plan:</label>
								<p> <b>{{ $shipments[0]->mName??'' }}</b> </p>
							</div>
						</div>
						<div class="btn-showcase text-center">
							<button class="btn btn-danger" type="submit">Wrong Product Received</button>
							<button class="btn btn-success" type="submit">Add Warehouse Barcode</button>
							<button class="btn btn-dark" type="submit">Return To Seller</button>
							{{-- <input class="btn btn-light" type="reset" value="Discard"> --}}
						</div>
					</form>
					{{-- <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
						<div class="m-0 dz-message needsclick">
							<i class="icon-cloud-up"></i>
							<h6 class="mb-0">Drop files here or click to upload.</h6>
						</div>
					</form> --}}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
@endsection