@extends('layouts.simple.master')
@section('title', 'Add Post')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>City</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">City</li>
<li class="breadcrumb-item active">City Details</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>City</h5>
				</div>
				<div class="card-body add-post">
					<form class="row needs-validation" novalidate="" action="{{ route('cityCreate') }}" enctype="multipart/form-data" method="post">
						@csrf
						<input type="hidden" name="id" value="{{ $city[0]->id??'' }}">
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">Country:</label>
								<select required class="form-control" id="" type="text" placeholder="Enter city" name="country">
									<option value="">Select Country</option>
									@foreach ($country as $row)
										<option {{ ($row->country_id??'')==($city[0]->country??'')?'selected':'' }} value="{{ $row->country_id }}">{{ $row->country_name }}</option>
									@endforeach
								</select>
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">City Name:</label>
								<input value="{{ $city[0]->name??'' }}" required class="form-control" id="validationCustom01" type="text" placeholder="Enter City Name" name="name">
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<div class="btn-showcase">
							<button class="btn btn-primary" type="submit">Submit</button>
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