<?php

namespace App\Http\Controllers;

use App\Models\Komoditas;
use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komoditas = Komoditas::paginate(4);

        return view ('components.komoditas', compact('komoditas'));
    }

    public function indexDetail($id)
    {
        $komoditas = Komoditas::findOrFail($id);
        return view('components.detail-komoditas', compact('komoditas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Komoditas $komoditas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komoditas $komoditas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komoditas $komoditas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komoditas $komoditas)
    {
        //
    }
}
