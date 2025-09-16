<?php
namespace App\Http\Controllers;

use App\Models\Program;
use Carbon\Carbon;
use Filament\Forms\Components\Card;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::with('latarBelakang') // ambil hanya section "Latar Belakang"
            ->paginate(3);

        return view('components.proyek', compact('program'));
    }

    public function indexDetail($id)
    {
        $program = Program::with('programsection')->findOrFail($id);

        return view('components.detail-proyek', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
}
