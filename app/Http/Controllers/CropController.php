<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cropModel;

class CropController extends Controller
{
  public function cropIndex(){

    $allcrop=cropModel::all();
    return view('Admin.CropIndexPage',compact('allcrop'));
  }

  public function addCropFrom(){
    return view('Admin.AddCropForm');
  }

  public function store_crop(Request $request){
    // dd('hii');

    date_default_timezone_set('Asia/Kolkata');

    $crops = new cropModel;
    // dd($request);

    
    if(isset($request->CropName)){
        $crops->crop_name = $request->CropName;
    }
   

  
  

    if ($request->hasFile('CropImage')) {
        $image = $request->file('CropImage');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/CropImage'), $imageName);
        $crops->image = $imageName;
    }
    

    $crops->save();
    return redirect()->back()->with('success','Crop added successfully!');

  }

}
