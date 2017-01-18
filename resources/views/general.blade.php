
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Velteo</title>
        <link rel="icon" type="image/png" href="{{ asset('/image/icon.png') }}" />
        <link href="{{ asset('/css/velteo_general.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
        @yield('css')
        @yield('js')
    </head>
    <header>
        <div id="title">
            <h1>Velteo</h1>
        </div>
        <ul class="navContent">
            <li ><a href="{{asset('/')}}">Home</a></li>
            <li><a href="{{asset('graph_unique')}}">Graph Unique</a></li>
        </ul>
        <div class="spinner-master2">
            <input type="checkbox" id="spinner-form2" />
            <label for="spinner-form2" class="spinner-spin2">
                <div class="spinner2 diagonal part-1"></div>
                <div class="spinner2 horizontal"></div>
                <div class="spinner2 diagonal part-2"></div>
            </label>
        </div>
    </header>
    <body>
        @yield('content')
    </body>
    <div class="footerSpacer"></div>
    <footer>
        <p>Created By Thomas Gille, Yohan Masson and Lucas Heraut</p>
    </footer>
</html>
