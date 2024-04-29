@extends('layouts.app')
@section('title', 'Location')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-map-marker"></i>
                Location Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Province</th>
                            <th>Postal Code</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <td>{{ $location->location_name }}</td>
                            <td>{{ $location->province }}</td>
                            <td>{{ $location->postal_code }}</td>
                            <td>
                                <a href="/location/update/{{ $location->id }}" class="btn btn-primary">Edit</a>
                                <a href="/location/delete/{{ $location->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection