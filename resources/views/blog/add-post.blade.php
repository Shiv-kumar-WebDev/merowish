@extends('layouts.simple.master')
@section('title', 'Add Post')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Post</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Blog</li>
<li class="breadcrumb-item active">Post</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Post</h5>
				</div>
				<div class="card-body add-post">
					<form class="row needs-validation" novalidate="" action="{{ route('blogCreate') }}" enctype="multipart/form-data" method="post">
						@csrf
						<input type="hidden" name="id" value="{{ $blogs[0]->id??'' }}">
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="validationCustom01">Title:</label>
								<input value="{{ $blogs[0]->title??'' }}" required class="form-control" id="validationCustom01" type="text" placeholder="Post Title" name="title">
								<div class="valid-feedback">Looks good!</div>
							</div>
							{{-- <div class="mb-3">
								<label>Type:</label>
								<div class="m-checkbox-inline">
									<label for="edo-ani">
									<input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">Text
									</label>
									<label for="edo-ani1">
									<input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">Image
									</label>
									<label for="edo-ani2">
									<input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">Audio
									</label>
									<label for="edo-ani3">
									<input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani">Video
									</label>
								</div>
							</div> --}}
							{{-- <div class="mb-3">
								<div class="col-form-label">
									Category:
									<select required class="js-example-placeholder-multiple col-sm-12" multiple="multiple" name="category[]">
										<option value="AL">Lifestyle</option>
										<option value="WY">Travel</option>
									</select>
								</div>
							</div> --}}
							<div class="email-wrapper">
								<div class="theme-form">
									<div class="mb-3">
										<label>Content:</label>
										<textarea required id="text-box" name="content" cols="10" rows="2">{{ $blogs[0]->content??'' }}</textarea>
									</div>
								</div>
							</div>
							@if (isset($blogs[0]->image))
								<img src="{{ url('../../public/public/images/blog/'.$blogs[0]->image) }}" alt="" width="100px" height="100px">
							@endif
							<div class="mb-3">
								<label for="validationCustom01">Image:</label>
								<input name="image" class="form-control" id="validationCustom011" type="file" placeholder="Post Title" >
								{{-- <div class="valid-feedback">Looks good!</div> --}}
							</div>
						</div>
						<div class="btn-showcase">
							<button class="btn btn-primary" type="submit">Post</button>
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