<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ViewController extends Controller
{
    function show(){
        $data= item::all();
        return view('InvView',['items'=>$data]);
    }
        
}
