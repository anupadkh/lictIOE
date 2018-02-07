<!DOCTYPE html>
<html>
    <head>
        @section('head')
            @include('partials.unauth.head')
        @show

        @section('customcss')
            @show
    </head>
    <body class="hold-transition">

        @section('content')
        @show


        @section('footer')
            @include('partials.unauth.footer')
        @show

        @section('customjs')
        @show
    </body>
</html>
