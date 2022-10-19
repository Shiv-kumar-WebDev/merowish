@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Costumer</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Customer</li>
    <li class="breadcrumb-item active">Customer Details</li>
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
                                <form class="theme-form" method="POST" action="{{ route('CustomerAdd') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $customers[0]->id_customer ?? '' }}">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_name">Social title<label>
                                                <div class="form-check form-check-inline">
                                                    <input {{ ($customers[0]->Social_title ?? '') == 'Mr.' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="Social_title"
                                                        id="Social_title" value="Mr." />
                                                    <label class="form-check-label" for="Social_title">Mr.</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input {{ ($customers[0]->Social_title ?? '') == 'Mrs.' ? 'checked' : '' }}
                                                        class="form-check-input" type="radio" name="Social_title"
                                                        id="inlineRadio1" value="Mrs." />
                                                    <label class="form-check-label" for="inlineRadio1">Mrs.</label>
                                                </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_name">First name</label>
                                        <input value="{{ $customers[0]->firstname ?? '' }}" class="form-control"
                                            name="firstname" id="First_name" type="text"
                                            placeholder="Enter your First name">
                                        <small class="form-text text-muted">Please enter First name.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_features">Last name</label>
                                        <input value="{{ $customers[0]->lastname ?? '' }}" class="form-control"
                                            name="lastname" id="Last_name" type="text"
                                            placeholder="Enter your Last name">
                                        <small class="form-text text-muted">Please enter Last name.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_type">Email</label>
                                        <input value="{{ $customers[0]->email ?? '' }}" class="form-control" name="email"
                                            id="email" type="text" placeholder="Enter Your Email"><small
                                            class="form-text text-muted">Please enter
                                            Email.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_duration">Password</label>
                                        <input class="form-control" name="passwd" id="password" type="password"
                                            placeholder="Enter Your Password">
                                        <small class="form-text text-muted">Please enter Password.</small>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-control-label"> Birthday </label>
                                        <div class="col-sm input-container">
                                            <div id="birthday" class="form-inline">
                                                <div class="col pl-0 birthday-select-container">
                                                    <select id="birthday" name="year"
                                                        class="custom-select form-control">
                                                        <option value="">Year</option>
                                                        @for ($i = 1902; $i <= 2022; $i++)
                                                            <option
                                                                {{ substr($customers[0]->birthday ?? '', 6, 4) == $i ? 'selected' : '' }}
                                                                value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col birthday-select-container"><select
                                                        id="customer_birthday_month" name="month"
                                                        class="custom-select form-control">
                                                        <option value="">Month</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '01' ? 'selected' : '' }}
                                                            value="01">01</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '02' ? 'selected' : '' }}
                                                            value="02">02</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '03' ? 'selected' : '' }}
                                                            value="03">03</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '04' ? 'selected' : '' }}
                                                            value="04">04</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '05' ? 'selected' : '' }}
                                                            value="05">05</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '06' ? 'selected' : '' }}
                                                            value="06">06</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '07' ? 'selected' : '' }}
                                                            value="07">07</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '08' ? 'selected' : '' }}
                                                            value="08">08</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '09' ? 'selected' : '' }}
                                                            value="09">09</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '10' ? 'selected' : '' }}
                                                            value="10">10</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '11' ? 'selected' : '' }}
                                                            value="11">11</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 3, 2) == '12' ? 'selected' : '' }}
                                                            value="12">12</option>
                                                    </select></div>
                                                <div class="col pr-0 birthday-select-container"><select
                                                        id="customer_birthday_day" name="day"
                                                        class="custom-select form-control">
                                                        <option value="">Day</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '01' ? 'selected' : '' }}
                                                            value="01">01</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '02' ? 'selected' : '' }}
                                                            value="02">02</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '03' ? 'selected' : '' }}
                                                            value="03">03</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '04' ? 'selected' : '' }}
                                                            value="04">04</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '05' ? 'selected' : '' }}
                                                            value="05">05</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '06' ? 'selected' : '' }}
                                                            value="06">06</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '07' ? 'selected' : '' }}
                                                            value="07">07</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '08' ? 'selected' : '' }}
                                                            value="08">08</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '09' ? 'selected' : '' }}
                                                            value="09">09</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '10' ? 'selected' : '' }}
                                                            value="10">10</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '11' ? 'selected' : '' }}
                                                            value="11">11</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '12' ? 'selected' : '' }}
                                                            value="12">12</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '13' ? 'selected' : '' }}
                                                            value="13">13</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '14' ? 'selected' : '' }}
                                                            value="14">14</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '15' ? 'selected' : '' }}
                                                            value="15">15</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '16' ? 'selected' : '' }}
                                                            value="16">16</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '07' ? 'selected' : '' }}
                                                            value="17">17</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '18' ? 'selected' : '' }}
                                                            value="18">18</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '19' ? 'selected' : '' }}
                                                            value="19">19</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '20' ? 'selected' : '' }}
                                                            value="20">20</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '21' ? 'selected' : '' }}
                                                            value="21">21</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '22' ? 'selected' : '' }}
                                                            value="22">22</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '23' ? 'selected' : '' }}
                                                            value="23">23</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '24' ? 'selected' : '' }}
                                                            value="24">24</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '25' ? 'selected' : '' }}
                                                            value="25">25</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '26' ? 'selected' : '' }}
                                                            value="26">26</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '27' ? 'selected' : '' }}
                                                            value="27">27</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '28' ? 'selected' : '' }}
                                                            value="28">28</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '29' ? 'selected' : '' }}
                                                            value="29">29</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '30' ? 'selected' : '' }}
                                                            value="30">30</option>
                                                        <option
                                                            {{ substr($customers[0]->birthday ?? '', 0, 2) == '31' ? 'selected' : '' }}
                                                            value="31">31</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Please select birthday.</small>
                                    {{-- <div class="mb-3 col-6">
                                    <div class="media mb-2">
                                        <label class="col-form-label m-r-10">Enable</label>
                                        <div class="media-body text-end switch-lg icon-state">
                                            <label class="switch"><input name="enable" type="checkbox" checked=""
                                                    data-bs-original-title="" title=""><span
                                                    class="switch-state"></span></label>
                                        </div>
                                    </div>
                                </div> --}}
                                    <div class="mb-3 col-6 mt-4">
                                        <div class="media mb-2">
                                            <label class="col-form-label m-r-10"><span class="text-danger">*</span>Group
                                                access</label>
                                            <div class="media-body text-end switch-lg icon-state">
                                                <select id="answer-sort-dropdown-select-menu" name="Group_access"
                                                    id="Group_access" class="custom-select form-control">
                                                    <option value="Visitor"
                                                        {{ ($customers[0]->Group_access ?? '') == 'Visitor' ? 'selected' : '' }}>
                                                        Visitor</option>
                                                    <option {{ ($customers[0]->Group_access ?? '') == 'Guest' ? 'selected' : '' }}
                                                        value="Guest">Guest</option>
                                                    <option
                                                        {{ ($customers[0]->Group_access ?? '') == 'Customer' ? 'selected' : '' }}
                                                        value="Customer">Customer</option>
                                                </select>
                                            </div>
                                        </div>
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
