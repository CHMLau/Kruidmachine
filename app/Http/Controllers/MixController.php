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
        return view('mix.mix')->with('mix',Mix::all());
    }
    
    public function show_gebruikerMix(){
        if((Auth::user()) == NULL){
            return view('mix.mix')->with('mix',Mix::all());
        }
        return view('mix.mix2')->with('mix', Mix::where('gebruikersnaam','=', Auth::user()->name)->get());
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
        if(Auth::user() == null){
            $mix->gebruikersnaam = 'default';
        }else{
            $mix->gebruikersnaam = Auth::user()->name;
        }
        try{
            $mix->save();
            return redirect('/mix');
        }
        catch(Exception $e){
            return redirect('/mix');
        }
    }   

    public function edit($mix){
        $mixData = Mix::where('naam','=',$mix)->first();
        // $mixData = Mix::where('naam','!=', NULL )->first();
        return view('mix.mixEdit')->with('mix',$mixData)->with('kruid',Kruid::all());
    }
    
    public function update(Request $request, $mix){
        $mix = Mix::find($mix);
        $mix->naam= $request->input('naam');
        $mix->kruid1= $request->input('kruid1');
        $mix->kruid2= $request->input('kruid2');
        $mix->kruid3= $request->input('kruid3');
        $mix->hoeveelheid1= $request->input('hoeveelheid1');
        $mix->hoeveelheid2= $request->input('hoeveelheid2');
        $mix->hoeveelheid3= $request->input('hoeveelheid3');
        $mix->omschrijving= $request->input('omschrijving');
        if(Auth::user() == null){
            $mix->gebruikersnaam = 'default';
        }else{
            $mix->gebruikersnaam = Auth::user()->name;
        }

        try{
            $mix->save();
            return redirect('/mix');
        }
        catch(Exception $e){
            return redirect('/mix');
        }

        public function destroy($mix){
            $mix = Kruid::find($mix);
            try{
                $kruid->delete();
                return redirect('/kruid');
            }
            catch(Exception $e){
                return redirect('/kruid');
            }
        }
    }




