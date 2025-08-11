<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::getMenu();
        return view('theme.matrix-admin-bootstrap5.back.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('theme.matrix-admin-bootstrap5.back.menu.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the form
        $validado = $request->validate([
            'nombre' => 'required|max:50|unique:menus,nombre',
            'url' => 'required|max:100',
            'icono' => 'nullable|max:50'
        ],[
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'nombre.unique' => 'El campo Nombre ya existe en la base de datos.',
            'url.required' => 'El campo Url es obligatorio.'
        ]);

        Menu::create($validado);
        return redirect()->route('menu.create')->with('mensaje', 'Menu guardado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function guardarOrden(Request $request)
    {
        if ($request->ajax()) {
            Menu::guardarOrden($request->menu);
            // cache()->tags('Menu')->flush(); // Clear cache after creating a new menu
            return response()->json(['respuesta' => 'ok']);
        } else {
            abort(404);
        }
    }
}
