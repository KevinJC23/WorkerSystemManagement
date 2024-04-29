<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>

@extends('layouts.app')
@section('title', 'Confirm Delete Location')
@section('content')

    <div class="row mt-4">
        <div class="col-4 offset-4">
            <form action="/location/delete/{{ $location->id }}" method="post">
                @csrf
                <div class="mb-3">
                    <h4 style="font-family: 'Segoe UI'">Do you want to delete this data?</h4>
                    <h5 style="font-family: 'Segoe UI'">Location Name: {{ $location-> location_name }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Province: {{ $location->province }} </h5>
                    <h5 style="font-family: 'Segoe UI'">Postal Code: {{ $location->postal_code }} </h5>
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Confirm</button>
                    <a href="/location" class="btn btn-warning">Cancel</a>
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