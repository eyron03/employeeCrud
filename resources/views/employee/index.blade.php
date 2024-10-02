@extends('frontend.layout')
@section('contents')
@if (session('success'))
    <div class="alert alert-success">
        <span class="text-success">{{ session('success') }}</span>   
    </div>
@endif

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Employees Information</h3>
                    <a href="{{ route('employee.create') }}" class="btn btn-primary float-end">Add Employee</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered border-success mx-auto text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date of Birth</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->FirstName }}</td>
                                        <td>{{ $employee->LastName }}</td>
                                        <td>{{ $employee->dob }}</td>
                                        <td>{{ $employee->age }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-primary mx-2" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                                                <a class="btn btn-success mx-2" href="{{ route('employee.show', $employee->id) }}">Show</a>
                                                
                                                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="mx-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
