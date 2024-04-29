@extends('layouts.app')
@section('title', 'Job')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-briefcase"></i>
                Add New Job Data
            </div>
            <div class="card-body">
                <form action="/wjob/save" method="post">
                    @csrf
                    @if (!empty($wjob?->id))
                        <input type="hidden" name="id" value="{{ $wjob->id }}"/>
                    @endif
                    
                    <div class="mb-3">
                        <label for="wjob_code" class="form-label">Code</label>
                        <input type="text" name="wjob_code" class="form-control" placeholder="Enter The Job Code"
                        value="{{ isset($wjob) ? $wjob?->wjob_code : old('wjob_code') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="wjob_name" class="form-label">Name</label>
                        <input type="text" name="wjob_name" class="form-control" placeholder="Enter The Job Name"
                        value="{{ isset($wjob) ? $wjob?->wjob_name : old('wjob_name') }}" required/>
                    </div>
                        
                    <div class="mb-3">
                        <label for="wjob_status" class="form-label">Status</label>
                        <input type="text" name="wjob_status" class="form-control" placeholder="Enter The Job Status"
                        value="{{ isset($wjob) ? $wjob?->wjob_status : old('wjob_status') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control"
                        value="{{ isset($wjob) ? $wjob?->start_date : old('start_date') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="division" class="form-label">Division</label>
                        <select name="division" class="form-select">
                            @foreach ($divisions as $division)
                                <option value="{{ $division->id }}"
                                    selected="{{ isset($wjob) and $wjob->division->id == $division->id ? 'true' : 'false' }}">
                                    {{ $division->division_name }}
                                </option>
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