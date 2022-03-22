<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
class PelangganController extends Controller
{
    public function pelanggan(){
        $allpelanggan=pelanggan::all();
        return view('pelanggan')
        ->with('title','Pelanggan')
        ->with('all_pelanggan',$allpelanggan);
    }
}
