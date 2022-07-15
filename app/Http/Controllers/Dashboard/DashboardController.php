<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('transactions')->get();
        $total_expenses = 0;
        $total_student = $students->count();
        $total_deposited = 0;
        $previousDeposited = 0;
        $increasePercent = 0;
        // $total_student->count();
        // dd($dateS = Carbon::now()->startOfMonth()->subMonth(3));
        // dd(Carbon::now()->endOfMonth()->subMonthsNoOverflow());
        $monthStart = Carbon::now()->startOfMonth();
        $monthEnd = Carbon::now()->endOfMonth();
        $previousMonthStart = carbon::now()->startOfMonth()->subMonth(1);
        $previousMonthEnd = Carbon::now()->endOfMonth()->subMonthsNoOverflow();
        foreach ($students as $student) {
            $total_deposited += $student->transactions->whereBetween('created_at', [$monthStart, $monthEnd])->sum('amount');
            $previousDeposited += $student->transactions->whereBetween('created_at', [$previousMonthStart, $previousMonthEnd])->sum('amount');
        }
        if ($previousDeposited != 0 && $total_deposited != 0) {
            $increasePercent = ($total_deposited - $previousDeposited) / $previousDeposited * 100;
        }
        $total_expenses = Expense::whereBetween('date', [$monthStart, $monthEnd])->sum('amount');
        return view('admin.index', compact('total_student', 'total_deposited','increasePercent','total_expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
