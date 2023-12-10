<?php

use App\Http\Controllers\changeLange;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use App\Models\shetabit_visit;
// use App\Http\Visitor;
use App\Models\visitor;

 
  // all route dashboard
  Route::group(['middleware'=>"auth"],function(){
    Route::get('dashboard/reports',[DashboardController::class,'reports'])->name('reports');

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('dashboard/about',[DashboardController::class,'about']);

    Route::controller(ServiceController::class)->group(function(){
      Route::get('dashboard/services','index')->name('dashSerivces');
      Route::get("dashboard/create","create");
      Route::post('dashboard/insert',"store");
      Route::get('dashboard/edit/{id}','edit');
      Route::put('dashboard/update/{id}','update');
      Route::get('dashboard/delete/{id}','destroy');
     });

   Route::resource('dashboard/contacts',ContactController::class);

   Route::resource('dashboard/users',UserController::class);

  });
Route::get('/',[changeLange::class,'index']);
Route::get('/change',[changeLange::class,'changeLang'])->name('changeLang');

        Route::get('/', function () {
            return view('index');
          })->name('index');
          
          Route::get("About",function(){
              return view('about');
          })->name('about');

          Route::get('Services',function(){

            return view('services');

          })->name('services');

          Route::get('Contact',function(){

            return view('contact');

          })->name('contact');

          Route::get('Project',function(){
            return view('project');
          })->name('project');
        
          Route::get('Team',function(){
            return view('team');
          })->name('team');



Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
