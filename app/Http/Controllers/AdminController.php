<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StatesModel;
use App\Models\DistrictModel;
use App\Models\AdminModel;
use App\Models\FarmerRegistrationModel;
use App\Models\orderModel;
use App\Models\complaineModel;
use App\Models\DroneModel;
use App\Models\AssignOrderModel;
use App\Models\PilotWorkFlowModel;
use App\Models\AssignDroneModel;
class AdminController extends Controller
{
    public function AdminLoginPage(){

      return view('Auth/AdminloginForm');
    }
    public function AdminIndex(){

        return view('Admin/AdminIndexPage');
      }

    public function checkLogin(Request $request){
 
         $input=$request->all();
        // dd($input);
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',

        ]

        );
        if(Auth::guard('Admin')->attempt(['mob' =>$input['username'],'password' => $input['password']])){
            // dd('login successful');

            return redirect('/Admin/indexpage');
        }else{
            // dd('login not');
            return redirect()->back()->with('error','password and Username are Wrong.');

        }
      }

      public function logout(){
        Auth::guard('Admin')->logout();
        return redirect('/admin');
    }


    public function AdminRegisterPage(){
      $all_state=StatesModel::all();
      return view('Admin.AdminRegisterPage',compact('all_state'));
    }

    public function Add_admin(Request $request){

      date_default_timezone_set('Asia/Kolkata');
      $roles="3";
      // dd('hii');
      $admin = new AdminModel;
      // dd($request);

      
      if(isset($request->adname)){
          $admin->name = $request->adname;
      }
      if(isset($request->admob)){
          $admin->mob = $request->admob;
      }
      if(isset($request->ademail)){
          $admin->email = $request->ademail;
      }
      if(isset($request->adstateNm)){
          $admin->state = $request->adstateNm;
      }
      if(isset($request->addistrictVal)){
          $admin->district = $request->addistrictVal;
      }
      if(isset($request->adpinCode)){
          $admin->pin = $request->adpinCode;
      }
  
    
      if(isset($request->adpassword)){
          $hashedPassword = bcrypt($request->adpassword);
          $admin->password = $hashedPassword;
      }

      if ($request->hasFile('adimage')) {
          $image = $request->file('adimage');
          $imageName = time() . '_' . $image->getClientOriginalName();
          $image->move(public_path('images/AdminImage'), $imageName);
          $admin->image = $imageName;
      }
      

      $admin->save();
      return redirect()->back()->with('success','Admin added successfully!');

    }

    public function adminUserIndex(){
      $allAdmin=AdminModel::where('role','2')->get();
      //  dd($allAdmin);
      return view('Admin.adminUsersPage',compact('allAdmin'));
    }
    public function farmerUserIndex(){
      $allfarmer=FarmerRegistrationModel::all();
      // dd($allfarmer);
      
      return view('Admin.farmerUsersPage',compact('allfarmer'));
    }


    public function FarmerUserShow($id)
    {
       
        $showFarmer = FarmerRegistrationModel::join('states', 'farmers.state', '=', 'states.id')
                                ->join('districts', 'farmers.district', '=', 'districts.id')
                                 ->select('farmers.*', 'states.state_name', 'districts.district_name') 
                                 ->get();
    
                          
     
        return view('Admin.farmerViewPage',compact('showFarmer'));
       
    }

    public function FarmerUseredit(){

      $editFarmer = FarmerRegistrationModel::join('states', 'farmers.state', '=', 'states.id')
      ->join('districts', 'farmers.district', '=', 'districts.id')
       ->select('farmers.*', 'states.state_name', 'districts.district_name') 
       ->get();
    
        $allState=StatesModel::all();
        $allDistrict=DistrictModel::all();
    
    
    
    return view('Admin.farmerEditPage',compact('editFarmer','allState','allDistrict'));
    
    
    
    }

    public function farmerUserDelete($id){

      $farmer = FarmerRegistrationModel::find($id);
    
      
      if ($farmer) {
          $farmer->delete();
          return redirect()->back()->with('success', 'Farmer data deleted successfully!');
      }
    
    
      return redirect()->back()->with('error', 'Farmer data not found!');
    
    }

    public function update_farmer(Request $request){

      $farmerId = $request->input('farmer_id'); 
      // dd($adminId);
    
        $admin = FarmerRegistrationModel::find($farmerId);
      
    
        
        $admin->name = $request->input('updFarname');
        $admin->mob = $request->input('updFarMob');
        $admin->email = $request->input('updFarEmail');
        $admin->state = $request->input('updFarstateNm');
        $admin->district = $request->input('updFarDistNm');
        $admin->pin = $request->input('updFarPin');
    
      
        $admin->save();
    
      
        return redirect()->back()->with('success', 'Admin data updated successfully!');
    
    }






    public function adminUserShow($id)
{
   
    $showAdmin = AdminModel::join('states', 'users.state', '=', 'states.id')
                            ->join('districts', 'users.district', '=', 'districts.id')
                             ->select('users.*', 'states.state_name', 'districts.district_name') 
                             ->get();

                              //dd($showAdmin[0]->name);
 
    return view('Admin.adminViewPage',compact('showAdmin'));
   
}

