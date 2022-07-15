@extends('admin.layouts.master')

@section('title', 'Edit Expense')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Expense</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.expenses.index') }}">Expense</a></li>
                    <li class="breadcrumb-item active">Edit Expense</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Expense</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('admin.expenses.update',$expense->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="client" style="padding-bottom: 10px;">Enter Date</label>
                                            <input type="date" class="form-control" name="date" id="Client" value="{{ $expense->date }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Address" style="padding-bottom: 10px;">Amount</label>
                                            <input type="number" class="form-control" name="amount" placeholder=""
                                                id="amount" value="{{ $expense->amount }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelect">Expense Category</label>
                                            <select class="form-control" id="exampleSelect" name="expense_category_id">
                                                @foreach ($expenseCategories as $category)
                                                    <option value="{{ $category->id }}"  {{ $category->id==$expense->expense_category_id?"selected":'' }}>{{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <br>
                                        <textarea cols="20" class="form-control" name="description">{{ $expense->description }}</textarea>
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
