<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatesModel;
use App\Models\DistrictModel;
use App\Models\FarmerRegistrationModel;
use App\Models\DroneModel;
use Illuminate\Support\Facades\Auth;
use App\Models\cropModel;
use App\Models\LandModel;
use App\Models\PriceModel;
use App\Models\orderModel;
use App\Models\droneStatusModel;
use App\Models\complaineModel;
use DateTime;

class FarmerController extends Controller
{

    public function webIndex(){

        return view('Farmer/webIndex');

    }
    public function farmerIndex(){
        $userDist=auth()->guard('farmer')->user()->district;
        // dd($userDist);

        $alldrone=DroneModel::where('district','=',$userDist)->where('status','=','1')->get();
       //dd($alldrone);
 
        return view('Farmer/farmerIndex',compact('alldrone'));
    }
    public function farmerLogin(){
 
        return view('Auth/loginForm');
    }
    public function checkLogin(Request $request){
        $input=$request->all();
        //  dd($input['password']);
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',

        ]);
        // dd(Auth::guard());

        if(Auth::guard('farmer')->attempt(['mob' =>$input['username'],'password' => $input['password']])){
            // dd('login successful');

            return redirect('/farmer/indexpage');
        }else{
            // dd('login not');
            return redirect()->back()->with('error','password and Username are Wrong.');

        }
 
      
    }

    
    public function farmerRegisterPage($passval){
        // dd($passval);
        $all_state=StatesModel::all();
        $registration_type=$passval;
        // dd($all_state);
        return view('Auth/FarmerRegister',compact('all_state','registration_type'));
    }
    public function getDistricts($stateId)
    {
        // return $stateId;
       
        $districts = DistrictModel::where('state_id', $stateId)->get();
        return response()->json($districts);
    }
    public function Add_farmer(Request $request)
    {
        // dd('hii');
        date_default_timezone_set('Asia/Kolkata');
        $roles="3";
        // dd('hii');
        $length = 7;
        $characters = '0123456789';
        $code = '';
    
        $charactersLength = strlen($characters);
    
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = mt_rand(0, $charactersLength - 1);
            $code .= $characters[$randomIndex];
        }
        $farmer = new FarmerRegistrationModel;
        // dd($request);

        
        if(isset($request->fname)){
            $farmer->name = $request->fname;
        }
        if(isset($request->fmob)){
            $farmer->mob = $request->fmob;
        }
        if(isset($request->email)){
            $farmer->email = $request->email;
        }
        if(isset($request->stateNm)){
            $farmer->state = $request->stateNm;
        }
        if(isset($request->districtVal)){
            $farmer->district = $request->districtVal;
        }
        if(isset($request->pinCode)){
            $farmer->pin = $request->pinCode;
        }
        if(isset($request->villageNm)){
            $farmer->village = $request->villageNm;
        }
        if(isset($request->panchyat)){
            $farmer->panchayat = $request->panchyat;
        }
        if(isset($request->organisation)){
            $farmer->organisation = $request->organisation;
        }
        if(isset($request->fpassword)){
            $hashedPassword = bcrypt($request->fpassword);
            $farmer->password = $hashedPassword;
        }

        if ($request->hasFile('fimage')) {
            $image = $request->file('fimage');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/FarmerImage'), $imageName);
            $farmer->image = $imageName;
        }
        if(isset($code)){
            $farmer->user_code = $code;
        }
        

        $farmer->save();
        return redirect()->back()->with('success','Farmer added successfully!');

     
    }

    public function logout(){
        Auth::guard('farmer')->logout();
        return redirect('/');
    }




    public function FarmerBookPage($drone_id,$dronmodel){
        // dd($id);
        $all_crop=cropModel::all();
        $all_land=LandModel::all();
        return view('Farmer/farmerBookingPage',compact('all_crop','all_land','dronmodel','drone_id'));

    }

    public function getPriceData(Request $request)
    {
        $cropId = $request->input('cropId');
        $landId = $request->input('landId');
        // return $cropId ;

        // Logic to retrieve workingDay and price data from your Price model
        // $priceData = PriceModel::where('crop', $cropId)
        //     ->where('land', $landId)
        //     ->first();
            $priceData = PriceModel::join('crops', 'price.crop', '=', 'crops.id')
            ->join('lands', 'price.land', '=', 'lands.id')
    ->where('crop', $cropId)
    ->where('land', $landId)
    ->select('price.*', 'crops.crop_name','crops.image','lands.frm_lnd','lands.to_lnd') // Select columns you need from both tables
    ->first();
     return $priceData;

        if ($priceData) {
            return response()->json([
                'workingDay' => $priceData->working_day,
                'price' => $priceData->price,
                'crop_name' => $priceData->crop_name,
                'frm_lnd' => $priceData->frm_lnd,
                'to_lnd' => $priceData->to_lnd,
            ]);
        }

        return response()->json(['error' => 'Data not found'], 404);
    }

    public function create_order(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        // dd($request->bookDateto);
        $length = 8;
        $characters = '0123456789';
        $order_code = '';
    
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = mt_rand(0, $charactersLength - 1);
            $order_code .=$characters[$randomIndex];
        }
        $unic_orderId="ORD".$order_code;
       
        $newOrder = new orderModel;
        if(isset($unic_orderId)){
            $newOrder->orderId = $unic_orderId;
        }
     
        
        if(isset($request->userunicCode)){
            $newOrder->user_code = $request->userunicCode;
        }
        
        if(isset($request->cropsNm)){
            $newOrder->crop = $request->cropsNm;
        }
        if(isset($request->landNm)){
            $newOrder->landRangeId = $request->landNm;
        }
        if(isset($request->dynamicSelect)){
            $newOrder->specificLand = $request->dynamicSelect;
        }
     
        if(isset($request->workingDay)){
            $newOrder->email = $request->workingDay;
        }
        // if(isset($request->fname)){
        //     $newOrder->state = $request->fname;
        // }
        if(isset($request->streetnm)){
            $newOrder->street_address = $request->streetnm;
        }
        if(isset($request->villageNm)){
            $newOrder->villege = $request->villageNm;
        }
        if(isset($request->panchayatNm)){
            $newOrder->panchayat = $request->panchayatNm;
        }
        if(isset($request->pinCode)){
            $newOrder->pin = $request->pinCode;
        }
        if(isset($request->mobnum)){
            $newOrder->phone = $request->mobnum;
        }
        if(isset($request->emladd)){
         
            $newOrder->email = $request->emladd;
        }
        if(isset($request->drone_id)){
         
            $newOrder->drone_id = $request->drone_id;
        }
        if(isset($request->alltotal)){
         
            $newOrder->totalPay = $request->alltotal;
        }
        if(isset($request->advpayment)){
         
            $newOrder->advance = $request->advpayment;
        }
        $newOrder->save();
        $dronrStatus = new droneStatusModel;

        if(isset($request->drone_id)){
         
            $dronrStatus->droneId = $request->drone_id;
        }
        if(isset($unic_orderId)){
         
            $dronrStatus->orderId = $unic_orderId;
        }
        if(isset($request->userunicCode)){
         
            $dronrStatus->user_code = $request->userunicCode;
        }
        if(isset($request->bookDateFrom)){
         
            $dronrStatus->droneBookFrom = $request->bookDateFrom;
        }
        if(isset($request->bookDateto)){
         
            $dronrStatus->dronrBookTo = $request->bookDateto;
        }
        $dronrStatus->save();


        return redirect()->back()->with('success','Order added successfully!');

    }

    public function myProfile(){
        $userCode=auth()->guard('farmer')->user()->user_code;
    
         $alluserdetails=FarmerRegistrationModel::join('states','farmers.state','=','states.id')
         ->join('districts','farmers.district','=','districts.id')
         ->where('user_code', $userCode)
         ->select('farmers.*','states.state_name','districts.district_name')
         ->first();
    
        return view('Farmer/farmerProfilePage',compact('alluserdetails'));
    }


