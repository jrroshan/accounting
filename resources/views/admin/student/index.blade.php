@extends('admin.layouts.master')

@section('title', 'Students List')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Students</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-inline-block">Students List</h5>
                            <h5 class="card-title d-inline-block" style="float: right"><a href="{{ route('admin.students.create') }}">Add Student</a></h5>
                            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">SN.</th>
                                        <th scope="col">Date of reg</th>
                                        <th scope="col">Student</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Deposited</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Remaining Amt</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $student->created_at }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->fees??'Amount Not Entered' }}</td>
                                            <td>{{ $student->transactions }}</td>
                                            <td>{{ $student->transactions }}</td>
                                            <td>{{ $student->transactions }}</td>
                                            <td>
                                                <a href="{{ route('admin.students.view',$student->id) }}">View</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.students.edit',$student->id) }}">Edit Student</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
