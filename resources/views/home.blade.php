@extends('general')

@section('css')
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <h2>Graphs</h2>
    <div class="tiles">
        <div class="tile">
            <h3>Graph1</h3>
            <p>Description</p>
        </div>

        <div class="tile">
            <h3>Graph2</h3>
            <p>Description</p>
        </div>

        <div class="tile">
            <h3>Graph3</h3>
            <p>Description</p>
        </div>

        <div class="tile">
            <h3>Graph4</h3>
            <p>Description</p>
        </div>
    </div>

    <h2>News</h2>
    <div class="news">
        <article>
            <h3>Title 1</h3>
            <p>ABCD</p>
        </article>
        <article>
            <h3>Title 2</h3>
            <p>ABCD</p>
        </article>
    </div>
@endsection