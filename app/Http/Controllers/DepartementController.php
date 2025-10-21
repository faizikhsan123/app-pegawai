<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departement = Departement::latest()->paginate(5);

        return view('departements.index', [
            'departement' => $departement
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departements.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:20',
        ]);

        Departement::create($request->all());
        return redirect()->route('departements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        return view('departements.show', [
            'departement' => $departement
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view('departements.edit', [
            'departements' => $departement
        ]);
    }

    public function update(Request $request, Departement $departement)
    {
        $request->validate([
            'nama_departemen' => 'required|string|max:25'
        ]);

        $departement->update($request->all());

        return redirect()->route('departements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {

        $departement->delete();

        return redirect()->route('departements.index');
    }
}
