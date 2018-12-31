@extends('layouts.default')

@section('title', 'New Item')

@section('stylesheet')
    {{--<link media="screen" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select2/select2.css')}}">--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="bold">New Item</h2>
                </div>
            </div>
            <form id="form-personal" role="form" autocomplete="off" novalidate="novalidate">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 ">

                        <div class="card card-default rounded">
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="radio radio-success">
                                        <input type="radio" checked="checked" value="goods" name="itemtype" id="goods">
                                        <label for="goods">Goods</label>
                                        <input type="radio" value="service" name="itemtype" id="service">
                                        <label for="service">Service</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>Product Code Name</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default disabled" aria-required="true">
                                            <label>SKU</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default ">
                                            <label>Unit of Measurement</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
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
                                        <h5 class="bold p-b-10">Pricing</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>Selling Pricing per item</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Purchase Pricing per item</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group" aria-required="true">
                                        <label id="tax">Charge taxes on this product</label><br>
                                        <input for="tax" type="checkbox" class="switchery" checked />
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
                                        <h5 class="bold p-b-10">Tax</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">GST RATE TO BE APPLIED</label>
                                            <select class="full-width" data-placeholder="Select Account Type" data-init-plugin="select2" data-minimum-results-for-search="Infinity">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="low">0.25%</option>
                                                <option value="medium">3%</option>
                                                <option value="high">5%</option>
                                                <option value="high">12%</option>
                                                <option value="high">12%</option>
                                                <option value="high">18%</option>
                                                <option value="high">28%</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                        {{--<div class="form-group required" aria-required="true">--}}
                                            {{--<label>GST Rate to be Applied</label> <br>--}}
                                            {{--<select class="cs-select cs-skin-slide" data-init-plugin="cs-select">--}}
                                                {{--<option value="SegeoUI">0.25%</option>--}}
                                                {{--<option value="SegeoUI">3%</option>--}}
                                                {{--<option value="Web-safe">5%</option>--}}
                                                {{--<option value="Helvetica">12&</option>--}}
                                                {{--<option value="SegeoUI">18%</option>--}}
                                                {{--<option value="SegeoUI">28%</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>HSN Code</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>CESS Rate</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

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
                                        <h5 class="bold p-b-10">Best Before</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default input-group col-md-12">
                                            <div class="form-input-group">
                                                <label>Manufacturing Date</label>
                                                <input type="email" class="form-control" placeholder="Pick a date" id="mfgDatePicker">
                                            </div>
                                            <div class="input-group-append ">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" aria-required="true">
                                            <label id="expirycheckbox">Month wise expiry</label><br>
                                            <input for="expirycheckbox" type="checkbox" class="switchery" checked />
                                        </div>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default input-group">
                                            <div class="form-input-group">
                                                <label>Best before</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="input-group-append ">
                                                <span class="input-group-text">Month</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default input-group col-md-12">
                                            <div class="form-input-group">
                                                <label>Expiry Date</label>
                                                <input type="email" class="form-control" placeholder="Pick a date" id="expiryDatePicker">
                                            </div>
                                            <div class="input-group-append ">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
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
                                        <h5 class="bold p-b-10">Track Inventory</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Account</label>
                                            <select class="full-width" data-placeholder="Select Account Type" data-init-plugin="select2" data-minimum-results-for-search="Infinity">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="low">Finished Goods</option>
                                                <option value="medium">Inventory Assets</option>
                                                <option value="high">Work in Progress</option>
                                                <!-- </optgroup> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Stock Location</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Opening Stock</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Opening Stock Value</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Reorder Level </label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default form-group-default-select2 ">
                                            <label class="">Vendor</label>
                                            <select class="full-width" data-placeholder="Select Country" data-init-plugin="select2">
                                                <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                <option value="low">Vendor 1</option>
                                                <option value="medium">Vendor 2</option>
                                                <option value="high">Vendor 3</option>
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
                                        <h5 class="bold p-t-10 p-b-10">Other Details</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>Manufacturer</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Brand</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>UPC</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>MPN</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default required" aria-required="true">
                                            <label>EAN</label>
                                            <input type="text" class="form-control" name="firstName" required=""
                                                   aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" name="lastName" required=""
                                                   aria-required="true">
                                        </div>
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