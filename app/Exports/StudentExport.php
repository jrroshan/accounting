<?php

namespace App\Exports;

use App\Models\Student;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentExport implements FromView
{
    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Registration Number',
            'Address',
            'Email',
            'Phone',
            'Discount',
            'Created_at',
            'Updated_at'

        ];
    }

    public function view(): View
    {
        return view('studentsExcel', [
            'students' => Student::with('fees')->get()
        ]);
    }

    // /**
    //  * @return \Illuminate\Support\Collection
    //  */
    // public function collection()
    // {
    //     return Student::with('fees')->get();
    // }

    public function map($student): array
    {
        return [
            $student->id,
            $student->name,
            $student->registration_number,
            $student->address,
            $student->email,
            $student->phone,
            $student->discount,
            $student->created_at,
            $student->updated_at,
            $student->fees->sum('amount'),
            $student->fees->name,
        ];
    }
}
