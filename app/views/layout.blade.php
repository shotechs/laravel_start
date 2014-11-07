
@extends('head')


  <body>

@extends('nav')
@include('carousel')
@include('about')
@include('featurette1')
@include('featurette2')
@include('featurette3')
@include('footer')
@include('end_js')

        @yield('content')
    </body>
</html>