@extends('layouts.auth')

@section('customcss')
    <link href="{{ url('/') }}/css/bootstrap-datetimepicker.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-2 col-md-6">

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title text-center">Reserve a hall</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('post-reservation') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Hall</label>
                                            <select class="form-control" name="hall" id="hall">
                                                <option disabled selected value> -- Select a option -- </option>
                                                <option value="1">Hall A</option>
                                                <option value="2">Hall B</option>
                                                <option value="3">Hall 3</option>
                                            </select>
                                        </div>
                                        @if ($errors->has('hall'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('hall') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="control-label">Date</label>
                                            <input type='date' class="form-control" id="date" name="date" value="{{ old('date') }}" required  />
                                        </div>
                                        @if ($errors->has('date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">From</label>
                                            <input id="from" name="from" type="time" class="form-control" required value="{{ old('from') }}" >
                                        </div>
                                        @if ($errors->has('from'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('from') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">To</label>
                                            <input id="to" name="to" type="time" class="form-control" required value="{{ old('to') }}" >
                                        </div>
                                        @if ($errors->has('to'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('to') }}</strong>
                                            </span>
                                        @endif
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
