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
                 <div class="card-body">
                    <p>{{ $employee->FirstName }}</p>
                 </div>
                </div>
            </div>
        </div>
    </div>
@endsection
