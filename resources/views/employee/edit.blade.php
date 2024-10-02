@extends('frontend.layout')
@section('contents')
{{ session('success') }}
    <div class="container">
        <div class="row">
            <div class="cold-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Employees Information</h3>
                        <a href="{{ route('employee.index') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                   <form  action="{{ route('employee.update',$employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" name="FirstName"class="form-control" value="{{ $employee->FirstName }}">
                    </div>
                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="LastName"class="form-control" value="{{ $employee->LastName }}">
                    </div>
                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob"class="form-control" value="{{ $employee->dob }}">
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="text" name="age"class="form-control" value="{{ $employee->age }}">
                    </div>
                    <button class="btn btn-success" name="submit">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
