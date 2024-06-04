
@extends('layouts.app')

@section('content')
   
    <div class="card mt-5 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Employee List</h4>
                    </div>
                    <div> <a href="{{ route('about')}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> ADD
                                        </a></div>
                    <div class="card-body bg-light">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->DOB }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> Edit
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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