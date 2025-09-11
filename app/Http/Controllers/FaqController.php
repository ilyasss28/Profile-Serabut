<?php
namespace App\Http\Controllers;

use App\Models\KategoriFAQ;

class FaqController extends Controller
{
    public function index()
    {
        $categories = KategoriFAQ::with(['faqs' => function ($q) {
            $q->where('is_active', 1);
        }])->where('is_active', 1)->get();

        return view('components.detail-faq', compact('categories'));
    }
}
