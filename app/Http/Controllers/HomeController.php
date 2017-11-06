<?php

namespace App\Http\Controllers;

use App\Models\Image;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::latestWithUser()->paginate(config('app.pagination'));

        return view('home', compact('images'));
    }

/**
     * Show the home page.
     *
     * @param  string  $locale
     * @return \Illuminate\Http\Response
     */
    public function language(String $locale)
    {
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

        session(['locale' => $locale]);

        return back();
    }    
}
