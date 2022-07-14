@extends('admin.layouts.master')

@section('title', 'Fees')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Students</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Fee</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fees Form</h5>

                            <form method="POST" action="{{ route('admin.students.fees.update', $fee->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">Fee Heading</label>
                                            <input type="text" class="form-control" placeholder="" id="Client"
                                                name="fee_heading" value="{{ $fee->fee_heading }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="Address" style="padding-bottom: 10px;">Due Date</label>
                                            <input type="date" class="form-control" placeholder="" id="address"
                                                name="due_date" value="{{ $fee->due_date }}">
                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <br>
                                            <label for="amount" style="padding-bottom: 10px;">Amount</label>
                                            <input type="number" class="form-control" id="amount" placeholder=""
                                                name="amount" value="{{ $fee->amount }}">
                                        </div>
                                    </div>
                                </div>
                        </div>



                        <div class="row mb-3">
                            <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" id="btn">Submit Form</button>
                            </div>
                        </div>

                        </form><!-- End General Form Elements -->



                    </div>
                </div>

            </div>


            </div>
        </section>

    </main>
@endsection
