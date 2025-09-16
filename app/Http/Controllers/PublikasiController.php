<?php
namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publikasis = Publikasi::with('kategori')
        ->where('is_active', 1)
        ->paginate(3);
        
        foreach ($publikasis as $publikasi) {
            $publikasi->formatted_date = \Carbon\Carbon::parse($publikasi->tanggal_terbit)->translatedFormat('d F Y');
        }
        return view('components.publikasi', compact('publikasis'));
    }

    public function indexDetail($id)
    {
        $publikasi                 = Publikasi::findOrFail($id);
        $publikasi->formatted_date = \Carbon\Carbon::parse($publikasi->tanggal_terbit)->translatedFormat('d F Y');
        return view('components.detail-publikasi', compact('publikasi'));
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
    public function show(Publikasi $publikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publikasi $publikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publikasi $publikasi)
    {
        //
    }
}
