@extends('admin.layouts.master')

@section('title', 'Change Password')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Profile</li>
                    <li class="breadcrumb-item active">Change Password</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Password</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.change-password') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">Old Password</label>
                                            <input type="password" class="form-control" name="oldPassword" placeholder=""
                                                id="Client">
                                        </div>
                                        @error('oldPassword')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">New Password</label>
                                            <input type="password" class="form-control" name="newPassword" placeholder=""
                                                id="Client">
                                        </div>
                                        @error('newPassword')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">Confirm New Password</label>
                                            <input type="password" class="form-control" name="confirmPassword" placeholder=""
                                                id="Client">
                                        </div>
                                        @error('confirmPassword')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12 mt-2">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
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
