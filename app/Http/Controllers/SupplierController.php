<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
class SupplierController extends Controller
{
    public function supplier(){
        $allsupplier=supplier::all();
        return view('supplier')
        ->with('title','Supplier')
        ->with('all_supplier',$allsupplier);
    }
}
