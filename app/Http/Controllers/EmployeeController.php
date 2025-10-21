<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Departement;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employee::with('departemen', 'jabatan')->latest()->paginate(5);

        return view('employes.index', [
            'title' => 'app-pegawai',
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        $positions = Position::all();

        return view('employes.create', [
            'departements' => $departements,
            'positions' => $positions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email',
            'nomor_telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        Employee::create($request->all());
        return redirect()->route('employes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employes = Employee::find($id);

        return view('employes.show', [
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employes = Employee::findOrFail($id);
        $departements = Departement::all();
        $positions = Position::all();

        return view('employes.edit', [
            'employes' => $employes,
            'departements' => $departements,
            'positions' => $positions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email,' . $id,
            'nomor_telepon' => 'required|string|max:15',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|string|max:50',
            'departements_id' => 'required|exists:departements,id',
            'positions_id' => 'required|exists:positions,id',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->only([
            'nama_lengkap',
            'email',
            'nomor_telepon',
            'tanggal_lahir',
            'alamat',
            'tanggal_masuk',
            'status',
            'departements_id',
            'positions_id',
        ]));

        return redirect()->route('employes.index')->with('success', 'Data pegawai berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employes = Employee::find($id);
        $employes->delete();

        return redirect()->route('employes.index');
    }
}
