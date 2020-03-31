<?php

namespace App\Http\Controllers;
use DB;
use App\Compartiment;
use Illuminate\Http\Request;

class CompartimentController extends Controller
{
    public function show() {
      return view('kruid.kruidComp')->with('comp', Compartiment::all());
    }
}
