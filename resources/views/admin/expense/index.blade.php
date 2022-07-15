@extends('admin.layouts.master')

@section('title', 'Expense')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Expense Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Expense</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title d-inline-block">Expense</h5>
                            <h5 class="card-title d-inline-block" style="float:right;"><a
                                    href="{{ route('admin.expenses.create') }}">Add Expense</a></h5>
                            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">SN.</th>

                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenses as $expense)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $expense->date }}</td>
                                            <td>{{ $expense->amount }}</td>
                                            <td>{{ Str::limit($expense->description, 10) }}</td>
                                            <td>{{ $expense->expenseCategory->category_name }}</td>
                                            <td>
                                                <a href="{{ route('admin.expenses.edit', $expense->id) }}"
                                                    class="d-inline-block btn btn-primary">Edit</a>
                                                <form method="post"
                                                    action="{{ route('admin.expenses.destroy', $expense->id) }}"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
