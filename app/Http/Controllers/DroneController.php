<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DroneModel;
use App\Models\DistrictModel;
use App\Models\DroneStockModel;
use App\Models\AdminModel;
use App\Models\AssignDroneModel;


class DroneController extends Controller
{
    public function droneIndex(){
        $all_drone=DroneModel::join('districts','drones.district','districts.id')->select('drones.*','districts.district_name')->get();
    // dd($all_drone);

    // $all_drone=DroneModel::join('districts','drones.district','districts.id')->
    // join('DroneStockDetails','drones.id','DroneStockDetails.droneid')->
    // join('users','DroneStockDetails.updateBy_Id','users.id')->
    // select('drones.*','districts.district_name','DroneStockDetails.updateBy_Id as stockLastUpdUser','users.name as updUserNm','users.role')->
    // get();
        return view('Admin.droneIndexPage',compact('all_drone'));
    }
    public function addDroneForm(){
        $all_district=DistrictModel::all();
        // dd($all_district);
        return view('Admin.AddDroneForm',compact('all_district'));
    }

    public function store_drone(Request $request){

        date_default_timezone_set('Asia/Kolkata');
 
  
        $drones = new DroneModel;

  
        
        if(isset($request->sptank)){
            $drones->spraying_tank = $request->sptank;
        }
        if(isset($request->dronemdl)){
            $drones->model_name = $request->dronemdl;
        }
        if(isset($request->endurance)){
            $drones->endurance = $request->endurance;
        }
        if(isset($request->flightrange)){
            $drones->flight_range = $request->flightrange;
        }
        if(isset($request->heightrange)){
            $drones->height_range = $request->heightrange;
        }
        if(isset($request->dronePrice)){
            $drones->price = $request->dronePrice;
        }
        if(isset($request->drndist)){
            $drones->district = $request->drndist;
        }
    
      
      
  
        if ($request->hasFile('droneImg')) {
            $image = $request->file('droneImg');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/DroneImage'), $imageName);
            $drones->image = $imageName;
        }

  
    
    
    
        
  
        $drones->save();

        $droneId = $drones->id;

        $dronesstock = new DroneStockModel;

        if(isset($droneId)){
            $dronesstock->droneid = $droneId;
        }

        if(isset($request->propellerclock)){
            $dronesstock->propellerClockWise = $request->propellerclock;
        }

        if(isset($request->propellerAnti)){
            $dronesstock->propellerAntiClockWise = $request->propellerAnti;
        }
        if(isset($request->armsQnt)){
            $dronesstock->armsQnt = $request->armsQnt;
        }
        if(isset($request->motorQnt)){
            $dronesstock->motorQnt = $request->motorQnt;
        }
        if(isset($request->lGearQnt)){
            $dronesstock->landingGearQnt = $request->lGearQnt;
        }
        if(isset($request->nozzleQnt)){
            $dronesstock->nozzleQnt = $request->nozzleQnt;
        }
        if(isset($request->nutBoldQnt)){
            $dronesstock->nutBoldQnt = $request->nutBoldQnt;
        }
        if(isset($request->bableQnt)){
            $dronesstock->bableQnt = $request->bableQnt;
        }
        if(isset($request->lnQnt)){
            $dronesstock->lnKey = $request->lnQnt;
        }
        if(isset($request->waterpumpQnt)){
            $dronesstock->waterPump = $request->waterpumpQnt;
        }
    
        if(isset($request->pipeoneQnt)){
            $dronesstock->pipe6_mm = $request->pipeoneQnt;
        }
    
        if(isset($request->pipetwoQnt)){
            $dronesstock->pipe8_mm = $request->pipetwoQnt;
        }
    
        if(isset($request->pipeThreeQnt)){
            $dronesstock->pipe10_mm = $request->pipeThreeQnt;
        }
        if(isset($request->chargerQnt)){
            $dronesstock->chargerQnt = $request->chargerQnt;
        }
        if(isset($request->ch_Power_Cableqnt)){
            $dronesstock->chargerPowerCable = $request->ch_Power_Cableqnt;
        }

        if(isset($request->exBoard)){
            $dronesstock->extationBoard = $request->exBoard;
        }

        if(isset($request->bettaryQnt)){
            $dronesstock->bettaryQnt = $request->bettaryQnt;
        }

        if(isset($request->transmeterQnt)){
            $dronesstock->transmeaterQnt = $request->transmeterQnt;
        }

        $dronesstock->save();
    
        return redirect()->back()->with('success','Drone added successfully!');
  
      }

