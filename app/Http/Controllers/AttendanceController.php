<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAttendanceRequest;
use App\Models\Employee;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance = Attendance::with('karyawan')->latest()->paginate();
        return view(
            'attendance.index',
            [
                'attendance' => $attendance,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan = Employee::all(); //mengambil dari model employee

        return view('attendance.create', [
            'karyawan' => $karyawan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employees_id' => 'required|exists:employees,id',
            'tanggal' => 'required|date',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'required|date_format:H:i',

            'status_absensi' => 'required|in:hadir,izin,sakit,alpha',
        ]);

        Attendance::create($request->all());

        return redirect()->route('attendance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        $karyawan = Employee::all(); //mengambil dari model employee

        return view('attendance.show', [
            'karyawan' => $karyawan,
            'attendances' => $attendance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        $karyawan = Employee::all(); //mengambil dari model employee
        return view('attendance.edit', [
            'karyawan' => $karyawan,
            'attendance' => $attendance
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttendanceRequest $request, Attendance $attendance)
    {
        $request->validate([
            'employees_id' => 'required|exists:employees,id',
            'tanggal' => 'required|date',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'required|date_format:H:i',

            'status_absensi' => 'required|in:hadir,izin,sakit,alpha',
        ]);

        $attendance->update($request->all());

        return redirect()->route('attendance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendance.index');
    }
}
