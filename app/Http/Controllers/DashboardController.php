<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\ProfileImage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        $profile_image = ProfileImage::with('profile')->get();

        return view('components.dashboard', compact('profiles', 'profile_image'));
    }
}
