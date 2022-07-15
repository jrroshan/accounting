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
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title d-inline-block col-md-2">Students List</h5>
                            <h5 class="card-title d-inline-block col-md-2">Total Paid Amount:{{ $totalDueAmount }}</h5>
                            <h5 class="card-title d-inline-block col-md-2">Total Paid Amount:{{ $totalPaidAmount }}</h5>
                            <h5 class="card-title d-inline-block col-md-2">Total Paid Amount:{{ $totalFeeAmount }}</h5>
                            <h5 class="card-title d-inline-block" style="float: right"><a
                                    href="{{ route('admin.students.create') }}">Add Student</a></h5>
                            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50">SN.</th>
                                            <th scope="col">Date of reg</th>
                                            <th scope="col">Student</th>
                                            <th scope="col">Phone</th>
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
                                                <?php $total_amount = 0; ?>
                                                <?php $total_paid = 0; ?>
                                                <?php $total_discount = 0; ?>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ Carbon\Carbon::parse($student->created_at)->format('m/d/Y') }}</td>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student->phone }}</td>
                                                <td>
                                                    @foreach ($student->fees as $fee)
                                                        <?php $total_amount += $fee->amount; ?>
                                                    @endforeach
                                                    {{ $total_amount }}
                                                </td>
                                                <td>
                                                    @foreach ($student->transactions as $transaction)
                                                        <?php $total_paid += $transaction->amount; ?>
                                                        <?php $total_discount += $transaction->discount; ?>
                                                    @endforeach
                                                    {{ $total_paid }}
                                                </td>
                                                <td>
                                                    {{ $total_discount }}</td>
                                                <td>{{ $total_amount - $total_paid }}</td>
                                                <td>
                                                    <a href="{{ route('admin.students.view', $student->id) }}"
                                                        class="d-inline-block btn btn-primary">View</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.students.edit', $student->id) }}"
                                                        class="d-inline-block btn btn-primary mb-1">Edit</a>
                                                    <form method="post"
                                                        action="{{ route('admin.students.destroy', $student->id) }}"
                                                        class="d-inline-block">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </form>
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection

@push('custom-scripts')
    $(document).ready(function(){

    $(document).on('click', '.pagination a', function(event){
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
    });

    function fetch_data(page)
    {
    $.ajax({
    url:"/pagination/fetch_data?page="+page,
    success:function(data)
    {
    $('#table_data').html(data);
    }
    });
    }

    });
@endpush
