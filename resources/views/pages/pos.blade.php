@extends('layouts.default')

@section('title', 'POS')

@section('stylesheet')
    <link type="text/css" rel="stylesheet"
          href="{{asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css')}}">
    <link type="text/css" rel="stylesheet"
          href="{{asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}">
    <link media="screen" type="text/css" rel="stylesheet"
          href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}">
@endsection

@section('content')
    <div class="row p-b-30"></div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card card-default rounded" style="height: 58vh">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="typeahead form-control" id="mytyphead" type="text"
                                       placeholder="Search by SKU, Item Name" style="background-color: #fafafa;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="typeahead form-control" id="mytyphead" type="text"
                                       placeholder="Sales Person" style="background-color: #fafafa;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body ">
                    <div class="">
                        <table class="table table-condensed table-hover">
                            <tbody>
                            <tr>
                                <td class="fs-12" style="width: 5%"><span class="fs-18 bold">Sr.</span></td>
                                <td class="fs-12" style="width: 10%"><span class="fs-18 bold">SKU</span></td>
                                <td class=" text-left" style="width: 40%">
                                    <span class="fs-18 bold">Item Name</span>
                                </td>
                                <td class=" text-left" style="width: 10%">
                                    <span class="fs-18 bold">QTY.</span>
                                </td>
                                <td class=" text-left" style="width: 10%">
                                    <span class="fs-18 bold">Price</span>
                                </td>
                                <td class=" text-left" style="width: 10%">
                                    <span class="fs-18 bold">Total</span>
                                </td>
                                <td class=" text-left" style="width: 5%">
                                <span class="fs-18 bold">
                                    {{--<button class="btn btn-link"><i class="pg-close"></i></button>--}}
                                </span>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="scrollable">
                        <div class="demo-card-scrollable" style="max-height: 300px; min-height: 300px;">
                            <table class="table table-condensed table-hover">
                                <tbody>
                                <tr>
                                    <td class="fs-14" style="width: 5%">1</td>
                                    <td class="fs-14" style="width: 10%">BIT-1234567</td>
                                    <td class=" text-left" style="width: 40%">
                                        <span class="fs-18">Samsung Note 8</span>
                                    </td>
                                    <td class=" text-left" style="width: 10%">
                                        <span class="fs-18">3</span>
                                    </td>
                                    <td class=" text-left" style="width: 10%">
                                        <span class="fs-18">30000</span>
                                    </td>
                                    <td class=" text-left" style="width: 10%">
                                        <span class="fs-18">30000</span>
                                    </td>
                                    <td class=" text-center" style="width: 5%">
                                    <span class="fs-18">
                                        <button class="btn btn-link"><i class="pg-close"></i></button>
                                    </span>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">

            <div class="card card-default rounded" style="height: 240px">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input class="typeahead form-control" id="mytyphead" type="text"
                                       placeholder="Search Customer" style="background-color: #fafafa;">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default pull-right">
                                <span class="bold fs-16">+</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-12 d-flex flex-column">
                            <p class="bold m-b-5">Rehman Deraiya</p>
                            <p class="hint-text">
                                Rushinager, Saravali, Dahanu Road, District - Palghar, Maharashtra, INDIA, 401602
                            </p>
                            <div class="d-flex flex-row">
                                <p class="bold">Last Purchase:&nbsp;</p>
                                <p class="text-primary">12 January 2018</p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="input-group transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text transparent">
                                                    <i class="fa fa-phone hint-text"></i>
                                                </span>
                                            </div>
                                            <input type="text" value="+91-9226714345" class="form-control hint-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-default rounded" style="height: 240px">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="hint-text text-left">Subtotal</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="hint-text bold text-right">3906.00</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="hint-text text-left">Discount</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="hint-text bold text-right">300.00</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="hint-text text-left">Tax</p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="hint-text bold text-right">297.00</p>
                                </div>
                            </div>
                            <hr class="m-t-5 m-b-5">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="hint-text text-left semi-bold">Total</h4>
                                </div>
                                <div class="col-lg-8">
                                    <h4 class="hint-text bold text-right">297.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-default rounded" style="height: 240px;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-8">
                            <button class="btn btn-default btn-lg bold btn-larger w-100" style="background-color: #fafafa">Hold</button>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-default btn-lg bold btn-larger w-100" style="background-color: #fafafa">Cancel</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row m-t-10">
                        <div class="col-lg-12">
                            <button class="btn btn-complete btn-lg bold btn-larger w-100 p-t-50 p-b-50 h4 bold">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript"
            src="{{asset('assets/plugins/bootstrap-typehead/typeahead.bundle.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/plugins/bootstrap-typehead/typeahead.jquery.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>

    <script>
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'http://pages.revox.io/json/countries-list.json'
        });

        // passing in `null` for the `options` arguments will result in the default
        // options being used
        $('#mytyphead').typeahead(null, {
            name: 'countries',
            source: countries
        });
    </script>

@endsection