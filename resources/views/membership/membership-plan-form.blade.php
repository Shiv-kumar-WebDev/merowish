@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Create Membership Plan</h3>
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
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_name">Plan Name</label>
									<input required class="form-control" name="plan_name" id="plan_name" type="text" placeholder="Enter Plan Name">
									<small class="form-text text-muted">Please enter plan name.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_features">Features</label>
									<textarea placeholder="Enter plan features" required class="form-control" name="plan_features" id="plan_features"></textarea>
									<small class="form-text text-muted">Please enter plan features.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_type">Type</label>
									<input required class="form-control" name="plan_type" id="plan_type" type="text" placeholder="Enter Plan Type"><small class="form-text text-muted">Please enter plan type.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_duration">Duration</label>
									<select required class="form-select form-control-primary" name="plan_duration" id="plan_duration">
										<option value="">Select</option>
										<option value="1">Yearly</option>
										<option value="2">Monthly</option>
										<option value="3">Half Yearly</option>
										<option value="4">Quaterly</option>
									</select>
									<small class="form-text text-muted">Please select plan Duration.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_currency">Currency</label>
									<select required class="form-select form-control-primary" name="plan_currency" id="plan_currency">
										<option value="">Select</option>
										<option value="1">INR</option>
										<option value="2">NPR</option>
									</select>
									<small class="form-text text-muted">Please enter currency.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="plan_price">Price</label>
									<input required class="form-control" name="plan_price" id="plan_price"  type="text" placeholder="Enter Plan price">
									<small class="form-text text-muted">Please enter plan price.</small>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Allow Renew</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
											<input name="plan_renew" type="checkbox" checked="" data-bs-original-title="" title=""><span class="switch-state"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Allow Extend</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
											<input name="plan_extend" type="checkbox" checked="" data-bs-original-title="" title=""><span class="switch-state"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Active</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
											<input name="plan_status" type="checkbox" checked="" data-bs-original-title="" title="" value="1"><span class="switch-state"></span>
											</label>
										</div>
									</div>
								</div>
								<div class="mb-3">
										<label class="custom-file-label" for="plan_image">Choose Plan Image</label>
										<div class="custom-file">
										<input type="file" class="custom-file-input" id="plan_image" name="plan_image">
										</div>
								</div>
								<div class="card-footer">
									<button type="submit" name="plan_form" class="btn btn-primary">Submit</button>
									<button class="btn btn-secondary">Cancel</button>
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