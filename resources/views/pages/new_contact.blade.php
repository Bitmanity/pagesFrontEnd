@extends('layouts.default')

@section('title', 'New Contact')

@section('stylesheet')
    {{--<link media="screen" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select2/select2.css')}}">--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="bold">New Contact</h2>
                </div>
            </div>
            <form id="form-personal" role="form" autocomplete="off" novalidate="novalidate">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">

                        <div class="card card-default rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="bold p-b-10">Contact & Basic Info</h5>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Type</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2" data-minimum-results-for-search="Infinity">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">Customer</option>
                                                <option value="mrs">Vendor</option>
                                                <option value="ms">Employee</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8"></div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Contact Display Name</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Website</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Phone Type</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2" data-minimum-results-for-search="Infinity">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">Work</option>
                                                <option value="mrs">Personal</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Country</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2" data-minimum-results-for-search="Infinity">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">India (+91)</option>
                                                <option value="mrs">Other</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default">
                                            <label>Number</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <br>
                                    <p class="text-primary">+ Add another phone</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">

                        <div class="card card-default rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="bold p-b-10">Billing Address</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>Attention</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group form-group-default">
                                            <label>Address</label>
                                                <input type="text" class="form-control" name="lastName" required=""
                                                       aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Country</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">India</option>
                                                <option value="mrs">Nepal</option>
                                                <option value="ms">UAE</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">State</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">Maharashtra</option>
                                                <option value="mrs">Rajasthan</option>
                                                <option value="ms">Gujarat</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">City</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">Mumbai</option>
                                                <option value="mrs">Vapi</option>
                                                <option value="ms">Surat</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="text-primary">+ Add another address</p>

                                        <div class="form-group" aria-required="true">
                                            <label id="tax">Shipping address same as billing address</label><br>
                                            <input for="tax" type="checkbox" class="switchery" checked />
                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">

                        <div class="card card-default rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="bold p-b-10">Address</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>Attention</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group form-group-default">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">Country</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">India</option>
                                                <option value="mrs">Nepal</option>
                                                <option value="ms">UAE</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">State</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">Maharashtra</option>
                                                <option value="mrs">Rajasthan</option>
                                                <option value="ms">Gujarat</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-group-default form-group-default-select2">
                                            <label class="">City</label>
                                            <select class="full-width" data-placeholder="Saluation" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="mr">Mumbai</option>
                                                <option value="mrs">Vapi</option>
                                                <option value="ms">Surat</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="card card-default rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="bold p-b-10">Social</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default input-group">
                                            <div class="input-group-append ">
                                                <span class="input-group-text"><i class="fa fa-facebook-square" style="font-size: 22px !important;"></i></span>
                                            </div>
                                            <div class="form-input-group">
                                                <label>Facebook</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <p>https://www.facebook.com/</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default input-group">
                                            <div class="input-group-append ">
                                                <span class="input-group-text"><i class="fa fa-twitter-square" style="font-size: 22px !important;"></i></span>
                                            </div>
                                            <div class="form-input-group">
                                                <label>Twitter</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <p>https://twitter.com/</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">
                        <div class="card card-default rounded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="bold p-b-10">Notes</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group form-group-default">
                                        <label>Notes (For Internal Use)</label>
                                        <input type="text" class="form-control" name="lastName" required=""
                                               aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/classie/classie.js')}}" type="text/javascript"></script>
    {{--<script src="{{asset('assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>--}}




    <script>
        $(document).ready(function() {
            $('#myDatepicker').datepicker();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#mfgDatePicker').datepicker();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#expiryDatePicker').datepicker();
        });
    </script>
    <script>
        var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
        //         Success color: #10CFBD
        elems.forEach(function(html) {
            var switchery = new Switchery(html, {color: '#6d5cae', size:'small'});
        });
    </script>

@endsection