<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
class PelangganController extends Controller
{
    public function pelanggan(){
        $allpelanggan=pelanggan::all();
        //$allpelanggan=pelanggan::paginate(1);
        return view('pelanggan')
        ->with('title','Pelanggan')
        ->with('all_pelanggan',$allpelanggan);
    }
}
