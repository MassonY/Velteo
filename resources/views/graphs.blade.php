<?php
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 08/12/2016
 * Time: 14:22
 */
?>

@extends('general')

@section('css')
    <link href="{{asset('css/graph.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/graphHour.js') }}" ></script>
@endsection

@section('content')
    <div id="dom-target" style="display: none;">
        <?php
            echo htmlspecialchars($data);
        ?>
    </div>
    <?php
    echo "<h2> Graph of the Station : $name </h2>"
    ?>
    <div id="chart_div"></div>
@endsection

