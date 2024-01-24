<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandModel;

class LandController extends Controller
{
    public function landIndex(){
        $all_land=LandModel::all();
        return view('Admin.LandIndexPage',compact('all_land'));
    }

    public function addLandForm(){
        return view('Admin.AddLandForm');
      }
    
      public function store_land(Request $request){
        // dd('hii');
    
        date_default_timezone_set('Asia/Kolkata');
    
        $lands = new LandModel;
        // dd($request);
    
        
        if(isset($request->acresfrom)){
            $lands->frm_lnd = $request->acresfrom;
        }

        if(isset($request->acresto)){
            $lands->to_lnd = $request->acresto;
        }
       
        $lands->save();
        return redirect()->back()->with('success','Land added successfully!');
    
      }
    
}
