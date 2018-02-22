@extends('layouts.auth')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Reservations</h4>
                            <p class="category">Your reservations</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Hall</th>
                                    <th>Date</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <td>{{ $reservation->id }}</td>
                                            <td>{{ $reservation->hall_id }}</td>
                                            <td>{{ $reservation->date }}</td>
                                            <td>{{ $reservation->from }}</td>
                                            <td>{{ $reservation->to }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>
                                                @if($reservation->status == 0)
                                                    <span>Unapproved</span>
                                                @endif
                                                @if($reservation->status == 1)
                                                        <span style="color: green;">Approved</span>
                                                    @endif
                                                    @if($reservation->status == 2)
                                                        <span style="color: red;">Declined</span>
                                                    @endif
                                            </td>
                                            <td>
                                                @if($reservation->status != 1)
                                                    <a href="{{ route('approve-reservation', ['id'  =>  $reservation->id]) }}"> <i class="material-icons">done</i> </a>
                                                @endif
                                                    @if($reservation->status != 2)
                                                        <a href="{{ route('decline-reservation', ['id'  =>  $reservation->id]) }}"> <i class="material-icons">clear</i> </a>
                                                    @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

             
@endsection
