<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceModel;
use App\Models\cropModel;
use App\Models\LandModel;

class PriceController extends Controller
{
    public function PriceIndex(){
     
        $all_price = PriceModel::join('crops', 'price.crop', '=', 'crops.id')
        ->join('lands', 'price.land', '=', 'lands.id')
         ->select('price.*', 'crops.crop_name', 'lands.frm_lnd','lands.to_lnd') 
         ->get();
        // dd($all_price);

        return view('Admin.priceIndexPage',compact('all_price'));
    }

    public function addPriceForm(){
        $all_crop=cropModel::all();
        $all_land=LandModel::all();
        return view('Admin.AddPriceForm',compact('all_crop','all_land'));
    }
    public function store_price(Request $request){
        // dd('hii');
    
        date_default_timezone_set('Asia/Kolkata');
    
        $price = new PriceModel;
        // dd($request);
    
        
        if(isset($request->cropsNm)){
            $price->crop = $request->cropsNm;
        }

        if(isset($request->landNm)){
            $price->land = $request->landNm;
        }
        
        if(isset($request->workingDay)){
            $price->working_day = $request->workingDay;
        }
        
        if(isset($request->price)){
            $price->price = $request->price;
        }
       
        $price->save();
        return redirect()->back()->with('success','Price added successfully!');
    
      }
    
}
