@extends('layouts.app')
@section('title', 'Division')
@section('content')   

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-helmet"></i>
                Division Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Head Division</th>
                            <th>Contact Info</th>
                            <th>Location</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisions as $division)
                            <tr>
                                <td>{{ $division->division_code }}</td>
                                <td>{{ $division->division_name }}</td>
                                <td>{{ $division->head_division }}</td>
                                <td>{{ $division->contact_info }}</td>
                                <td>{{ implode(', ', $division->locations()->pluck('location_name')->toArray()) }}</td>
                                <td>
                                    <a href="/division/update/{{ $division->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/division/delete/{{ $division->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                
@endsection