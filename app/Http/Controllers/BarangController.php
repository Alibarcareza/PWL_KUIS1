<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
class BarangController extends Controller
{
    public function barang(){
        //$allbarang=barang::all();
        $allbarang=barang::paginate(3);
        return view('barang')
        ->with('title','Barang')
        ->with('all_barang',$allbarang);
    }
}
