@extends('admin.layouts.master')

@section('title', 'Edit Student')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Student</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
                    <li class="breadcrumb-item active">Edit Student</li>
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
                            <form action="{{ route('admin.students.update',$student->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">Student Name</label>
                                            <input type="text" class="form-control" name="name" placeholder=""
                                                id="Client" value="{{ $student->name }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Address" style="padding-bottom: 10px;">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder=""
                                                id="address" value="{{ $student->address }}">
                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <br>
                                            <label for="email" style="padding-bottom: 10px;">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="" value="{{ $student->email }}">
                                        </div>
                                    </div>


                                    <!-- <div class="col-md-6">
                                  <div class="form-group">
                                    <br>
                                    <label for="pos"  style="padding-bottom: 10px;">Position</label>
                                    <input type="text" class="form-control" placeholder="" id="pos">
                                  </div>
                                </div> -->


                                    <!--
                            <div class="col-md-6">
                              <div class="form-group">
                                <br>
                                <label for="company"  style="padding-bottom: 10px;">Company Name</label>
                                <input type="text" class="form-control" placeholder="" id="company">
                              </div>
                            </div>
           -->

                                    <!-- <div class="col-md-6">
                              <div class="form-group">
                                <br>
                                <label for="cp"  style="padding-bottom: 10px;">Contact</label>
                                <input type="text" class="form-control" placeholder="" id="cp">
                              </div>
                            </div>
           -->






                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="num" style="padding-bottom: 10px;"> Ph-Number</label>
                                            <input type="number" class="form-control" name="phone" placeholder=""
                                                id="num" value="{{ $student->phone }}">
                                        </div>
                                    </div>




                                </div>


                                <div class="row">



                                    <!-- <div class="col-md-6">
                              <div class="form-group">
                                <br>
                                <label for="tel"  style="padding-bottom: 10px;">Tel-Number</label>
                                <input type="number" class="form-control" placeholder="" id="tel">
                              </div>
                            </div> -->



                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="clf" style="padding-bottom: 10px;">Class Fees</label>
                                            <input type="number" class="form-control" placeholder="" id="clf">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="bkf" style="padding-bottom: 10px;">Book Fees</label>

                                            <input type="number" name="nm" class="form-control" id="bkf">
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <label for="reg" style="padding-bottom: 10px;">Registration NO.</label>

                                            <input type="number" name="registration_number" class="form-control"
                                                id="reg" value="{{ $student->registration_number }}">
                                        </div>
                                    </div>




                                </div>
                                <br>


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

    </main><!-- End #main -->

@endsection
