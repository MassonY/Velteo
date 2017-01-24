<?php
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 24/01/2017
 * Time: 16:29
 */

@extends('general')

@section('css')
    <link href="{{asset('/css/maps.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    <script type="text/javascript">


        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(-33.92, 151.25),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

    </script>
@endsection

@section('content')
    {{--<div id="table_holder">--}}
        {{--@foreach($data as $station)--}}
            {{--<div class="table_element">--}}
                {{--@php--}}
                    {{--$url = url("graph_unique/$station->id")--}}
                {{--@endphp--}}
                {{--<a href="{{$url}}">--}}
                    {{--<p>{{$station->name}}</p>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}

    <div id="map" style="width: 500px; height: 400px;"></div>
@endsection
