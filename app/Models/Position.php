<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /** @use HasFactory<\Database\Factories\PositionFactory> */
    use HasFactory;

    protected $guarded =[];

     // relasi one to many 
    //satu posisi dimiliki banyak karyawan
    public function karyawan(){
      return $this->hasMany(Employee::class, 'employees_id');

    }

    
}
