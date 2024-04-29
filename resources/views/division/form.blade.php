@extends('layouts.app')
@section('title', 'Division')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-helmet"></i>
                Add New Division Data
            </div>
            <div class="card-body">
                <form action="/division/save" method="post">
                    @csrf
                    @if (!empty($division?->id))
                        <input type="hidden" name="id" value="{{ $division->id }}"/>
                    @endif
                    
                    <div class="mb-3">
                        <label for="division_code" class="form-label">Code</label>
                        <input type="text" name="division_code" class="form-control" placeholder="Enter The Division Code"
                        value="{{ isset($division) ? $division?->division_code : old('division_code') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="division_name" class="form-label">Name</label>
                        <input type="text" name="division_name" class="form-control" placeholder="Enter The Division Name"
                        value="{{ isset($division) ? $division?->division_name : old('division_name') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="head_division" class="form-label">Head Division</label>
                        <input type="text" name="head_division" class="form-control" placeholder="Enter The Head Division"
                        value="{{ isset($division) ? $division?->head_division : old('head_division') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="contact_info" class="form-label">Contact Info</label>
                        <input type="text" name="contact_info" class="form-control" placeholder="Enter The Contact Info"
                        value="{{ isset($division) ? $division?->contact_info : old('contact_info') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="location[]" class="form-label">Location</label>
                        <select name="location[]" class="form-select">
                            @foreach ($locations as $location)
                                @if (isset($division) and in_array($location->id, $division_locations))
                                    <option value="{{ $location->id }}" selected>
                                        {{ $location->location_name }}
                                    </option>
                                @else
                                    <option value="{{ $location->id }}">
                                        {{ $location->location_name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
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