@extends('admin.layouts.master')

@section('title','Payment')

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

                        <form method="post" action="{{ route('admin.students.fees.transactions', ['student'=>$student,'fee'=>$fee]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="client" style="padding-bottom: 10px;">Amount To be Paid</label>
                                        <input type="number" class="form-control" placeholder="" id="Client" value="{{ $total_amount->amount }}" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="client" style="padding-bottom: 10px;">Discount</label>
                                        <input type="number" class="form-control" placeholder="" id="Client"
                                            name="discount">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Address" style="padding-bottom: 10px;">Amount</label>
                                        <input type="number" class="form-control" placeholder="" id="address"
                                            name="amount">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <br>
                                        <label for="amount" style="padding-bottom: 10px;">Remarks</label>
                                        {{-- <input type="text" class="form-control" id="amount" placeholder=""
                                            name="remarks"> --}}
                                            <textarea class="form-control" cols="20" rows="5" name="remarks">
                                            </textarea>
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
