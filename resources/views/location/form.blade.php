@extends('layouts.app')
@section('title', 'Location')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-map-marker"></i>
                Add New Location Data
            </div>
            <div class="card-body">
                <form action="/location/save" method="post">
                    @csrf
                    @if (!empty($location?->id))
                        <input type="hidden" name="id" value="{{ $location->id }}"/>
                    @endif
                                    
                    <div class="mb-3">
                        <label for="location_name" class="form-label">Name</label>
                        <input type="text" name="location_name" class="form-control" placeholder="Enter The Name"
                        value="{{ isset($location) ? $location?->location_name : old('location_name') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <input type="text" name="province" class="form-control" placeholder="Enter The Province"
                        value="{{ isset($location) ? $location?->province : old('province') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input type="text" name="postal_code" class="form-control" placeholder="Enter The Postal Code"
                        value="{{ isset($location) ? $location?->postal_code : old('postal_code') }}" required/>
                    </div>

                    <div class="mt-4">
                        @if (!empty(session("error")))
                            {{ session("error", "") }}
                        @endif
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection