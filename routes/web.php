<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HousekeeperController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\IncomesController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\createfunc;
use App\Http\Controllers\DineInController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('SCHome');
});
Route::view("SCHome",'SCHome');


//------------------------------------------------------routes of Rooms Management section are below------------------------------------
Route::get('/RM', function(){
    return view ('/RM');
});
//route to show all the rooms as a list
Route::get('/RM/roomList', [\App\Http\Controllers\HotelRoomController::class, 'index']);

//**route to pdf */
Route::get('/RM/roomList/list/pdf', [\App\Http\Controllers\HotelRoomController::class, 'availableRoomsPDF']);
Route::resource('hotel_rooms', 'App\Http\Controllers\HotelRoomController'); //this was created for Report in index.blade

//route to show the details of a 1 room using a wildcard to replace everything comes after room/ with it
//then that wildcard value will get stored in variable called $hotelRoom
Route::get('/RM/roomList/{hotelRoom}', [\App\Http\Controllers\HotelRoomController::class, 'show']);

//routes to navigate to the CREATE NEW ROOM, STORE CREATED ROOM IN DB 
Route::get ('/RM/roomList/create/room', [\App\Http\Controllers\HotelRoomController::class,'create']); //shows the create room form
Route::post ('/RM/roomList/create/room', [\App\Http\Controllers\HotelRoomController::class,'store']); //saves the created room into DB
//TO GET THE EDIT ROOM PAGE, TO COMMIT THE EDITED ROOM IN DB
Route::get ('/RM/roomList/{hotelRoom}/edit', [\App\Http\Controllers\HotelRoomController::class,'edit']); //shows edit room form
Route::put ('/RM/roomList/{hotelRoom}/edit', [\App\Http\Controllers\HotelRoomController::class,'update']); //commit edited room into DB
// DELETE A ROOM IN DB respectively
Route::delete ('/RM/roomList/{hotelRoom}', [\App\Http\Controllers\HotelRoomController::class,'destroy']); //delete room from DB

//------------------------------------------------------routes of Employee section are below-------------------------------------------------
Route::resource('employees',EmployeeController::class);
//route for report generation function
Route::get('/createpdf',[\App\Http\Controllers\EmployeeController::class,'createPDF']);

//-----------------------------------------------------routes of Housekeeper section are below----------------------------------------------
Route::resource('housekeepers', HousekeeperController::class);
Route::resource('tasks', TaskController::class);

//------------------------------------------------------routes of Financial section are below-------------------------------------------------
Route::get('/users', function () {
    return view('home');
});
Route::resource('incomes',IncomesController::class);
Route::resource('expenditures',ExpenditureController::class);
Route::resource('budgets',BudgetController::class);

//------------------------------------------------------routes of Event management section are below

Route::get('/eventHome',[frontEndController::class,'indexEventHome']);
Route::resource('events',EventController::class);

//-----------------------------------------------------routes of Booking management section are below
Route::view('create','user.create');
Route::post('create',[createfunc::class,'getData']);
Route::get('index',[indexController::class,'viewlist']);
Route::get('delete/{id}',[indexController::class,'delete']);
Route::get('edit/{id}',[indexController::class,'showData']);
Route::post('edit',[indexController::class,'update']);

//-----------------------------------------------------routes of Dining management section are below
Route::resource('dinein', 'App\Http\Controllers\DineInController');

//-----------------------------------------------------routes of Inventory management section are below
Route::get('InvHome', function () {
    return view('InvHome');
});

Route::view("InvCreate",'InvCreate');
Route::post('InvCreate',[ItemController::class,'addItem']);

Route::view("Reports",'Reports');

Route::view("Return",'Return');
Route::post("Return",[ReturnController::class,'itemReturns']);

Route::view("InvView",'InvView');
Route::get('InvView',[ViewController::class,'show']);


Route::view("InvDelete",'InvDelete');
Route::get('InvDelete',[DeleteController::class,'view']);
Route::get('delete/{id}',[DeleteController::class,'delete']);

Route::view("InvUpdate",'InvUpdate');
Route::get('InvUpdate',[UpdateController::class,'view']);
Route::get('edit/{id}',[UpdateController::class,'editData']);
Route::post('edit',[UpdateController::class,'update']);

