@extends('admin.layouts.master')

@section('title', 'Add Student')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Student</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
                    <li class="breadcrumb-item active">Add Student</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Student</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.students.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">Student Name</label>
                                            <input type="text" class="form-control" name="name" placeholder=""
                                                id="Client">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        {{-- <div class="form-group"> --}}
                                        <label for="Address" style="padding-bottom: 10px;">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder=""
                                            id="address">
                                        {{-- </div> --}}
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="email" style="padding-bottom: 10px;">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="num" style="padding-bottom: 10px;">Ph-Number</label>
                                            <input type="number" class="form-control" name="phone" placeholder=""
                                                id="num">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="client" style="padding-bottom: 10px;">Discount</label>
                                            <input type="number" class="form-control" name="discount" placeholder=""
                                                id="discount">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="reg" style="padding-bottom: 10px;">Registration No.</label>
                                            <input type="number" name="registration_number" class="form-control"
                                                id="reg">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                      </div>
                                {{-- <div class="mt-2">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" id="btn">Submit Form</button>
                                    </div>
                                </div> --}}
                            </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

@endsection
