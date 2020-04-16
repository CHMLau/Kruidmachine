<?php

namespace App\Http\Controllers;
use DB;
use App\Compartiment;
use App\Kruid;
use Illuminate\Http\Request;
use Auth;

class CompartimentController extends Controller
{
  public function show() {
    if((Auth::user()) == NULL){
      return view('welcome')->with('kruid', Kruid::get('kruid'))
      ->with('comp_1', Compartiment::all()->where('comp_nummer', 1))
      ->with('comp_2', Compartiment::all()->where('comp_nummer', 2))
      ->with('comp_3', Compartiment::all()->where('comp_nummer', 3));
      #dit fixen
    }
    return view('welcome2')->with('kruid', Kruid::get('kruid'))
    ->with('comp_1', Compartiment::all()->where('comp_nummer', 1))
    ->with('comp_2', Compartiment::all()->where('comp_nummer', 2))
    ->with('comp_3', Compartiment::all()->where('comp_nummer', 3));
    #dit fixen
  }

  public function comp1($compartiment) {
      $compData = Compartiment::where('comp_nummer','=',$compartiment)->first();
      return view('kruid.kruid_update_comp1')
      ->with('kruid', Kruid::all())
      ->with('compartiment', $compData);
  }

  public function update_comp1(Request $request, $compartiment) {
    $compartiment = Compartiment::where('comp_nummer', $compartiment)->first();
    
    $compartiment->comp_kruid = $request->input('kruid');

    try{
      //echo($compartiment);
      $compartiment->save();
      return redirect('/');
    }
    catch(Exception $e){
        return redirect('/home');
    }
  }
    // public function show() {
    //   return view('kruid.kruidComp')->with('kruid', Kruid::all())
    //   ->with('comp_1', Compartiment::all()->where('comp_nummer', 1))
    //   ->with('comp_2', Compartiment::all()->where('comp_nummer', 2))
    //   ->with('comp_3', Compartiment::all()->where('comp_nummer', 3));
    //   #dit fixen

    // }
}
