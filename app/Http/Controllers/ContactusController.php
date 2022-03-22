<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactUs(){
        return view('contactUs')
        ->with('title','Hubungi Kami');
    }
}
