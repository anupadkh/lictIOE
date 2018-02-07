<!DOCTYPE html>
<html lang="en">
    <head>
        @section('head')
            @include('partials.auth.head')
        @show
        @section('customcss')
        @show
    </head>
    <body>
        <div class="wrapper">
            
            @section('sidebar')
                @include('partials.auth.sidebar')
            @show

            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p><i class="material-icons">person</i>  Saurav lal Karn </p>
                                    <p class="hidden-lg hidden-md">Details</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>

                @section('content')

                @show

                @section('footer')
                    @include('partials.auth.footer')
                @show

            </div>
        </div>
        @section('footer-bar')
                @include('partials.auth.footer-bar')
        @show

        @section('customjs')
        @show
    </body>
</html>


