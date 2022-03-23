<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function pegawai(){
        // $allpegawai=pegawai::all();
        $allpegawai=pegawai::paginate(2);
        return view('pegawai')
        ->with('title','Pegawai')
        ->with('all_pegawai',$allpegawai);
    }
}
