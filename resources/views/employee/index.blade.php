
@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-custom bg-purple text-white">
                        <h4 class="mb-0">Register Employee</h4>
                    </div>
                    <div class="card-body bg-light">
                        <form method="POST" action="{{ route('employee.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">Employee First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Employee Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="DOB">Employee DOB</label>
                                    <input type="date" class="form-control" id="DOB" name="DOB" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom bg-purple btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .card-header h4 {
            margin-bottom: 0;
        }
        .card {
            border-radius: 10px;
        }
        .btn {
            border-radius: 5px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .bg-light {
            background-color: #f8f9fa !important;
        }
        .bg-secondary {
            background-color: #6c757d !important;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .thead-light th {
            background-color: #e9ecef;
        }
    </style>
@endpush