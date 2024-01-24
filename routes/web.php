<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DroneController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\PriceController;


// Route::get('/', function () {
//     return view('Farmer.navbar');
// });
// Route::get('/', function () {
//     return view('Auth/loginForm');
// });
// Route::get('/Dashboard', function () {
//     return view('Dashboard/dashboardHeader');
// });
// {{Auth::guard()}}
Route::get('/',[FarmerController::class,'webIndex'])->name('webIndex');
Route::get('/farmerLogin',[FarmerController::class,'farmerLogin'])->name('farmerLogin');
Route::get('/farmerRegister/{pssval}',[FarmerController::class,'farmerRegisterPage'])->name('farmerRegisterPage');
Route::post('/Add_farmer',[FarmerController::class,'Add_farmer'])->name('Add_farmer');
Route::post('/farmer/login',[FarmerController::class,'checkLogin'])->name('farmer.login');
Route::get('/getDistricts/{state}', [FarmerController::class, 'getDistricts'])->name('getDistricts');


Route::get('/admin',[AdminController::class,'AdminLoginPage'])->name('AdminLogin');
Route::get('/AdminRegister',[AdminController::class,'AdminRegisterPage'])->name('AdminRegisterPage');
Route::post('/Add_admin',[AdminController::class,'Add_admin'])->name('Admin.Add_admin');
Route::post('/Admin/login',[AdminController::class,'checkLogin'])->name('admin.login');

Route::middleware(['auth:farmer'])->group(function () {
 Route::get('/farmer/indexpage',[FarmerController::class,'farmerIndex'])->name('farmer.indexpage');
Route::get('/farmer/FarmerBookPage/{id}/{dronmodel}',[FarmerController::class,'FarmerBookPage'])->name('farmer.FarmerBookPage');
Route::get('/farmer/getPriceData',[FarmerController::class,'getPriceData'])->name('farmer.getPriceData');
Route::post('/farmer/create_order',[FarmerController::class,'create_order'])->name('farmer.create_order'); 
Route::post('/farmer/createComplain',[FarmerController::class,'createComplain'])->name('farmer.createComplain'); 
Route::get('/farmer/myProfile',[FarmerController::class,'myProfile'])->name('farmer.myProfile');
Route::get('/farmer/myOrders',[FarmerController::class,'myOrders'])->name('farmer.myOrders'); 
Route::get('/farmer/userNeedHelp/{id}',[FarmerController::class,'userNeedHelp'])->name('farmer.userNeedHelp'); 
Route::get('/farmer/orderDetails/{id}',[FarmerController::class,'orderDetails'])->name('farmer.orderDetails');  
Route::get('/farmer/getDroneBookDate',[FarmerController::class,'getDroneBookDate'])->name('farmer.getDroneBookDate');
Route::post('/farmer/orderCancel',[FarmerController::class,'orderCancel'])->name('farmer.orderCancel');


});



