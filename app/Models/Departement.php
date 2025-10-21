<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    /** @use HasFactory<\Database\Factories\DepartementFactory> */
    use HasFactory;

    protected $guarded = [];

      // relasi one to many 
    //satu departement bisaa memiliki banyak karyawan
    public function karyawan(){
      return $this->hasMany(Employee::class, 'employees_id');

    }
}
