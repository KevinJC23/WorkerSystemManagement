@extends('layouts.app')
@section('title', 'Worker')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="lni lni-user"></i>
                Add New Worker Data
            </div>
            <div class="card-body">
                <form action="/worker/save" method="post">
                    @csrf
                    @if (!empty($worker?->id))
                        <input type="hidden" name="id" value="{{ $worker->id }}"/>
                    @endif
                        
                    <div class="mb-3">
                        <label for="worker_code" class="form-label">Code</label>
                        <input type="text" name="worker_code" class="form-control" placeholder="Enter The Worker Code"
                        value="{{ isset($worker) ? $worker?->worker_code : old('worker_code') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="worker_name" class="form-label">Name</label>
                        <input type="text" name="worker_name" class="form-control" placeholder="Enter The Worker Name"
                        value="{{ isset($worker) ? $worker?->worker_name : old('worker_name') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" name="birthday" class="form-control"
                        value="{{ isset($worker) ? $worker?->birthday : old('birthday') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Enter The Phone Number"
                        value="{{ isset($worker) ? $worker?->phone_number : old('phone_number') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" name="salary" class="form-control"
                        value="{{ isset($worker) ? $worker?->salary : old('salary') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="wjob" class="form-label">Job</label>
                        <select name="wjob" class="form-select">
                            @foreach ($wjobs as $wjob)
                                <option value="{{ $wjob->id }}"
                                    selected="{{ isset($worker) and $worker->wjob->id == $wjob->id ? 'true' : 'false' }}">
                                    {{ $wjob->wjob_name }}
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