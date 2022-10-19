@extends('layouts.simple.master')
@section('title', 'Default Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Employee</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Employee</li>
    <li class="breadcrumb-item active">Employee Details</li>
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
                                <form class="theme-form" method="POST" action="{{ route('employeeCreate') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $employees[0]->id_employee ?? '' }}">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_name">Full name</label>
                                        <input value="{{ $employees[0]->fullname ?? '' }}" class="form-control"
                                            name="fullname" id="First_name" type="text"
                                            placeholder="Enter your Full name">
                                        <small class="form-text text-muted">Please enter Full name.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_features">Mobile Number</label>
                                        <input value="{{ $employees[0]->mobile ?? '' }}" class="form-control"
                                            name="mobile" id="Last_name" type="number"
                                            placeholder="Enter your mobile number">
                                        <small class="form-text text-muted">Please enter mobile number.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_type">Email</label>
                                        <input value="{{ $employees[0]->email ?? '' }}" class="form-control" name="email"
                                            id="email" type="text" placeholder="Enter Your Email"><small
                                            class="form-text text-muted">Please enter
                                            Email.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_type">Gender</label>
                                        <div>
                                            <label class="col-form-label pt-0" for="male">Male</label>
                                        <input @if (!isset($employees[0]->gender))
                                        {{ 'checked' }}
                                        @endif {{ ($employees[0]->gender ?? '')=='Male'?'checked':'' }} class="form-check-input" type="radio" name="gender" id="male" value="Male" data-bs-original-title="" title="">
                                        
                                        <label class="col-form-label pt-0" for="female">Female</label>
                                        <input {{ ($employees[0]->gender ?? '')=='Female'?'checked':'' }} class="form-check-input" type="radio" name="gender" id="female" value="Female" data-bs-original-title="" title="">
                                        </div>
                                        
                                        {{-- <input value="{{ $employees[0]->email ?? '' }}" class="form-control" name="email"
                                            id="email" type="radio" placeholder="Enter Your Email"> --}}
                                            {{-- <small class="form-radio text-muted">Please enter Email.<small> --}}
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
                                                                {{ substr($employees[0]->birthday ?? '', 6, 4) == $i ? 'selected' : '' }}
                                                                value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col birthday-select-container"><select
                                                        id="customer_birthday_month" name="month"
                                                        class="custom-select form-control">
                                                        <option value="">Month</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '01' ? 'selected' : '' }}
                                                            value="01">01</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '02' ? 'selected' : '' }}
                                                            value="02">02</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '03' ? 'selected' : '' }}
                                                            value="03">03</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '04' ? 'selected' : '' }}
                                                            value="04">04</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '05' ? 'selected' : '' }}
                                                            value="05">05</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '06' ? 'selected' : '' }}
                                                            value="06">06</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '07' ? 'selected' : '' }}
                                                            value="07">07</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '08' ? 'selected' : '' }}
                                                            value="08">08</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '09' ? 'selected' : '' }}
                                                            value="09">09</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '10' ? 'selected' : '' }}
                                                            value="10">10</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '11' ? 'selected' : '' }}
                                                            value="11">11</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 3, 2) == '12' ? 'selected' : '' }}
                                                            value="12">12</option>
                                                    </select></div>
                                                <div class="col pr-0 birthday-select-container"><select
                                                        id="customer_birthday_day" name="day"
                                                        class="custom-select form-control">
                                                        <option value="">Day</option>
                                                        <option
                                                        {{ substr($employees[0]->birthday ?? '', 0, 2) == '01' ? 'selected' : '' }}
                                                            value="01">01</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '02' ? 'selected' : '' }}
                                                            value="02">02</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '03' ? 'selected' : '' }}
                                                            value="03">03</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '04' ? 'selected' : '' }}
                                                            value="04">04</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '05' ? 'selected' : '' }}
                                                            value="05">05</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '06' ? 'selected' : '' }}
                                                            value="06">06</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '07' ? 'selected' : '' }}
                                                            value="07">07</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '08' ? 'selected' : '' }}
                                                            value="08">08</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '09' ? 'selected' : '' }}
                                                            value="09">09</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '10' ? 'selected' : '' }}
                                                            value="10">10</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '11' ? 'selected' : '' }}
                                                            value="11">11</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '12' ? 'selected' : '' }}
                                                            value="12">12</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '13' ? 'selected' : '' }}
                                                            value="13">13</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '14' ? 'selected' : '' }}
                                                            value="14">14</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '15' ? 'selected' : '' }}
                                                            value="15">15</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '16' ? 'selected' : '' }}
                                                            value="16">16</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '07' ? 'selected' : '' }}
                                                            value="17">17</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '18' ? 'selected' : '' }}
                                                            value="18">18</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '19' ? 'selected' : '' }}
                                                            value="19">19</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '20' ? 'selected' : '' }}
                                                            value="20">20</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '21' ? 'selected' : '' }}
                                                            value="21">21</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '22' ? 'selected' : '' }}
                                                            value="22">22</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '23' ? 'selected' : '' }}
                                                            value="23">23</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '24' ? 'selected' : '' }}
                                                            value="24">24</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '25' ? 'selected' : '' }}
                                                            value="25">25</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '26' ? 'selected' : '' }}
                                                            value="26">26</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '27' ? 'selected' : '' }}
                                                            value="27">27</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '28' ? 'selected' : '' }}
                                                            value="28">28</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '29' ? 'selected' : '' }}
                                                            value="29">29</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '30' ? 'selected' : '' }}
                                                            value="30">30</option>
                                                        <option
                                                            {{ substr($employees[0]->birthday ?? '', 0, 2) == '31' ? 'selected' : '' }}
                                                            value="31">31</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Please select birthday.</small>
                                    </div>
                                    <div class="mb-3 mt-4">
                                        <label class="col-form-label pt-0" for="plan_features">Alternate Mobile Number</label>
                                        <input value="{{ $employees[0]->mobile ?? '' }}" class="form-control"
                                            name="a_mobile" id="Last_name" type="number"
                                            placeholder="Enter your alternate mobile number">
                                        <small class="form-text text-muted">Please enter alternate mobile number.</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_duration">Password</label>
                                        <input class="form-control" name="passwd" id="password" type="password"
                                            placeholder="Enter Your Password">
                                        <small class="form-text text-muted">Please enter Password.</small>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label class="col-form-label pt-0" for="plan_duration">Confirm Password</label>
                                        <input class="form-control" name="passwd" id="password" type="password" placeholder="Enter Your Confirm Password">
                                        <small class="form-text text-muted">Please enter Confirm Password.</small>
                                    </div> --}}
                                    @if (isset($employees[0]->image))
                                        <img src="{{ url('../../public/public/images/employee/'.$employees[0]->image) }}" alt="" width="100px" height="100px">
                                    @endif
                                    <div class="mb-3">
										<label class="custom-file-label" for="image">Profile Pic</label>
										<div class="custom-file">
										<input type="file" class="custom-file-input" id="image" name="image">
										</div>
								    </div>
                                    @if (isset($employees[0]->document))
                                        <img src="{{ url('../../public/public/images/document/'.$employees[0]->document) }}" alt="" width="100px" height="100px">
                                    @endif
                                    <div class="mb-3">
										<label class="custom-file-label" for="image">Document</label>
										<div class="custom-file">
										<input type="file" class="custom-file-input" id="image" name="document">
										</div>
								    </div>
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
