<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mix;
use App\Kruid;
use App\Compartiment;
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

        return view('mix.mix2')->with('mix', Mix::where('gebruikersnaam','=', Auth::user()->name)->get())
        ->with('gebruiker', auth()->user()->get('name'));
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
        catch(\Illuminate\Database\QueryException $e){
            return back()->withError('Make sure you have made a name for the mix. And have atleast 1 spice with the amount.');
        }
    }   

    public function edit($mix){
        $mixData = Mix::where('naam','=',$mix)->first();
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
        catch(\Illuminate\Database\QueryException $e){
            return back()->withError('Make sure you have made a name for the mix. And have atleast 1 spice with the amount.');
        }

    }

    public function destroy($mix){
        $mix = Mix::find($mix);
        try{
            $mix->delete();
            return redirect('/mix');
        }
        catch(Exception $e){
            return redirect('/kruid');
        }
    }

    // public function uitvoeren($mix) {
    //     try{
    //       Mix::where('naam', $mix)->update([
    //         'maken' => 'ja'
    //       ]);
    //       return redirect('/mix');
    //     }
    //     catch(Exception $e){
    //         return redirect('/mix');
    //     }
    // }

    
    public function uitvoeren($mix) {

        $kruid1 = DB::table('mix')->where('naam', '=', $mix)->value('kruid1');
        $kruid2 = DB::table('mix')->where('naam', '=', $mix)->value('kruid2');
        $kruid3 = DB::table('mix')->where('naam', '=', $mix)->value('kruid3');

        $complist = DB::table('compartiment')->pluck('comp_kruid')->toArray();

        if (in_array($kruid1,$complist) && in_array($kruid2,$complist) && in_array($kruid3,$complist)) {
            $stringRoute = "/mix/update/".$mix;

            try {
            Mix::where('naam', $mix)->update([
                'maken' => 'ja'
            ]);
            return redirect('/mix');
            }
            catch(Exception $e) {
                return back()->withError('There is one or more spices in this mix that is not in a compartiment. Choose a different mix or update the compartiments.');
            }
        }
        else {
            return back()->withError('There is one or more spices in this mix that is not in a compartiment. Choose a different mix or update the compartiments.');
        }
    }

    

    public function checkgoed($mix) {
        return view('mix.mixUitvoeren')->with(Mix::all());
    }

    // public function uitvoeren($mix) {
    //   $mix = Mix::where('naam', '=',$mix)->first();

    //   if ($mix->maken == 'nee') {
    //     $mix->maken = 'ja';
    //   }

    //   else {
    //     $mix->maken = 'nee';
    //   }
    //   $mix->save();
    //   return redirect('/mix');
    // }

    public function check($mix) {
        // if ($mix->kruid1 == Compartiment::get('comp_kruid')) {
        //     return redirect('/mix/update/' + $mix);
        // }
        $kruid1 = DB::table('mix')->where('naam', '=', $mix)->value('kruid1');
        $kruid2 = DB::table('mix')->where('naam', '=', $mix)->value('kruid2');
        $kruid3 = DB::table('mix')->where('naam', '=', $mix)->value('kruid3');
        /* $kruid1 = Mix::get('kruid1');
        
        $kruid2 = Mix::get('kruid2');
        $kruid3 = Mix::get('kruid3'); */
        $complist = DB::table('compartiment')->pluck('comp_kruid')->toArray();
        if (in_array($kruid1,$complist) && in_array($kruid2,$complist) && in_array($kruid3,$complist)){
            $stringRoute = "/mix/update/".$mix;
            try {
                return redirect('');
            } catch (\Throwable $th) {
                return redirect('/error');
            }
            
        }
        else {
            return redirect('/error');
        }
    }   

}
