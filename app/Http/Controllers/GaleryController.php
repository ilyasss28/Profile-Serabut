<?php
namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\GaleryKategori;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = Galery::with('kategoriGalery')->get();

        $categories = GaleryKategori::all();

        return view('components.galery', compact('galeries', 'categories'));
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
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        //
    }
}
