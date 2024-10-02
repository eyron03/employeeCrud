@extends('frontend.layout')
@section('contents')
<div class="container">
    <div class="row">
        <div class="cold-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Employees Information</h3>
                    <a href="{{ route('employee.index') }}" class="btn btn-primary float-end">Back</a>
                </div>
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>First Name</label>
                        <input type="text" name="FirstName" class="form-control">
                        @error('FirstName')<span class="text-danger"> {{ $message }}</span>
                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="LastName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="integer" name="age" class="form-control">
                    </div>
                    <button name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection