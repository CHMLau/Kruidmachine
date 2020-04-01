<?php

namespace App\Http\Controllers;
use DB;
use App\Compartiment;
use Illuminate\Http\Request;

class CompartimentController extends Controller
{
    public function show() {
      return view('kruid.kruidComp')
      ->with('comp_1', Compartiment::where('comp_nummer', '=', 1)->first())
      ->with('comp_2', Compartiment::where('comp_nummer', '=', 2)->first())
      ->with('comp_3', Compartiment::where('comp_nummer', '=', 3)->first());
    }
}
