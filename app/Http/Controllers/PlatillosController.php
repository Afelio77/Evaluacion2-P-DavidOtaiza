<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Platillos;
use Illuminate\Http\Request;

class PlatillosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $platillos = Platillos::all();
       return view('platillos.index', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::all();
        return view('platillos.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nombre' => 'required|string',
            'calorias'=> 'required|integer',
            'disponible' => 'required|boolean',
            'menu_id' => 'required|exists:menus,id'
        ]);

        Platillos::create($request->all());

        return redirect()->route('platillos.index')->with('success', 'Platillo registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Platillos $platillos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platillos $platillos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platillos $platillos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platillos $platillos)
    {
        //
    }
}
