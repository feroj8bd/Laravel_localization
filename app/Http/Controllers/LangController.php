<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    //
    public function langChange($lang){
        App::setLocale($lang);
        session()->put('new_lang', $lang);
        return redirect()->back();
    }
}
