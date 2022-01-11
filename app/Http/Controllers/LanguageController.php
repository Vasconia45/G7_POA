<?php

namespace App\Http\Controllers;

class LanguageController extends Controller

{
    /**
 * @param $lang
 *
 * @return \Illuminate\Http\RedirectResponse
 */


    public function __invoke($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}