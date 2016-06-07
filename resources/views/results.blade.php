@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">RSVP's</div>

                    <div class="panel-body">
                        <table class="table table-hover table-condensed" id="rsvp-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Confirmed</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Vegetarian</th>
                                <th>Food Allergy</th>
                                <th>Food Allergy Details</th>
                                <th>Dance Request</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rsvps as $rsvp)
                                <tr>
                                    <td>{{ $rsvp->id }}</td>
                                    <td>{{ $rsvp->confirmation}}</td>
                                    <td>{{ $rsvp->name }}</td>
                                    <td>{{ $rsvp->email }}</td>
                                    <td>{{ $rsvp->created_at }}</td>
                                    <td>{{ $rsvp->updated_at }}</td>
                                    <td>{{ $rsvp->food_allergy }}</td>
                                    <td>{{ nl2br($rsvp->food_allergy_spec) }}</td>
                                    <td>{{ $rsvp->vegetarian }}</td>
                                    <td>{{ $rsvp-> dance_request }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
