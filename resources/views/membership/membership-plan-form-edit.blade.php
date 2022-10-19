@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Membership Plan</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Membership</li>
<li class="breadcrumb-item active">Membership Plan</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-xl-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<!-- <div class="card-header">
							<h5>Membership Plan</h5>
							<span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
						</div> -->
						<div class="card-body">
							<form class="theme-form" method="POST" action="{{ route('MembershipPlanCreate') }}" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id" value="{{ $membership_plans[0]->id_membership_plan }}">
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_name">Plan Name</label>
									<input value="{{ $membership_plans[0]->name }}" class="form-control" name="plan_name" id="plan_name" type="text" placeholder="Enter Plan Name">
									<small class="form-text text-muted">Please enter plan name.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_features">Features</label>
									<textarea class="form-control" name="plan_features" id="plan_features">{{ $membership_plans[0]->features }}
									</textarea>
									<small class="form-text text-muted">Please enter plan features.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_type">Type</label>
									<input value="{{ $membership_plans[0]->type }}" class="form-control" name="plan_type" id="plan_type" type="text" placeholder="Enter Plan Type"><small class="form-text text-muted">Please enter plan type.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_duration">Duration</label>
									<select class="form-select form-control-primary" name="plan_duration" id="plan_duration">
										<option value="0">Select</option>
										<option {{ $membership_plans[0]->duration==1 ? 'selected' : '' }} value="1">Yearly</option>
										<option {{ $membership_plans[0]->duration==2 ? 'selected' : '' }} value="2">Monthly</option>
										<option {{ $membership_plans[0]->duration==3 ? 'selected' : '' }} value="3">Half Yearly</option>
										<option {{ $membership_plans[0]->duration==4 ? 'selected' : '' }} value="4">Quaterly</option>
									</select>
									<small class="form-text text-muted">Please select plan Duration.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_currency">Currency</label>
									<select class="form-select form-control-primary" name="plan_currency" id="plan_currency">
										<option value="0">Select</option>
										<option {{ $membership_plans[0]->id_currency==1 ? 'selected' : '' }} value="1">INR</option>
										<option {{ $membership_plans[0]->id_currency==2 ? 'selected' : '' }} value="2">NPR</option>
									</select>
									<small class="form-text text-muted">Please enter currency.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_price">Price</label>
									<input value="{{ $membership_plans[0]->price }}" class="form-control" name="plan_price" id="plan_price" type="text" placeholder="Enter Plan price">
									<small class="form-text text-muted">Please enter plan price.</small>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Allow Renew</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
												<input type="hidden" name="plan_renew" value="0">
											<input  name="plan_renew" type="checkbox" {{ $membership_plans[0]->allow_renew==1 ? 'checked' : '' }} data-bs-original-title="" title="">
											<span class="switch-state"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Allow Extend</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
											<input type="hidden" name="plan_extend" value="0">
											<input  name="plan_extend" type="checkbox" {{ $membership_plans[0]->allow_extend==1 ? 'checked' : '' }} data-bs-original-title="" title="">
											<span class="switch-state"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Active</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
											<input type="hidden" name="plan_status" value="0">
											<input  name="plan_status" type="checkbox" {{ $membership_plans[0]->active==1 ? 'checked' : '' }} data-bs-original-title="" title="">
											<span class="switch-state">
											</span>
											</label>
										</div>
									</div>
								</div>
								@if (isset($membership_plans[0]->img_name))
									{{-- <img src="{{ url('public/public/images/membershipPlan/'.$membership_plans[0]->img_name) }}" alt="" width="100px" height="100px"> --}}
									{{-- <img src="{{ storage_path('public/public/images/membershipPlan/'.$membership_plans[0]->img_name) }}" alt="" width="100px" height="100px"> --}}
									<img src="{{ url('../../public/public/images/membershipPlan/'.$membership_plans[0]->img_name) }}" alt="" width="100px" height="100px">
								@endif
								<div class="mb-3">
										<label class="custom-file-label" for="plan_image">Choose Plan Image</label>
										<div class="custom-file">
										<input type="file" class="custom-file-input" id="plan_image" name="plan_image">
										</div>
								</div>
								<div class="card-footer">
									<button type="submit" name="plan_form" class="btn btn-primary">Submit</button>
									<a href="{{ route('MembershipPlanList') }}" class="btn btn-secondary">Cancel</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
@endsection

@section('script')
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
var fileName = $(this).val().split("\\").pop();
$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endsection