<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Kruid;

class KruidController extends Controller
{
    public function show(){
        return kruid::all();
    }
    public function create(){
        return view('kruid.kruidPost')->with('kruid',Kruid::all());
    }
    
    public function store(Request $request){
        $kruid = new Kruid();
        $kruid->kruid= $request->input('kruid');
        $kruid->save();
        return redirect('/kruid');
    }
}