public function adminUseredit(){

  $editAdmin = AdminModel::join('states', 'users.state', '=', 'states.id')
  ->join('districts', 'users.district', '=', 'districts.id')
   ->select('users.*', 'states.state_name', 'districts.district_name') 
   ->get();

    //dd($editAdmin[0]);
    $allState=StatesModel::all();
    $allDistrict=DistrictModel::all();
    // dd($allDistrict);


return view('Admin.adminEditPage',compact('editAdmin','allState','allDistrict'));



}

public function update_admin(Request $request){

  $adminId = $request->input('admin_id'); 
  // dd($adminId);

    $admin = AdminModel::find($adminId);
  

    
    $admin->name = $request->input('updAdname');
    $admin->mob = $request->input('updAdMob');
    $admin->email = $request->input('updAdEmail');
    $admin->state = $request->input('updAdstateNm');
    $admin->district = $request->input('updAdDistNm');
    $admin->pin = $request->input('updAdPin');

  
    $admin->save();

  
    return redirect()->back()->with('success', 'Admin data updated successfully!');

}

public function adminUserDelete($id){

  $admin = AdminModel::find($id);

  
  if ($admin) {
      $admin->delete();
      return redirect()->back()->with('success', 'Admin data deleted successfully!');
  }


  return redirect()->back()->with('error', 'Admin data not found!');

}
public function OrderIndex(){
  $all_order = orderModel::join('farmers', 'orders.user_code', '=', 'farmers.user_code')

   ->select('orders.created_at','orders.user_code','orders.phone','farmers.name') 
   ->get();
  //  dd($all_order );

  return view('Admin.ordersIndexPage',compact('all_order'));
}

public function reviewTickets(){
  $all_feedback=complaineModel::where('type','=','1')->get();
  // dd($all_feedback);

  return view('Admin/reviewTicketPage',compact('all_feedback'));

}
public function refundTickets(){
  $all_refund=complaineModel::where('type','=','4')->get();
  // dd($all_refund);
  return view('Admin/refundTicketPage',compact('all_refund'));
  
}
public function complainTickets(){
  $all_complaine=complaineModel::where('type','=','2')->get();

  return view('Admin/complaineTicketPage',compact('all_complaine'));
  
}
public function enquiryTickets(){
  $all_enquery=complaineModel::where('type','=','3')->get();

  return view('Admin/enquryTicketPage',compact('all_enquery'));
  
}
public function otherTickets(){
  $all_otherticket=complaineModel::where('type','=','5')->get();

  return view('Admin/otherTicketPage',compact('all_otherticket'));
  
}


public function dashboardIndexPage(){
  $totalDronesCount = DroneModel::count();
 $totalCancelOrderCount = orderModel::where('user_cancel_status', '1')->count();
  // dd($totalDrones);

  return view('Admin/dashboardIndexPage',compact('totalDronesCount','totalCancelOrderCount'));
}

public function orderCancelPage(){
  $totalCancelOrder = orderModel::join('farmers','orders.user_code','farmers.user_code')->where('user_cancel_status', '1')->select('orders.*','farmers.name')->get();
  // dd($totalCancelOrder);

    return view('Admin/orderCancelPage',compact('totalCancelOrder'));

}

public function createUserIndex(){

  $allState=StatesModel::all();


  return view('Admin.createUserIndexPage',compact('allState'));
}