public function getDroneBookDate(Request $request) {
    $drone_id = $request->input('drone_id');
    $bookings = droneStatusModel::where('droneId', $drone_id)
        ->where('status', '1')
        ->get(['droneBookFrom', 'dronrBookTo']);

  
    $bookedDates = [];
    $output_format = 'd-m-Y'; 

    foreach ($bookings as $booking) {
        $startDate = DateTime::createFromFormat('d-m-Y', $booking->droneBookFrom);
        $endDate = DateTime::createFromFormat('d-m-Y', $booking->dronrBookTo);
        
        $current = clone $startDate;

        while ($current <= $endDate) {
            $bookedDates[] = $current->format($output_format);
            $current->modify('+1 day');
        }
    }

    return response()->json($bookedDates);

    
}

public function myOrders(){
    $userCode=auth()->guard('farmer')->user()->user_code;
    
    $all_order=orderModel::where('user_code','=',$userCode)->get();
    return view('Farmer/farmerOrdersPage',compact('all_order'));
}

public function orderDetails($id){

    $orders=orderModel::join('farmers','orders.user_code','=','farmers.user_code')->
                      join('crops','orders.crop','=','crops.id')->join('lands','orders.landRangeId','=','lands.id')->join('dronestatus','orders.orderId','=','dronestatus.orderId')->where('orders.orderId','=',$id)->
                      select('orders.*','farmers.name','crops.crop_name','lands.frm_lnd','lands.to_lnd','dronestatus.droneBookFrom','dronestatus.dronrBookTo')->get();
                        // dd($orders);

   
   return view('Farmer/farmerOrderDetailsPage',compact('orders'));

}
public function userNeedHelp($id){
    $order_id=$id;
    
    return view('Farmer/useHelpPage',compact('order_id'));
}

public function createComplain(Request $request){
    $userCode=auth()->guard('farmer')->user()->user_code;

    $compaine = new complaineModel;
        // dd($request);

        if(isset($userCode)){
            $compaine->user_code = $userCode;
        }
        if(isset($request->order_id)){
            $compaine->order_id = $request->order_id;
        }
        if(isset($request->full_name)){
            $compaine->name = $request->full_name;
        }
        if(isset($request->email)){
            $compaine->email = $request->email;
        }
        if(isset($request->mobile)){
            $compaine->mob = $request->mobile;
        }
        if(isset($request->request_type)){
            $compaine->type = $request->request_type;
        }
        if(isset($request->message)){
            $compaine->msg = $request->message;
        }
       
       
        

        $compaine->save();
        return redirect()->back()->with('success','Complaine added successfully!');

}

public function orderCancel(Request $request){
    $order = orderModel::where('orderId', $request->orderInput)->first();

    // dd($request->orderInput);

    if ($order) {
        if(isset($request->reason)){
            $order->cancel_reason = $request->reason;
        }
        if(isset($request->message)){
            $order->cancel_msg = $request->message;
        }
         $order->user_cancel_status = "1";

        $order->save();
        return redirect()->back()->with('success', 'Order has been canceled successfully');
    } else {
        return redirect()->back()->with('error', 'Order not found');
    }
}






  
 

   
   
}
