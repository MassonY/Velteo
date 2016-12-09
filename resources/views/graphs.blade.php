<?php
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 08/12/2016
 * Time: 14:22
 */
?>

@extends('general')

@section('content')

    {{--
    $data = DB::table('Station_Variables')->select('id','nb_bikeStandAvailable','nb_bikeAvailable')->get();

        foreach ($idStation as $station) {
        dump($station->nb_bikeStandAvailable, $station->nb_bikeAvailable);
        echo "<br />";
        }
    --}}
    <div id="chart_div"></div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="/js/graphHour.js"></script>
@endsection

