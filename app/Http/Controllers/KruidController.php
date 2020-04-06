<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Kruid;
use Auth;

class KruidController extends Controller
{
    public function show(){
        if((Auth::user()) == NULL){
            return view('kruid.index')->with('kruid', Kruid::all());
        }
        return view('kruid.index2')->with('kruid', Kruid::all());
    }
    public function show_comp(){
        return view('kruid.kruidComp');
    }

    public function create(){
        return view('kruid.kruidPost');
    }
    
        public function store(Request $request){
            if ($request->file('image') == null) {
                $file = "";
            }else{
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = $request->input('kruid').'.'.$extension;
                $path = public_path().'/img';
                $upload = $file->move($path,$fileName);
            }

            $kruid = new Kruid();
            $kruid->kruid= $request->input('kruid');
            $kruid->img_path = $fileName;
            

                // $extension = $file->getClientOriginalExtension(); // you can also use file name
                // $fileName = $kruid->kruid= $request->input('kruid').'.png';
                // $path = public_path().'/img';
                // $upload = $file->move($path,$fileName);
                // Storage::disk('public')->put($fileName, $file);
                // return $fileName;
                
            

        try{
            $kruid->save();
            return redirect('/kruid');
        }
        catch(Exception $e){
            return redirect('/kruid');
        }
    }

    public function edit($kruid){
        $kruidData = Kruid::where('kruid','=',$kruid)->first();
        return view('kruid.kruidEdit')->with('kruid',$kruidData);
    }
    
    public function update(Request $request, $kruid){
        $kruid = Kruid::find($kruid);
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
