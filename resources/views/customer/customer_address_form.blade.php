@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Costumer Address</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Customer</li>
<li class="breadcrumb-item active">Customer Address</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h5>Customer Plan</h5>
                            <span>Using the <a href="#">card</a> component, you can extend the default collapse behavior
                                to create an accordion.</span>
                        </div> --}}
                        <div class="card-body">
                            <form class="theme-form" method="POST" action="{{ route('CustomerAddressAdd') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $addresses[0]->id_address??'' }}">
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_name">Country</label>
                                    <select value="" class="form-control" name="id_country" id="First_name" type="text"
                                        placeholder="Enter your First name">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $row)
                                        <option {{ ($addresses[0]->id_country??'')==$row->country_id?'selected':'' }} value="{{
                                            $row->country_id }}">{{ $row->country_name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Please select country.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_name">State</label>
                                    <select value="{{ ($customers[0]->firstname??'') }}" class="form-control"
                                        name="id_state" id="First_name" type="text" placeholder="Enter your First name">
                                        <option value="">Select State</option>
                                        @foreach ($states as $row)
                                        <option {{ ($addresses[0]->id_state??'')?'selected':'' }} value="{{
                                            $row->id_state }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Please select state.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">City</label>
                                    <input value="{{ $addresses[0]->city??'' }}" class="form-control" name="city"
                                        id="Last_name" type="text" placeholder="Enter City">
                                    <small class="form-text text-muted">Please enter city.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_name">Customer</label>
                                    <select class="form-control" name="id_customer" id="First_name" type="text"
                                        placeholder="Enter your First name">
                                        <option value="">Select Customer</option>
                                        @foreach ($customers as $row)
                                        <option {{ ($addresses[0]->id_customer??'')?'selected':'' }} value="{{
                                            $row->id_customer }}">{{ $row->email }}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">Please select state.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Alias name (Address)</label>
                                    <input value="{{ ($addresses[0]->alias??'') }}" class="form-control" name="alias"
                                        id="Last_name" type="text" placeholder="Enter Alias name">
                                    <small class="form-text text-muted">Please enter Alias name.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Company</label>
                                    <input value="{{ ($addresses[0]->company??'') }}" class="form-control"
                                        name="company" id="Last_name" type="text" placeholder="Enter Company name">
                                    <small class="form-text text-muted">Please enter company name.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">First Name</label>
                                    <input value="{{ ($addresses[0]->firstname??'') }}" class="form-control"
                                        name="firstname" id="Last_name" type="text" placeholder="Enter your First name">
                                    <small class="form-text text-muted">Please enter first name.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Last Name</label>
                                    <input value="{{ ($addresses[0]->lastname??'') }}" class="form-control"
                                        name="lastname" id="Last_name" type="text" placeholder="Enter your Last name">
                                    <small class="form-text text-muted">Please enter last name.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Address1</label>
                                    <textarea class="form-control" name="address1" id="Last_name" type="text"
                                        placeholder="Enter your Address">{{ ($addresses[0]->address1??'') }}</textarea>
                                    <small class="form-text text-muted">Please enter address.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Address2</label>
                                    <textarea class="form-control" name="address2" id="Last_name" type="text"
                                        placeholder="Enter your Address">{{ ($addresses[0]->address2??'') }}</textarea>
                                    <small class="form-text text-muted">Please enter address.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Pincode</label>
                                    <input value="{{ ($addresses[0]->postcode??'') }}" class="form-control"
                                        name="postcode" id="Last_name" type="number" placeholder="Enter your Pincode">
                                    <small class="form-text text-muted">Please enter pincode.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">Phone</label>
                                    <input value="{{ ($addresses[0]->phone??'') }}" class="form-control" name="phone"
                                        id="Last_name" type="number" placeholder="Enter Phone Number">
                                    <small class="form-text text-muted">Please enter phone.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="plan_features">VAT No.</label>
                                    <input value="{{ ($addresses[0]->vat_number??'') }}" class="form-control"
                                        name="vat_number" id="Last_name" type="text" placeholder="Enter VAT Numbar">
                                    <small class="form-text text-muted">Please enter VAT Number.</small>
                                </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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