<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Kruid;

class KruidController extends Controller
{
    public function show(){
        return view('kruid.index')->with('kruid',Kruid::all());
    }
    public function show_comp(){
        return view('kruid.kruidComp');
    }

    public function create(){
        return view('kruid.kruidPost');
    }
    
    public function store(Request $request){
        $kruid = new Kruid();
        $kruid->kruid= $request->input('kruid');
        $kruid->save();
        return redirect('/kruid');
        $kruid->kruid= $request->input('kruid');

        try{
            $kruid->save();
            return redirect('/kruid');
        }
        catch(Exception $e){
            return redirect('/kruid');
        }
    }

    public function destroy($kruid){
        $kruid = Kruid::find($kruid);
        try{
            $kruid->delete();
            return redirect('/kruid');
        }
        catch(Exception $e){
            return redirect('/kruid');
        }
    }
    
}
