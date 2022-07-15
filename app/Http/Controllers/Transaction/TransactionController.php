<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($student, $fee)
    {
        $total_amount = Fee::whereId($fee)->with('transactions')->first();
        $remaining_amount = $total_amount->amount - $total_amount->transactions->sum('amount');
        if($remaining_amount == 0){
            return redirect()->route('admin.students.index')->with('error', 'Fee already paid');
        }
        return view('admin.transaction.create', compact('student', 'fee', 'total_amount','remaining_amount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $student, $fee)
    {
        $validatedDate = $request->validate([
            'amount' => 'required|numeric|min:1|max:'.$request->remaining_amount,
        ]);
        $data = $request->all();
        $transaction = Transaction::latest()->first();
        if ($transaction == null || $transaction == "" || date('Y-m-01') == Carbon::now()->format('Y-m-d')) {
            $data['transaction_id'] = date('ymd') . '00001';
        } else {
            $data['transaction_id'] = $transaction->transaction_id+1;
        }
        $data['fee_id'] = $fee;
        $data['student_id'] = $student;
        Transaction::create($data);
        return redirect()->route('admin.students.view',$student);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
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

    public function invoice($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('admin.invoice.index',compact('transaction'));
    }
}
