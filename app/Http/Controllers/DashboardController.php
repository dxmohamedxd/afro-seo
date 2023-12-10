<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Service;
use App\Models\visitor;
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        // $data = visitor::get();
        $visitCount = DB::select('SELECT visitors.country  ,count(visitors.id) as count FROM visitors GROUP by visitors.country;');
        return view('Dashboard.index',compact('visitCount'));
      
    }
    
    public function charts(){

        // $data = visitor::get();
        $visitCount = DB::select('SELECT visitors.country  ,count(visitors.id) as count FROM visitors GROUP by visitors.country;');
        return $visitCount;
      
    }
    public function chartpage(){
        $visitCount = DB::select('SELECT visitors.page  ,count(visitors.id) as count FROM visitors GROUP by visitors.page;');
       return   $visitCount ;
    }
    public function about(){
        return view('Dashboard.about.index');
       
    }
    public function reports(Request $request){
        if($request->date==""){
            $startDay  = date("Y-m-d 0:0:0");
            $endDay = date("Y-m-d 23:59:59");
           return DB::select("SELECT visitors.page ,count(visitors.id) as count FROM visitors WHERE created_at BETWEEN '$startDay' AND '$endDay' GROUP by visitors.page;");
        }else{
            $date = $request->date;
            $startDay = date("Y-m-d H:i:s",time());
            $report= DB::select("SELECT visitors.page ,count(visitors.id) as count FROM visitors WHERE created_at BETWEEN '$date' AND '$startDay' GROUP by visitors.page;");
            return $report;
        }
    }  
}
