@extends('admin.layouts.master')

@section('title', 'Expense Category')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Expense Category Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Expense Category</li>
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
                                    href="{{ route('admin.expense.category.create') }}">Add Expense</a></h5>
                            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50">SN.</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $category->category_name }}</td>
                                            <td>
                                                <a href="{{ route('admin.expense.category.edit', $category->id) }}"
                                                    class="d-inline-block btn btn-primary">Edit</a>
                                                <form method="post"
                                                    action="{{ route('admin.expense.category.destroy', $category->id) }}"
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
