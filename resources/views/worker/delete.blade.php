<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>

@extends('layouts.app')
@section('title', 'Confirm Delete Worker')
@section('content')

    <div class="row mt-4">
        <div class="col-4 offset-4">
            <form action="/worker/delete/{{ $worker->id }}" method="post">
                @csrf
                <div class="mb-3">
                    <h4 style="font-family: 'Segoe UI'">Do you want to delete this data?</h4>
                    <h5 style="font-family: 'Segoe UI'">Worker Code: {{ $worker->worker_code }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Worker Name: {{ $worker->worker_name }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Birthday: {{ $worker->birthday }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Phone Number: {{ $worker->phone_number }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Salary: {{ $worker->salary }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Job: {{ $worker->wjob->wjob_name }} </h5>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <a href="/worker" class="btn btn-warning">Cancel</a>
                </div>
                
                <div class="mt-4">
                    @if (!empty(session("error")))
                    {{ session("error", "") }}
                @endif
                </div>
            </form>
        </div>
    </div>

@endsection