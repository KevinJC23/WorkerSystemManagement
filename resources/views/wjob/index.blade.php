@extends('layouts.app')
@section('title', 'Job')
@section('content')


    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-briefcase"></i>
                Job Data
            </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Division</th>
                        <th>Start Date</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wjobs as $wjob)
                        <tr>
                            <td>{{ $wjob->wjob_code }}</td>
                            <td>{{ $wjob->wjob_name }}</td>
                            <td>{{ $wjob->wjob_status }}</td>
                            <td>{{ $wjob->division->division_name }}</td>
                            <td>{{ $wjob->start_date }}</td>
                            <td>
                                <a href="/wjob/update/{{ $wjob->id }}" class="btn btn-primary">Edit</a>
                                <a href="/wjob/delete/{{ $wjob->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                
@endsection