      public function toggleDroneStatus($id){
        $drone = DroneModel::find($id);

        if (!$drone) {
            return redirect()->route('Admin.addDronePage')->with('error', 'Drone not found');
        }
    
        // Toggle the status
        $drone->status = ($drone->status == 1) ? 0 : 1;
        $drone->save();
    
        return redirect()->back()->with('success', 'Drone status updated successfully');
      
      }

      public function DroneStock($id){

        // dd($id);
        $drone_stockDetails=DroneStockModel::join('drones','DroneStockDetails.droneid','drones.id')->where('droneid','=',$id)->get();
         //dd($drone_stockDetails);

        return view('Admin.droneStockPage',compact('drone_stockDetails'));

      }

      public function assignDroneIndex(){
        $allAssignDrone=AssignDroneModel::join('users','assign_Drone.pilotId','users.id')->join('drones','assign_Drone.dronrId','drones.id')->select('assign_Drone.*','drones.model_name','users.name')->get();
        // dd($allAssignDrone);
        return view('Admin.assignDroneIndexPage',compact('allAssignDrone'));
      }

      public function createAssigndrone(){
        $allPilot=AdminModel::where('role','=','5')->get();
        // $allDrone=DroneModel::all();
        // dd($allDrone);
        // dd($allPilot);
        return view('Admin.createAssigndronePage',compact('allPilot'));

      }
      public function store_AssignDrone(Request $request){

        $existingAssignment = AssignDroneModel::where('dronrId', $request->droneass)->first();
        // dd($existingAssignment->pilotId);

        if ($existingAssignment) {
            // Drone is already assigned, return with a message
            $useName=AdminModel::find($existingAssignment->pilotId);
            // dd($useName->name);
            $errorMessage = 'This drone is already assigned to pilot ' . $useName->name . '!';

            return redirect()->back()->with('error', $errorMessage);
        }



        $storeAssignDrone= new AssignDroneModel;

        if(isset($request->pilotass)){
            $storeAssignDrone->pilotId = $request->pilotass;
        }
        if(isset($request->droneass)){
            $storeAssignDrone->dronrId = $request->droneass;
        }

        $storeAssignDrone->save();
        return redirect()->back()->with('success','Drone Assign successfully!');


      }

      public function getdronedtls(Request $request){
        $pilot = AdminModel::find($request->pilotId);


        $district = $pilot->district;
        $drones = DroneModel::where('district', $district)->get();
        return $drones;

      }

      public function updateDroneStock(Request $request){
        // dd('update stock details page');
        $droneId=$request->updronrId;
        $useLogId=$request->upuserId;

        $updateStock=DroneStockModel::where('droneid','=',$droneId)->first();

        // dd($updateStock);

        if(isset($request->uppropclock)){
            $updateStock->propellerClockWise = $request->uppropclock;
        }
        if(isset($request->uppropanti)){
            $updateStock->propellerAntiClockWise = $request->uppropanti;
        }
        if(isset($request->uparms)){
            $updateStock->armsQnt = $request->uparms;
        }
        if(isset($request->upmotors)){
            $updateStock->motorQnt = $request->upmotors;
        }
        if(isset($request->uplndgear)){
            $updateStock->landingGearQnt = $request->uplndgear;
        }
        if(isset($request->upnozzle)){
            $updateStock->nozzleQnt = $request->upnozzle;
        }
        if(isset($request->upnutbold)){
            $updateStock->nutBoldQnt = $request->upnutbold;
        }
        if(isset($request->upbable)){
            $updateStock->bableQnt = $request->upbable;
        }
        if(isset($request->uplnkey)){
            $updateStock->lnKey = $request->uplnkey;
        }
        if(isset($request->upwaterpump)){
            $updateStock->waterPump = $request->upwaterpump;
        }
        if(isset($request->uppipesix)){
            $updateStock->pipe6_mm = $request->uppipesix;
        }
        if(isset($request->uppipeeight)){
            $updateStock->pipe8_mm = $request->uppipeeight;
        }
        if(isset($request->uppipeten)){
            $updateStock->pipe10_mm = $request->uppipeten;
        }
        if(isset($request->chargerQnt)){
            $updateStock->chargerQnt = $request->upcharger;
        }
        if(isset($request->upchargerpowercable)){
            $updateStock->chargerPowerCable = $request->upchargerpowercable;
        }
        if(isset($request->upextationbord)){
            $updateStock->extationBoard = $request->upextationbord;
        }
        if(isset($request->upbettary)){
            $updateStock->bettaryQnt = $request->upbettary;
        }
        if(isset($request->uptransmeater)){
            $updateStock->transmeaterQnt = $request->uptransmeater;
        }
        if(isset($useLogId)){
            $updateStock->updateBy_Id = $useLogId;
        }

        $updateStock->save();
        return redirect()->back()->with('success','Update Stock successfully!');


      }
  

    
}
