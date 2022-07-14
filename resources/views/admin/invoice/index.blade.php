@extends('admin.layouts.master')

@section('title', 'Invoices')

@section('content')
    <div class="bill">
        <style>
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin: 0;
                padding: 0;
            }

            p {
                margin: 0;
                padding: 0;
            }

            .container {
                margin-top: 100px;
                width: 80%;
                margin-right: auto;
                margin-left: 300px;
            }

            .brand-section {
                background-color: #0d1033;
                padding: 10px 40px;
            }

            .logo {
                width: 50%;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
            }

            .col-6 {
                width: 50%;
                flex: 0 0 auto;
            }

            .text-white {
                color: #fff;
            }

            .company-details {
                float: right;
                text-align: right;
            }

            .body-section {
                padding: 16px;
                border: 1px solid gray;
            }

            .heading {
                font-size: 20px;
                margin-bottom: 08px;
            }

            .sub-heading {
                color: #262626;
                margin-bottom: 05px;
            }

            table {
                background-color: #fff;
                width: 100%;
                border-collapse: collapse;
            }

            table thead tr {
                border: 1px solid #111;
                background-color: #f2f2f2;
            }

            table td {
                vertical-align: middle !important;
                text-align: center;
            }

            table th,
            table td {
                padding-top: 08px;
                padding-bottom: 08px;
            }

            .table-bordered {
                box-shadow: 0px 0px 5px 0.5px gray;
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #dee2e6;
            }

            .text-right {
                text-align: end;
            }

            .w-20 {
                width: 20%;
            }

            .float-right {
                float: right;
            }
        </style>
        <div class="container">
            <div class="brand-section">
                <div class="row">
                    <div class="col-6">
                        <h1 class="text-white">Invoice</h1>
                    </div>
                    <div class="col-6">
                        <div class="company-details">
                            <!-- <p class="text-white">assdad asd  asda asdad a sd</p>
                            <p class="text-white">assdad asd asd</p> -->
                            <p class="text-white">{{ $transaction->transaction_id }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="body-section">
                <div class="row">
                    <div class="col-6">
                        <h2 class="heading">Registration No.: {{ $transaction->student->registration_number }}</h2>
                        {{-- <p class="sub-heading">Tracking No. **** </p> --}}
                        <p class="sub-heading">Paid Date: {{ $transaction->created_at }} </p>
                        <p class="sub-heading">Email Address: {{ $transaction->student->email }} </p>
                    </div>
                    <div class="col-6">
                        <p class="sub-heading">Full Name: {{ $transaction->student->name }}</p>
                        <p class="sub-heading">Address: {{ $transaction->student->address }}</p>
                        <p class="sub-heading">Phone Number: {{ $transaction->student->phone }}</p>
                        {{-- <p class="sub-heading">City,State,Pincode: </p> --}}
                    </div>
                </div>
            </div>

            <div class="body-section">
                <!-- <h3 class="heading">Ordered Items</h3> -->
                <br>
                <table class="table-bordered">
                    <thead>
                        <tr class="text-justify">
                            <th>Fee Heading</th>
                            <th class="w-20">Amount</th>
                            <th class="w-20">Discount</th>
                            <th class="w-20">Grandtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $transaction->fee->fee_heading }}</td>
                            <td>{{ $transaction->amount }}</td>
                            <td>{{ $transaction->discount }}%</td>
                            <td>{{ $transaction->amount - ($transaction->discount/100*$transaction->amount) }}</td>
                        </tr>
                        {{-- <tr>
                            <td colspan="3" class="text-right">Sub Total</td>
                            <td> 10.XX</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">Tax Total</td>
                            <td> 2</td>
                        </tr>
                        <tr> --}}
                            <td colspan="3" class="text-right"></td>
                            <td>{{ $transaction->amount - ($transaction->discount/100*$transaction->amount) }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h3 class="heading">Payment Status: Paid</h3>
                <!-- <h3 class="heading">Payment Mode: Cash on Delivery</h3> -->
            </div>
        </div>
    </div>
@endsection
