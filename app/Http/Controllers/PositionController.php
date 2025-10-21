<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;


class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $position = Position::latest()->paginate();

        return view('positions.index', [
            'position' => $position,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('positions.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
            'gaji_pokok' => 'required|numeric|min:0',
        ]);

        Position::create($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        return view('positions.show',[
            'positions' => $position
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('positions.edit',[
            'positions' => $position
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePositionRequest $request, Position $position)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
            'gaji_pokok' => 'required|numeric|min:0',
        ]);

        $position->update($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('positions.index');
    }
}
