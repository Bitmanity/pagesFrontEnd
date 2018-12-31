@extends('layouts.default')

@section('title', 'New Contact')

@section('stylesheet')
    {{--<link media="screen" type="text/css" rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select2/select2.css')}}">--}}
@endsection

@section('content')

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