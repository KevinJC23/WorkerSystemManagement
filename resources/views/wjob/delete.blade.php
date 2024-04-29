<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>

@extends('layouts.app')
@section('title', 'Confirm Delete Job')
@section('content')

    <div class="row mt-4">
        <div class="col-4 offset-4">
            <form action="/wjob/delete/{{ $wjob->id }}" method="post">
                @csrf
                <div class="mb-3">
                    <h4 style="font-family: 'Segoe UI'">Do you want to delete this data?</h4>
                    <h5 style="font-family: 'Segoe UI'">Job Code: {{ $wjob->wjob_code }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Job Name: {{ $wjob->wjob_name }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Job Status: {{ $wjob->wjob_status }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Division: {{ $wjob->division->division_name }}</h5>
                    <h5 style="font-family: 'Segoe UI'">Start Date: {{ $wjob->start_date }} </h5>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <a href="/wjob" class="btn btn-warning">Cancel</a>
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