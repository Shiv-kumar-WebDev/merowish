@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Warehouse</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Warehouse</li>
    <li class="breadcrumb-item active">Warehouse Details</li>
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
                                <form class="theme-form" method="POST" action="{{ route('warehouseNepalCreate') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $warehouse_nepal[0]->id ?? '' }}">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="tracking_no">Tracking Number</label>
                                        <input value="{{ $warehouse_nepal[0]->tracking_no ?? '' }}" class="form-control"
                                            name="tracking_no" id="tracking_no" type="text"
                                            placeholder="Enter your Tracking Number">
                                        <small class="form-text text-muted">Please enter Tracking Number.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="product_link">Product Link</label>
                                        <input value="{{ $warehouse_nepal[0]->product_link ?? '' }}" class="form-control"
                                            name="product_link" id="product_link" type="text"
                                            placeholder="Enter your Product Link">
                                        <small class="form-text text-muted">Please enter Product Link.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="shipment_notes">Additional Shipment
                                            Notes</label>
                                        <input value="{{ $warehouse_nepal[0]->shipment_notes ?? '' }}" class="form-control"
                                            name="shipment_notes" id="shipment_notes" type="text"
                                            placeholder="Enter Additional Shipment Notes"><small
                                            class="form-text text-muted">Please enter
                                            Additional Shipment Notes.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="weight">Weight (Kg)</label>
                                        <input value="{{ $warehouse_nepal[0]->weight ?? '' }}" class="form-control"
                                            name="weight" id="weight" type="text"
                                            placeholder="Enter Weight"><small
                                            class="form-text text-muted">Please enter
                                            Weight.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="goods_value">Goods Value INR.</label>
                                        <input value="{{ $warehouse_nepal[0]->goods_value ?? '' }}" class="form-control"
                                            name="goods_value" id="goods_value" type="text"
                                            placeholder="Enter Goods Value"><small
                                            class="form-text text-muted">Please enter
                                            Goods Value.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="unit_shipment">Unit in Shipment</label>
                                        <input value="{{ $warehouse_nepal[0]->unit_shipment ?? '' }}" class="form-control"
                                            name="unit_shipment" id="unit_shipment" type="text"
                                            placeholder="Enter Unit in Shipment"><small
                                            class="form-text text-muted">Please enter
                                            Unit in Shipment.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_type">Payment Method</label>
                                        <div>
                                            <label class="col-form-label pt-0" for="cash_on_delivery">Cash on Delivery</label>
                                        <input @if (!isset($warehouse_nepal[0]->payment_method))
                                        {{ 'checked' }}
                                        @endif {{ ($warehouse_nepal[0]->payment_method ?? '')=='Cash On Delivery'?'checked':'' }} class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="Cash On Delivery" data-bs-original-title="" title="">
                                        
                                        <label class="col-form-label pt-0" for="prepaid_order">Prepaid order</label>
                                        <input {{ ($warehouse_nepal[0]->payment_method ?? '')=='Prepaid order'?'checked':'' }} class="form-check-input" type="radio" name="payment_method" id="prepaid_order" value="Prepaid order" data-bs-original-title="" title="">
                                        </div>
                                        
                                    </div>
                                    <div class="mb-3 mt-4">
                                        <label class="col-form-label pt-0" for="coupon_code">Coupon Discount</label>
                                        <input value="{{ $warehouse_nepal[0]->coupon_code ?? '' }}" class="form-control"
                                            name="coupon_code" id="coupon_code" type="text"
                                            placeholder="Enter your Coupon Discount">
                                        <small class="form-text text-muted">Please enter Coupon Discount.</small>
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
