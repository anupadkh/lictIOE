<!DOCTYPE html>
<html lang="en">
    <head>
        @section('head')
            @include('partials.auth.head',['title' =>  $title])
        @show
        @section('customcss')
        @show
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        @section('header')
            @include('partials.auth.header')
        @show

        <div class="page-container">
            @section('sidebar')
                @include('partials.auth.sidebar')
            @show

            @section('content')

            @show
        </div>
        @section('footer-bar')
            @include('partials.auth.footer-bar')
        @show

        @section('footer')
            @include('partials.auth.footer')
        @show
        @section('customjs')
        @show
    </body>
</html>