public function store_createUser(Request $request){
  date_default_timezone_set('Asia/Kolkata');
 
  $create_user = new AdminModel;
  // dd($request);

  
  if(isset($request->cuname)){
      $create_user->name = $request->cuname;
  }
  if(isset($request->cumob)){
      $create_user->mob = $request->cumob;
  }
  if(isset($request->cuemail)){
    $create_user->email = $request->cuemail;
}
  if(isset($request->curole)){
      $create_user->role = $request->curole;
  }

  if(isset($request->stateNm)){
    $create_user->state = $request->stateNm;
}
if(isset($request->districtNm)){
  $create_user->district = $request->districtNm;
}
if(isset($request->pincode)){
  $create_user->pin = $request->pincode;
}
  


  if(isset($request->cupassword)){
      $hashedPassword = bcrypt($request->cupassword);
      $create_user->password = $hashedPassword;
  }

  if ($request->hasFile('cuimg')) {
      $image = $request->file('cuimg');
      $imageName = time() . '_' . $image->getClientOriginalName();
      $image->move(public_path('images/AdminImage'), $imageName);
      $create_user->image = $imageName;
  }
  

  $create_user->save();
  return redirect()->back()->with('success','User Create successfully!');
}


public function assignOrderIndex(){

  $assign_order = AssignOrderModel::select('assign_order.*', 'pilots.name as pilot_name', 'copilots.name as copilot_name')
    ->join('users as pilots', 'assign_order.pilot_id', '=', 'pilots.id')
    ->join('users as copilots', 'assign_order.copilot_id', '=', 'copilots.id')
    ->get();
    // dd($assign_order);







  return view('Admin.assignOrderIndex',compact('assign_order'));
}

public function addAssignOrder(){

  $all_order=orderModel::where('assigned','=','0')->get();
  $all_pilot=AdminModel::where('role','=','5')->get();
  $coPilot=AdminModel::where('role','=','6')->get();

 

  return view('Admin.addAssignOrder',compact('all_order','all_pilot','coPilot'));
}

public function store_assignOrder(Request $request){

  date_default_timezone_set('Asia/Kolkata');
  $orddate=$request->odrdate;
  $ordId=$request->assignOrderID;
  $pilot=$request->assignPilot;
  $Copilot=$request->assignCopilot;

 
  $oderassign = new AssignOrderModel;
  // dd($request);

  
  if(isset($ordId)){
      $oderassign->order_id = $ordId;
  }
  if(isset($pilot)){
      $oderassign->pilot_id = $pilot;
  }
  if(isset($Copilot)){
    $oderassign->copilot_id = $Copilot;
}
  if(isset($orddate)){
      $oderassign->date = date('d-m-Y',strtotime($orddate));
  }
$oderassign->save();

orderModel::where('orderId', '=', $ordId)->update(['assigned' => 1]);


  return redirect()->back()->with('success','Order Assign successfully!');



}

public function pilotAssignorder(){

  // dd(auth()->guard('Admin')->user()->id);
  $userId=auth()->guard('Admin')->user()->id;

  if(auth()->guard('Admin')->user()->role == '5' || auth()->guard('Admin')->user()->role == '6'){
    $assignOrder=AssignOrderModel::select('assign_order.*', 'pilots.name as pilot_name', 'copilots.name as copilot_name')
    ->join('users as pilots', 'assign_order.pilot_id', '=', 'pilots.id')
    ->join('users as copilots', 'assign_order.copilot_id', '=', 'copilots.id')->where('pilot_id','=',$userId)->where('status','=','0')
    ->get();

  }else{
    $assignOrder=AssignOrderModel::select('assign_order.*', 'pilots.name as pilot_name', 'copilots.name as copilot_name')
    ->join('users as pilots', 'assign_order.pilot_id', '=', 'pilots.id')
    ->join('users as copilots', 'assign_order.copilot_id', '=', 'copilots.id')->where('status','=','0')->get();
  

  }
  // dd($assignOrder);
 
  return view('Admin.pilotAssignorderPage',compact('assignOrder'));
}

public function pilotWorkUpdate(){
  // dd($_GET['id']);
  $orderId=$_GET['id'];
  $today=date('d-m-Y');
  $createWokCheck = PilotWorkFlowModel::where('orderId', $orderId)
  ->where('date', $today)
  ->select('date', 'orderId', 'pilotStartLocation', 'droneLocation', 'startTime')
  ->get();
  //dd($createWokCheck);

  $createWokCheckthd = PilotWorkFlowModel::where('orderId', $orderId)
  ->where('date', $today)
  ->select('sparingTime','orderId','droneLocation')
  ->get();
  // dd($createWokCheckthd);

  return view('Admin.pilotWorkUpdatePage',compact('orderId','createWokCheck','createWokCheckthd'));

}


