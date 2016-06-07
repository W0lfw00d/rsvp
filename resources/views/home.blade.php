@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Confirmed</th>
                            <th>Vegetarian</th>
                            <th>Food Allergy</th>
                            <th>Food Allergy Details</th>
                            <th>Dance Request</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(rsvps)
                        </tbody>
                        <tr>
                            <td>{{ $rsvp->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                { data: 'confirmation', name: 'confirmation' },
                { data: 'vegetarian', name: 'vegetarian' },
                { data: 'food_allergy', name: 'food_allergy' },
                { data: 'food_allergy_spec', name: 'food_allergy_spec' },
                { data: 'dance_request', name: 'dance_request' }
            ]
        });
    });
</script>
@endpush
