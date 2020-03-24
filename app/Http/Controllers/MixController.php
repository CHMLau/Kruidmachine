<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mix;
use App\Kruid;
use Auth;

class MixController extends Controller
{       
    public function show(){
        return Mix::all();
    }
    
    public function show_gebruikerMix(){
        if(Mix::where('gebruikersnaam','=', 'default')){
            return Mix::all();
        }
        return Mix::where('gebruikersnaam','=', Auth::user()->name)->first();
    }
    public function create(){
        return view('mix.mixPost')->with('mix',Mix::all())->with('kruid',Kruid::all());
    }
    public function store(Request $request){
        $mix = new Mix();
        $mix->naam= $request->input('naam');
        $mix->kruid1= $request->input('kruid1');
        $mix->kruid2= $request->input('kruid2');
        $mix->kruid3= $request->input('kruid3');
        $mix->omschrijving= $request->input('omschrijving');
        $mix->hoeveelheid1= $request->input('hoeveelheid1');
        $mix->hoeveelheid2= $request->input('hoeveelheid2');
        $mix->hoeveelheid3= $request->input('hoeveelheid3');
        $mix->save();
        
        return redirect('/mix');
    }   
}