public function pilotStart(Request $request){

  date_default_timezone_set('Asia/Kolkata');


 
  $pilotWorkStart = new PilotWorkFlowModel;
  // dd($request);

  $today=date('d-m-Y');
  // dd($today);
  if(isset($today)){
    $pilotWorkStart->date = $today;
}
  
  if(isset($request->ordId)){
      $pilotWorkStart->orderId = $request->ordId;
  }
  if(isset($request->droneLocation)){
    $pilotWorkStart->droneLocation = $request->droneLocation;
}
if(isset($request->starttime)){
  $pilotWorkStart->startTime = $request->starttime;
}
if(isset($request->pilotStart_location)){
  $pilotWorkStart->pilotStartLocation	 = $request->pilotStart_location;
}
$pilotWorkStart->save();

// orderModel::where('orderId', '=', $ordId)->update(['assigned' => 1]);


  return redirect()->back()->with('success','Order Assign successfully!');


}

public function PilotSecondWorkFlow($id){
  // dd($id);

  $orderId=$id;
  $today=date('d-m-Y');
  $createWokCheckSnd = PilotWorkFlowModel::where('orderId', $orderId)
  ->where('date', $today)
  ->select('reachFarmerLocation', 'distance','orderId')
  ->get();
  // dd($createWokCheckSnd);

  return view('Admin.PilotSecondWorkFlowPage',compact('orderId','createWokCheckSnd'));

}

public function storePilotSecondFlow(Request $request){

  date_default_timezone_set('Asia/Kolkata');

  $today=date('d-m-Y');
 
  $pilotsecondFlow =PilotWorkFlowModel::where('orderId', $request->secondOrderid)
  ->where('date', $today)->get();
  //dd($pilotsecondFlow);

  foreach ($pilotsecondFlow as $pilotsecondFlow) {
    if (isset($request->farmerLocation)) {
        $pilotsecondFlow->reachFarmerLocation = $request->farmerLocation;
    }
    if (isset($request->walkDistance)) {
        $pilotsecondFlow->distance = $request->walkDistance;
    }

    $pilotsecondFlow->save();
    return redirect()->back()->with('success','Order Assign successfully!');
}

// orderModel::where('orderId', '=', $ordId)->update(['assigned' => 1]);


  


}

public function PilotThirdWorkFlow($id){

  $orderId=$id;
  $today=date('d-m-Y');
  $createWokCheckthd = PilotWorkFlowModel::where('orderId', $orderId)
  ->where('date', $today)
  ->select('sparingTime','orderId')
  ->get();

  return view('Admin.PilotThirdWorkFlowPage',compact('orderId','createWokCheckthd'));

}

public function PilotForthWorkFlow($id){

  $orderId=$id;
  $today=date('d-m-Y');
  $createWokCheckfrth = PilotWorkFlowModel::where('orderId', $orderId)
  ->where('date', $today)
  ->select('completeTime','AcearCompleted','day','restOfWork','orderId')
  ->get();
  // dd($orderId);

  return view('Admin.PilotForthWorkFlowPage',compact('orderId','createWokCheckfrth'));

}

public function storePilotThirdFlow(Request $request){

  date_default_timezone_set('Asia/Kolkata');

  $today=date('d-m-Y');
 
  $pilotsThirdFlow =PilotWorkFlowModel::where('orderId', $request->ThirdOderId)
  ->where('date', $today)->get();
  //dd($pilotsecondFlow);

  foreach ($pilotsThirdFlow as $pilotFlow) {
    if (isset($request->sparingTime)) {
        $pilotFlow->sparingTime = $request->sparingTime;
    }

    $pilotFlow->save();
    return redirect()->back()->with('success','Order Assign successfully!');
}



}


