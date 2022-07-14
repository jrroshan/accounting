<?php

namespace App\Http\Controllers\Student;

use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('fees', 'transactions')->get();
        $totalFeeAmount = 0;
        $totalPaidAmount = 0;
        $totalDueAmount = 0;
        foreach ($students as $student) {
            foreach ($student->fees as $fee) {
                $totalFeeAmount += $fee->amount;
            }
            foreach ($student->transactions as $transaction) {
                $totalPaidAmount += $transaction->amount;
            }
        }
        $totalDueAmount = $totalFeeAmount - $totalPaidAmount;
        return view('admin.student.index', compact('students','totalFeeAmount','totalPaidAmount','totalDueAmount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('admin.students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('admin.students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function View($student_id)
    {
        $student = Student::with(['fees' => function ($query) {
            return $query->orderByDesc('id')->with('transactions');
        }], ['transactions' => function ($query) {
            return $query->orderByDesc('id');
        }])->findOrFail($student_id);
        $totalFeeAmount = 0;
        $totalPaidAmount = 0;
        $totalDueAmount = 0;
        foreach ($student->fees as $fee) {
            $totalFeeAmount += $fee->amount;
        }
        foreach ($student->transactions as $transaction) {
            $totalPaidAmount += $transaction->amount;
        }
        $totalDueAmount = $totalFeeAmount - $totalPaidAmount;
        return view('admin.student.view', compact('student', 'totalDueAmount', 'totalPaidAmount'));
    }

    public function export()
    {
        return Excel::download(new StudentExport, 'students.xlsx');
    }
}
