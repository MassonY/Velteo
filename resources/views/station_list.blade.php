<?php
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 18/01/2017
 * Time: 08:40
 */
?>

@extends('general')

@section('css')
    <link href="{{asset('/css/graph_unique_table.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div id="table_holder">
        @foreach($data as $station)
            <div class="table_element">
                @php
                $url = url("graph_unique/$station->id")
                @endphp
                <a href="{{$url}}">
                    <p>{{$station->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection
