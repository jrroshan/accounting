@extends('admin.layouts.master')

@section('title', 'Add Expense Category')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Expense Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.expense.category.index') }}">Expense Category</a>
                    </li>
                    <li class="breadcrumb-item active">Add Expense</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Expense</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.expense.category.store') }}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Address" style="padding-bottom: 10px;">Expense Category</label>
                                            <input type="text" class="form-control" name="category_name" placeholder=""
                                                id="amount">
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
