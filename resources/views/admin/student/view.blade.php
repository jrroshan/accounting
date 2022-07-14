@extends('admin.layouts.master')

@section('title', 'Students List')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Students</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Student</a></li>
                    <li class="breadcrumb-item active">{{ $student->name }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-inline-block">View Fees</h5>
                            <a href="{{ route('admin.students.fees', $student->id) }}" class="btn btn-primary mt-2"
                                style="float:right;">Add Fee</a>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">SN.</th>
                                        <th scope="col">Fee Heading</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student->fees as $fee)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $fee->fee_heading ?? 'Heading Not Entered' }}</td>
                                            <td>{{ $fee->due_date ?? 'Due Date Not Entered' }}</td>
                                            <td>{{ $fee->amount ?? 'Amount Not Entered' }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.students.fees.edit',  ['id' => $fee->id]) }}">Edit
                                                    Fees</a>

                                                    @if ($fee->transactions->sum('amount') != $fee->amount)
                                                <a href="{{ route('admin.students.fees.transactions', ['student'=> $student,'fee'=>$fee]) }}"
                                                    class="px-2">Pay Fees</a>
                                                    @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>


            </div>
        </section>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-inline-block">View Transactions</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">SN.</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student->transactions as $transaction)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $transaction->discount }}</td>
                                            <td>{{ $transaction->amount }}</td>
                                            <td>{{ $transaction->remarks }}</td>
                                            <td>
                                                <a href="{{ route('admin.transactions.invoice', $transaction->id) }}">View
                                                    Invoices</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>


            </div>
        </section>

    </main>
@endsection
