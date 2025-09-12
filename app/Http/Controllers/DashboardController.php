<?php
namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\KategoriFAQ;
use App\Models\Komoditas;
use App\Models\Profile;
use App\Models\ProfileImage;
use App\Models\Publikasi;
use App\Models\Statistik;

class DashboardController extends Controller
{
    public function index()
    {
        $profiles      = Profile::all();
        $profile_image = ProfileImage::with('profile')->get();
        $statistik     = Statistik::first();

        $komoditas = Komoditas::latest()->take(4)->get();

        $publikasis = Publikasi::paginate(3);
        foreach ($publikasis as $publikasi) {
            $publikasi->formatted_date = \Carbon\Carbon::parse($publikasi->tanggal_terbit)->translatedFormat('d F Y');
        }

        $categories = KategoriFAQ::with(['faqs' => function ($q) {
            $q->where('is_active', 1)->orderBy('id')->limit(1);
        }])->get();

        $faqs = Faq::where('is_active', 1)->get();

        return view('components.dashboard', compact('profiles', 'profile_image', 'statistik', 'faqs', 'categories', 'komoditas', 'publikasis'));
    }
}
