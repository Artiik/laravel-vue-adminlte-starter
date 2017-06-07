<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function change(Request $request)
    {
        $locale = $request->input('locale');
        session(['locale' => $locale]);

        return $request->json(['locale' => $locale]);
    }

    public function get(Request $request)
    {
        return $request->json(['locale' => \App::getLocale()]);
    }
}