public function storePilotForthFlow(Request $request){

  date_default_timezone_set('Asia/Kolkata');

  $today=date('d-m-Y');
 
  $pilotsForthFlow =PilotWorkFlowModel::where('orderId', $request->forthOrderID)
  ->where('date', $today)->get();
  //dd($pilotsecondFlow);

  foreach ($pilotsForthFlow as $pilotFlowforth) {
    if (isset($request->completedTime)) {
        $pilotFlowforth->completeTime = $request->completedTime;
    }
    if (isset($request->noOfWorkingDay)) {
      $pilotFlowforth->day = $request->noOfWorkingDay;
  }
  if (isset($request->acearCompleted)) {
    $pilotFlowforth->AcearCompleted = $request->acearCompleted;
}
if (isset($request->workStatus)) {
  $pilotFlowforth->restOfWork = $request->workStatus;

  // If workStatus is "None" (value 1), update AssignOrderModel status to 1
  if ($request->workStatus == 1) {
      AssignOrderModel::where('order_id', $request->forthOrderID)
                      ->update(['status' => 1]);
  }
}

    $pilotFlowforth->save();
    return redirect()->back()->with('success','Order Assign successfully!');
}



}

public function storefromFarmerLocation(Request $request){
  // dd('hii');

  date_default_timezone_set('Asia/Kolkata');

  $today=date('d-m-Y');
 
  $pilotsfarmerlocFlow = new PilotWorkFlowModel ;
 
  // dd($pilotsfarmerlocFlow);


    if (isset($request->sparingTime)) {
        $pilotsfarmerlocFlow->sparingTime = $request->sparingTime;
    }
    if (isset($request->farmersideOderId)) {
      $pilotsfarmerlocFlow->orderId = $request->farmersideOderId;
  }
  if (isset($request->dronelocationVal)) {
    $pilotsfarmerlocFlow->droneLocation = $request->dronelocationVal;
}
  if (isset($today)) {
    $pilotsfarmerlocFlow->date = $today;
}

    $pilotsfarmerlocFlow->save();
    return redirect()->back()->with('success','Order Assign successfully!');

}

public function pilotCompletedOrder(){

  $userRole=auth()->guard('Admin')->user()->role;
  $userId=auth()->guard('Admin')->user()->id;
  //  dd($userId);

  if($userRole == '5'){
    // $allCompletedOrder=AssignOrderModel::where('pilot_id','=',$userId)->get();
    $allCompletedOrder= AssignOrderModel::select('assign_order.*', 'pilots.name as pilot_name', 'copilots.name as copilot_name')
    ->join('users as pilots', 'assign_order.pilot_id', '=', 'pilots.id')
    ->join('users as copilots', 'assign_order.copilot_id', '=', 'copilots.id')
    ->where('status','=','1')->where('pilot_id','=',$userId)->get();
    // dd($allCompletedOrder);

  }else if($userRole == '6'){
    // $allCompletedOrder=AssignOrderModel::where('copilot_id','=',$userId)->get();

    $allCompletedOrder= AssignOrderModel::select('assign_order.*', 'pilots.name as pilot_name', 'copilots.name as copilot_name')
    ->join('users as pilots', 'assign_order.pilot_id', '=', 'pilots.id')
    ->join('users as copilots', 'assign_order.copilot_id', '=', 'copilots.id')
    ->where('status','=','1')->where('copilot_id','=',$userId)->get();
    // dd($allCompletedOrder);
  }else{
    $allCompletedOrder= AssignOrderModel::select('assign_order.*', 'pilots.name as pilot_name', 'copilots.name as copilot_name')
    ->join('users as pilots', 'assign_order.pilot_id', '=', 'pilots.id')
    ->join('users as copilots', 'assign_order.copilot_id', '=', 'copilots.id')
    ->where('status','=','1')->get();
    // dd($allCompletedOrder);
  }


  return view('Admin.completedOrdersPage',compact('allCompletedOrder'));
}

public function viewCompleteOrder($id){
  // dd($id);
  $allCompletedOrder=PilotWorkFlowModel::where('orderId','=',$id)->get();
  //dd($allCompletedOrder);
  return view('Admin.viewCompleteOrderPage',compact('allCompletedOrder'));

}

public function maintenace(){

   $userId=auth()->guard('Admin')->user()->id;
  //  dd($userId);
  $droneStockDetails=AssignDroneModel::join('DroneStockDetails','assign_Drone.dronrId','DroneStockDetails.droneid')->join('drones','assign_Drone.dronrId','drones.id')->where('assign_Drone.pilotId','=',$userId)->get();
  // dd($droneStockDetails[0]->propellerClockWise);

  return view('Admin.maintenacePage',compact('droneStockDetails'));
}

public function getDistrictAdminUser(Request $request){

  // return 'tapas';

  $allDistrict=DistrictModel::where('state_id','=',$request->stateId)->get();

  return $allDistrict;


}


}
