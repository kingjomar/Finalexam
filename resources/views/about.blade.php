@extends('layouts.app')

@section('content')
<div class="container">
        <h3 align="center" class="mt-5">BSIT 3A</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-custom bg-primary text-white">
                        <h4 class="mb-0">Register BSIT 3A</h4>
                    </div>
                    <div class="card-body bg-light">
                        <form method="POST" action="{{ route('employee.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">email</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="DOB">Password</label>
                                    <input type="text" class="form-control" id="DOB" name="DOB" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Confirm Password</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom bg-primary btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div></div>
@endsection