<!DOCTYPE html>
<html lang="en">
    <head>
        @section('head')
            @include('partials.unauth.head')
        @show

        @section('customcss')
            @show
    </head>
    <body>

        @section('content')
        @show


        @section('footer')
            @include('partials.unauth.footer')
        @show

        @section('customjs')
        @show
    </body>
</html>
