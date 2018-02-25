@extends('layouts.auth')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title text-center">Reserve a hall</h4>
                                </div>
                                <div class="card-content">
                                    <form method="post" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date</label>
                                                    <input type="date" class="form-control" name="date"  value="{{ old('date') }}" required autofocus>

                                                    @if($errors->has('date'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('date') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Time</label>
                                                    <input type="time" class="form-control" name="time" value="{{ old('time') }}" required>
                                                    @if($errors->has('time'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('time') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Reserve</button>
                                        <div class="clearfix"></div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

            </div>
        </div>
    </div>

             
@endsection
