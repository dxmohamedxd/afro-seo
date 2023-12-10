<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class changeLange extends Controller
{
  public function index(){
    return view('home');
  }
  public function changeLang(Request $request){
    App::setLocale($request->lang);
    session()->put('locale', $request->lang);
    return redirect()->back();
  }
}
