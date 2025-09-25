<?php
namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\KategoriFAQ;
use App\Models\Komoditas;
use App\Models\Profile;
use App\Models\Program;
use App\Models\Publikasi;
use App\Models\Statistik;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        $totalSlides = 0;
        foreach ($profiles as $gambar) {
            $totalSlides += count($gambar->gambar ?? []);
        }

        $statistik = Statistik::first();

        $komoditas = Komoditas::latest()->take(4)->get();

        $publikasis = Publikasi::with('kategoriPublikasi')
            ->whereHas('kategoriPublikasi', function ($q) {
                $q->where('is_active', 1);
            })
            ->orderByDesc('tanggal_terbit')
            ->paginate(3);

        foreach ($publikasis as $publikasi) {
            $publikasi->formatted_date = Carbon::parse($publikasi->tanggal_terbit)
                ->translatedFormat('d F Y');
        }

        $mainProgram  = Program::latest()->first();
        $sidePrograms = Program::latest()->skip(1)->take(2)->get();

        $categories = KategoriFAQ::with(['faqs' => function ($q) {
            $q->where('is_active', 1);
        }])->where('is_active', 1)->get();

        $faqs = Faq::where('is_active', 1)->get();

        return view('components.dashboard', compact(
            'profiles',
            'totalSlides',
            'statistik',
            'faqs',
            'categories',
            'komoditas',
            'publikasis',
            'mainProgram',
            'sidePrograms'
        ));
    }
}