Route::middleware(['auth:Admin'])->group(function () {

	Route::get('/dashboardIndexPage', [AdminController::class,'dashboardIndexPage'])->name('Admin.dashboardIndexPage');
	Route::get('/orderCancelPage', [AdminController::class,'orderCancelPage'])->name('Admin.orderCancelPage');

Route::get('/Admin/indexpage',[AdminController::class,'AdminIndex'])->name('Admin.indexpage');
Route::get('/adminUsers',[AdminController::class,'adminUserIndex'])->name('Admin.AdminUserIndex');
Route::post('/update_admin',[AdminController::class,'update_admin'])->name('Admin.update_admin');
Route::get('/adminUserShow/{id}', [AdminController::class,'adminUserShow'])->name('Admin.adminusershow');
Route::get('/adminUseredit/{id}', [AdminController::class,'adminUseredit'])->name('Admin.adminuseredit');
Route::get('/adminUserDelete/{id}', [AdminController::class,'adminUserDelete'])->name('Admin.adminuserdelete');
Route::get('/createUserIndex',[AdminController::class,'createUserIndex'])->name('Admin.createUserIndex');


Route::get('/farmerUsers',[AdminController::class,'farmerUserIndex'])->name('Admin.FarmerUserIndex');
Route::get('/farmerUserShow/{id}', [AdminController::class,'FarmerUserShow'])->name('Admin.FarmeruserShow');
Route::get('/farmerUseredit/{id}', [AdminController::class,'FarmerUseredit'])->name('Admin.FarmeruserEdit');
Route::get('/farmerUserDelete/{id}', [AdminController::class,'farmerUserDelete'])->name('Admin.FarmeruserDelete');
Route::post('/update_farmer',[AdminController::class,'update_farmer'])->name('Admin.update_farmer');
Route::post('/store_createUser',[AdminController::class,'store_createUser'])->name('Admin.store_createUser');




//drone master
Route::get('/dronePage',[DroneController::class,'droneIndex'])->name('Admin.droneIndexPage');
Route::get('/addDronePage',[DroneController::class,'addDroneForm'])->name('Admin.addDronePage');
Route::post('/store_drone',[DroneController::class,'store_drone'])->name('Admin.store_drone');
Route::get('/toggleDroneStatus/{id}',[DroneController::class,'toggleDroneStatus'])->name('Admin.toggleDroneStatus');
Route::get('/Admin.DroneStock/{id}',[DroneController::class,'DroneStock'])->name('Admin.DroneStock');
Route::get('/Admin.assignDrone',[DroneController::class,'assignDroneIndex'])->name('Admin.assignDrone');
Route::get('/Admin.createAssigndrone',[DroneController::class,'createAssigndrone'])->name('Admin.createAssigndrone');
Route::post('/store_AssignDrone',[DroneController::class,'store_AssignDrone'])->name('Admin.store_AssignDrone');
Route::get('/getdronedtls',[DroneController::class,'getdronedtls'])->name('Admin.getdronedtls');
Route::post('/updateDroneStock',[DroneController::class,'updateDroneStock'])->name('Admin.updateDroneStock');

//land Master
Route::get('/landPage',[LandController::class,'landIndex'])->name('Admin.landIndexPage');
Route::get('/addLandPage',[LandController::class,'addLandForm'])->name('Admin.addLandPage');
Route::post('/store_land',[LandController::class,'store_land'])->name('Admin.store_land');



//crop master
Route::get('/cropPage',[CropController::class,'cropIndex'])->name('Admin.cropIndexPage');
Route::get('/addCropPage',[CropController::class,'addCropFrom'])->name('Admin.addCropPage');
Route::post('/store_crop',[CropController::class,'store_crop'])->name('Admin.store_crop');

//price master
Route::get('/pricePage',[PriceController::class,'PriceIndex'])->name('Admin.priceIndexPage');
Route::get('/addPricePage',[PriceController::class,'addPriceForm'])->name('Admin.addPricePage');
Route::post('/store_price',[PriceController::class,'store_price'])->name('Admin.store_price');

//order section
Route::get('/OrderIndexPage',[AdminController::class,'OrderIndex'])->name('Admin.OrderIndex');

Route::get('reviewTickets',[AdminController::class,'reviewTickets'])->name('Admin.reviewTickets');
Route::get('refundTickets',[AdminController::class,'refundTickets'])->name('Admin.refundTickets');
Route::get('complainTickets',[AdminController::class,'complainTickets'])->name('Admin.complainTickets');
Route::get('enquiryTickets',[AdminController::class,'enquiryTickets'])->name('Admin.enquiryTickets');
Route::get('otherTickets',[AdminController::class,'otherTickets'])->name('Admin.otherTickets');


Route::get('assignOrderIndex',[AdminController::class,'assignOrderIndex'])->name('Admin.assignOrderIndex');
Route::get('addAssignOrder',[AdminController::class,'addAssignOrder'])->name('Admin.addAssignOrder');
Route::post('/store_assignOrder',[AdminController::class,'store_assignOrder'])->name('Admin.store_assignOrder');

Route::get('pilotAssignorder',[AdminController::class,'pilotAssignorder'])->name('Admin.pilotAssignorder');
Route::get('pilotWorkUpdate',[AdminController::class,'pilotWorkUpdate'])->name('Admin.pilotWorkUpdate');

Route::post('pilotStart',[AdminController::class,'pilotStart'])->name('Admin.pilotStart');
Route::get('PilotSecondWorkFlow/{id}',[AdminController::class,'PilotSecondWorkFlow'])->name('Admin.PilotSecondWorkFlow');
Route::post('storePilotSecondFlow',[AdminController::class,'storePilotSecondFlow'])->name('Admin.storePilotSecondFlow');

Route::get('PilotThirdWorkFlow/{id}',[AdminController::class,'PilotThirdWorkFlow'])->name('Admin.PilotThirdWorkFlow');
Route::post('storePilotThirdFlow',[AdminController::class,'storePilotThirdFlow'])->name('Admin.storePilotThirdFlow');

Route::get('PilotForthWorkFlow/{id}',[AdminController::class,'PilotForthWorkFlow'])->name('Admin.PilotForthWorkFlow');

Route::post('storePilotForthFlow',[AdminController::class,'storePilotForthFlow'])->name('Admin.storePilotForthFlow');
Route::post('storefromFarmerLocation',[AdminController::class,'storefromFarmerLocation'])->name('Admin.storefromFarmerLocation');

Route::get('pilotCompletedOrder',[AdminController::class,'pilotCompletedOrder'])->name('Admin.pilotCompletedOrder');
Route::get('viewCompleteOrder/{id}',[AdminController::class,'viewCompleteOrder'])->name('Admin.viewCompleteOrder');
Route::get('maintenace',[AdminController::class,'maintenace'])->name('Admin.maintenace');


Route::get('/getDistrictAdminUser',[AdminController::class,'getDistrictAdminUser'])->name('Admin.getDistrictAdminUser');

  
});







Route::get('/Admin/logout',[AdminController::class,'logout'])->name('Admin.logout');
Route::get('/farmer/logout',[FarmerController::class,'logout'])->name('farmer.logout');









