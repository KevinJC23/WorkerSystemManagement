<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>

@extends('layouts.app')
@section('title', 'Confirm Delete Division')
@section('content')

    <div class="row mt-4">
        <div class="col-4 offset-4">
            <form action="/division/delete/{{ $division->id }}" method="post">
                @csrf
                <div class="mb-3">
                    <h4 style="font-family: 'Segoe UI'">Do you want to delete this data?</h4>
                    <h5 style="font-family: 'Segoe UI'">Division Code: {{ $division->division_code }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Division Name: {{ $division->division_name }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Head Division: {{ $division->head_division }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Contact Info: {{ $division->contact_info }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Location: {{ implode(', ', $division->locations()->pluck('location_name')->toArray()) }} </h5>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <a href="/division" class="btn btn-warning">Cancel</a>
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