@extends('layouts.app')
@section('title', 'Worker')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-user"></i>
                Worker Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>Phone Number</th>
                            <th>Salary</th>
                            <th>Job</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workers as $worker)
                        <tr>
                            <td>{{ $worker->worker_code }}</td>
                                <td>{{ $worker->worker_name }}</td>
                                <td>{{ $worker->birthday }}</td>
                                <td>{{ $worker->phone_number }}</td>
                                <td>{{ $worker->salary }}</td>
                                <td>{{ $worker->wjob->wjob_name }}</td>
                                <td>
                                    <a href="/worker/update/{{ $worker->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/worker/delete/{{ $worker->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection