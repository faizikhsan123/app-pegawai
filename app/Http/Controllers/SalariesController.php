<?php

namespace App\Http\Controllers;

use App\Models\Salaries;
use App\Http\Requests\StoreSalariesRequest;
use App\Http\Requests\UpdateSalariesRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salaries::with('karyawan')->latest()->paginate();

        return view('salaries.index', [

            'salaries' => $salaries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan = Employee::all();

        return view('salaries.create', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employees_id' => 'required|exists:employees,id',
            'bulan' => 'required|date',
            'gaji_pokok' => 'required|numeric|min:0',
            'tunjangan' => 'required|numeric|min:0',
            'potongan' => 'required|numeric|min:0',
        ]);

        $total = $request->gaji_pokok + $request->tunjangan - $request->potongan;

        Salaries::create([
            'employees_id' => $request->employees_id,
            'bulan' => $request->bulan,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan' => $request->tunjangan,
            'potongan' => $request->potongan,
            'total_gaji' => $total,
        ]);

        return redirect()
            ->route('salaries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salaries $salary)
    {
        $karyawan = Employee::all();

        return view('salaries.show', [
            'salary' => $salary,
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salaries $salary)
    {
        // Ambil semua data karyawan untuk dropdown
        $karyawan = Employee::all();

        // Kirim data salary dan karyawan ke view
        return view('salaries.edit', [
            'salary' => $salary,
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalariesRequest $request, Salaries $salary)
    {
        // Validasi input form
    $request->validate([
        'employees_id' => 'required|exists:employees,id',
        'bulan' => 'required|date',
        'gaji_pokok' => 'required|numeric|min:0',
        'tunjangan' => 'required|numeric|min:0',
        'potongan' => 'required|numeric|min:0',
    ]);

    // Hitung total gaji
    $total = $request->gaji_pokok + $request->tunjangan - $request->potongan;

    // Update data ke database
    $salary->update([
        'employees_id' => $request->employees_id,
        'bulan' => $request->bulan,
        'gaji_pokok' => $request->gaji_pokok,
        'tunjangan' => $request->tunjangan,
        'potongan' => $request->potongan,
        'total_gaji' => $total,
    ]);

    // Redirect kembali ke halaman index setelah update
    return redirect()
        ->route('salaries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salaries $salary)
    {
        $salary->delete();
        return redirect()->route('salaries.index');
    }
}
