<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'registration_number',
    ];

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
