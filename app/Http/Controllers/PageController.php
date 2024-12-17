<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function home_local($locale)
    {
        if (!in_array($locale, ['en', 'id'])) {
            abort(404); // Return a 404 error for invalid locales
        }

        // Dynamically set the application's locale
        app()->setLocale($locale);

        // Return the home view
        return view('home', ['locale' => $locale]);
    }

    // About Page
    public function about_local($locale)
    {
        // Validate the locale
        if (!in_array($locale, ['en', 'id'])) {
            abort(404); // Return 404 for unsupported locales
        }

        // Set the application's locale dynamically
        app()->setLocale($locale);

        // Return the about view
        return view('about');
    }



}
