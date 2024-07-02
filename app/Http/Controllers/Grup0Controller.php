<?php

namespace App\Http\Controllers;

use App\Models\Grup0;
use Illuminate\Http\Request;

class Grup0Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Grup0::query();

        if($request->has('nombre')){
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }
        $grupos =$query->orderBy('id', 'desc')->simplePaginate(10);

        return view('grupos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grupo = Grup0::create($request->all());

        return redirect()->route('grupos.index')->with('success', 'Grupo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $grupo = Grup0::find($id);

        if (!$grupo){
            return abort(404);
        }

        return view('grupos.show', compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $grupo = Grup0::find($id);

        if (!$grupo){
            return abort(404);
        }

        return view('grupos.edit', compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $grupo = Grup0::find($id);

        if (!$grupo){
            return abort(404);
        }

        $grupo->nombre = $request->nombre;
        $grupo->descripcion = $request->descripcion;

        $grupo->save();

        return redirect()->route('grupos.index')->with('success', 'Grupo actualizado correctamente');
    }

    public function delete($id)
    {
        $grupo = Grup0::find($id);

        if(!$grupo){
            return abort(404);
        }
        return view('grupos.delete', compact('grupo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $grupo = Grup0::find($id);

        if (!$grupo) {
            return abort(404);
        }

        $grupo->delete();

        return redirect()->route('grupos.index')->with('success', 'Grupo eliminado correctamente');
    }
}
