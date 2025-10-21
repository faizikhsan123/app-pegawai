<?php

namespace App\Models;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $guarded = ['id'];

    
    // relasi one to many 
    //satu karyawan punya banyak absen (harian)
    public function absen(){
        return $this->hasMany(Attendance::class, 'attendances_id');
    }
    // relasi one to one 
    //setiap karyawan hanya satu departemen
    public function departemen(){
        return $this->belongsTo(Departement::class,'departements_id');
    }

    // relasi one to one 
    //setiap karyawan hanya satu jabatan
    public function jabatan(){
        return $this->belongsTo(Position::class,'positions_id');
    }

    // relasi one to one 
    //satu karyawan satu salaries
    public function salaries(){
        return $this->hasMany(Salaries::class,'salaries_id');
    }
}
