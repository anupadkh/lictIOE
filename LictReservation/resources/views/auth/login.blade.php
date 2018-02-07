@extends('layouts.unauth')

@section('content')
<div class="wrapper">
        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-6">
                            <div>
                                <h3 class="title text-center">ICTC Reservation Site</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title text-center">Login</h4>
                                </div>
                                <div class="card-content">
                                    <form method="post" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email Address</label>
                                                    <input type="email" class="form-control" name="email"  value="{{ old('email') }}" required autofocus>

                                                    @if($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                                                    @if($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-primary pull-left">Forget Password</a>
                                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                                        <div class="clearfix"></div>
                                        <h3 class="text-center"> OR </h3>
                                         <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Login using
                    Facebook</a>
                                    </form>
                                    <br>
                                    <a href="{{ route('register') }}">New! Register a account</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection