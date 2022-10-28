@extends('layouts.simple.master')
@section('title', 'Add Post')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Article</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Article</li>
<li class="breadcrumb-item active">Article Details</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
				@endif
				<div class="card-header">
					{{-- <h5>Pincode</h5> --}}
				</div>
				<div class="card-body add-post">
					<form class="row needs-validation" novalidate="" action="{{ route('articleCreate') }}" enctype="multipart/form-data" method="post">
						@csrf
						<input type="hidden" name="id" value="{{ $faq_article[0]->id??'' }}">
						<div class="col-sm-12">
							<div class="mb-3">
								<label for="">Article:</label>
								<textarea rows="5" required class="form-control" id="" type="text" placeholder="Enter article" name="article">{{ $faq_article[0]->article??'' }}</textarea>
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