@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Membership Customer</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Membership</li>
<li class="breadcrumb-item active">Membership Customer Plan</li>
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
							<form class="theme-form" method="POST" action="{{ route('MembershipCustomerCreate') }}" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id" value="{{ $membership_customers_data[0]->id_membership_customer??'' }}">
								<div class="mb-3">
									<label class="col-form-label pt-0" for="membership_plans">Membership Plans</label>
									<select class="form-select form-control-primary" name="id_plan" id="id_plan">
										<option value="">Select</option>
										@foreach($membership_plans as $membership_plan)
										<option {{ ($membership_customers_data[0]->id_plan??'')==$membership_plan->id_membership_plan?'selected':'' }} value="{{$membership_plan->id_membership_plan}}">{{$membership_plan->name}}</option>
										@endforeach
									</select>
									<small class="form-text text-muted">Please select Membership Plans.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="reference_plans">Customer Reference </label>
									<select class="form-select form-control-primary" name="id_reference" id="id_reference">
										<option value="">Select</option>
										@foreach($customers as $customer)
										<option {{( $membership_customers_data[0]->id_reference??'')==$customer->id_customer?'selected':'' }} value="{{$customer->id_customer}}">{{$customer->firstname}} {{ $customer->lastname }} ({{($customer->email)}})</option>
										@endforeach
									</select>
									<small class="form-text text-muted">Please select Customer Reference.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="reference_plans">Product</label>
									<select class="form-select form-control-primary" name="id_product" id="id_product">
										<option value="">Select</option>
										@foreach($products as $product)
										<option {{ ($membership_customers_data[0]->id_product??'')==$product->id_product?'selected':'' }} value="{{$product->id_product}}">{{$product->reference}}</option>
										@endforeach
									</select>
									<small class="form-text text-muted">Please select Product.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="id_currency">Currency</label>
									<select class="form-select form-control-primary" name="id_currency" id="id_currency">
										<option value="0">Select</option>
										<option {{ ($membership_customers_data[0]->id_currency??'')=='1'?'selected':'' }} value="1">INR</option>
										<option {{ ($membership_customers_data[0]->id_currency??'')=='2'?'selected':'' }} value="2">NPR</option>
									</select>
									<small class="form-text text-muted">Please enter currency.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="activated_date">Activation Date</label>
									<input value="{{ isset($membership_customers_data[0]->activated_date)?date('Y-m-d', strtotime($membership_customers_data[0]->activated_date)):'' }}" class="form-control" name="activated_date" id="activated_date" type="date" placeholder="Enter activation date"><small class="form-text text-muted">Please enter activation date.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="expiry_date">Expiry Date</label>
									<input value="{{ isset($membership_customers_data[0]->expiry_date)?date('Y-m-d', strtotime($membership_customers_data[0]->expiry_date)):'' }}" class="form-control" name="expiry_date" id="expiry_date" type="date" placeholder="Enter expiry date"><small class="form-text text-muted">Please enter expiry date.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="name">Name</label>
									<input value="{{$membership_customers_data[0]->name??''}}" required class="form-control" name="name" id="name" type="text" placeholder="Enter Name">
									<small class="form-text text-muted">Please enter name.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="duration">Duration</label>
									<select required class="form-select form-control-primary" name="duration" id="duration">
										<option value="">Select</option>
										<option {{ ($membership_customers_data[0]->duration??'')=='1'?'selected':'' }} value="1">Yearly</option>
										<option {{ ($membership_customers_data[0]->duration??'')=='2'?'selected':'' }} value="2">Monthly</option>
										<option {{ ($membership_customers_data[0]->duration??'')=='3'?'selected':'' }} value="3">Half Yearly</option>
										<option {{ ($membership_customers_data[0]->duration??'')=='4'?'selected':'' }} value="4">Quaterly</option>
									</select>
									<small class="form-text text-muted">Please select plan Duration.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="reference_plans">Reference Plans</label>
									<select class="form-select form-control-primary" name="id_reference" id="id_reference">
										<option value="">Select</option>
										@foreach($membership_plans as $membership_plan)
										<option {{ ($membership_customers_data[0]->id_reference??'')==$membership_plan->id_membership_plan?'selected':'' }} value="{{$membership_plan->id_membership_plan}}">{{$membership_plan->name}}</option>
										@endforeach
									</select>
									<small class="form-text text-muted">Please select reference Plans.</small>
								</div>
								<div class="mb-3">
									<label class="col-form-label pt-0" for="price">Price</label>
									<input value="{{ $membership_customers_data[0]->price??'' }}" class="form-control" name="price" id="price" type="text" placeholder="Enter Plan price">
									<small class="form-text text-muted">Please enter plan price.</small>
								</div>
								<div class="mb-3 col-6">
									<div class="media mb-2">
										<label class="col-form-label m-r-10">Allow Renew</label>
										<div class="media-body text-end switch-lg icon-state">
											<label class="switch">
											<input type="hidden" name="is_renew" value="0">
											<input name="is_renew" type="checkbox" {{ ($membership_customers_data[0]->is_renew??'')==1?'checked':'' }} {{ !isset($membership_customers_data[0]->is_renew)?'checked':'' }} data-bs-original-title="" title="">
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

											<input type="hidden" name="is_extended" value="0">
											<input value="1" name="is_extended" type="checkbox" {{ ($membership_customers_data[0]->is_extended??'')==1?'checked':'' }} {{ !isset($membership_customers_data[0]->is_extended)?'checked':'' }} data-bs-original-title="" title="">
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
											<input type="hidden" name="active" value="0">
											<input name="active" type="checkbox" {{ ($membership_customers_data[0]->active??'')==1?'checked':'' }} {{ !isset($membership_customers_data[0]->active)?'checked':'' }} data-bs-original-title="" title="" value="1">
											<span class="switch-state"></span>
											</label>
										</div>
									</div>
								</div>
								<!-- <div class="mb-3">
										<label class="custom-file-label" for="plan_image">Choose Plan Image</label>
										<div class="custom-file">
										<input type="file" class="custom-file-input" id="plan_image" name="plan_image">
										</div>
								</div> -->
								<div class="card-footer">
									<button type="submit" name="" class="btn btn-primary">Submit</button>
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