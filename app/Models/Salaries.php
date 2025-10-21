<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    /** @use HasFactory<\Database\Factories\SalariesFactory> */
    use HasFactory;
    protected $guarded = [];

    public function karyawan(){
        return $this->belongsTo(Employee::class,'employees_id');
    }
}
