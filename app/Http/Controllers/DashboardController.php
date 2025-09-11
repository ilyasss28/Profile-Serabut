<?php
namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\KategoriFAQ;
use App\Models\Komoditas;
use App\Models\Profile;
use App\Models\ProfileImage;
use App\Models\Statistik;

class DashboardController extends Controller
{
    public function index()
    {
        $profiles      = Profile::all();
        $profile_image = ProfileImage::with('profile')->get();
        $statistik     = Statistik::first();

        $komoditas = Komoditas::all();

        $categories = KategoriFAQ::with(['faqs' => function ($q) {
            $q->where('is_active', 1)->orderBy('id')->limit(1);
        }])->get();

        $faqs = Faq::where('is_active', 1)->get();

        return view('components.dashboard', compact('profiles', 'profile_image', 'statistik', 'faqs', 'categories', 'komoditas'));
    }
}
