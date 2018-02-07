@extends('layouts.unauth')

@section('content')

    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="{{ url('/') }}"><b>LICT</b> Reservation</a>
        </div>
        <!-- User name -->
        <div class="text-center">
            Welcome to LICT reservation system.
        </div>
        <br>
        <div class="lockscreen-name">
            <a href="{{ route('login') }}"> <button class="btn btn-lg btn-primary">Login</button> </a>
            <a href="{{ route('register') }}"><button class="btn btn-lg btn-primary">Register</button></a>
        </div>

    </div>
    <!-- /.center -->


@endsection

@section('customjs')
    <script type="text/javascript">
        document.body.className += ' ' + 'lockscreen';
    </script>
    @endsection