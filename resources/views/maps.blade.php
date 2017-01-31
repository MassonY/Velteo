<?php
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 24/01/2017
 * Time: 16:29
 */
?>

@extends('general')

@section('css')
    <link href="{{asset('/css/maps.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBkDjeG6xU1huYnejw2dgNXX3eiB8dslLk&sensor=false" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/maps.js') }}" ></script>
@endsection

@section('content')

    <div id="map"></div>

    <div id="dom-target" style="display: none;">
        <?php
        echo htmlspecialchars($data);
        ?>
    </div>
@endsection
