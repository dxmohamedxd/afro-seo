<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $rows = Service::get();
        return view('Dashboard/services/services',compact('rows'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard/services/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $img =   $request->file('image')->getClientOriginalName();
           $path =  $request->file('image')->storeAs('service', $img,'imgs');
           Service::create([

            'name'           =>     $request->name,
            'description'    =>       $request->description,    
            'image'          =>          $path,
             
           ]);
           return redirect()->route('dashSerivces');
           
      
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashboard.layout.dashboardMaster');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $row = Service::find($id);
       return view('Dashboard.services.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('image')){ 

          $img =   $request->file('image')->getClientOriginalName();
        $path =  $request->file('image')->storeAs('service', $img,'imgs');
              Service::where('id',$id)->update([
                      'name'         =>       $request->name, 
                     'description'    =>       $request->description,    
                     'image'          =>          $path
                    ]);
           return redirect()->route('dashSerivces');  

         } else{
                  Service::where('id',$id)->update([
                          'name'         =>       $request->name, 
                         'description'    =>       $request->description,    
                     
                        ]);
               return redirect()->route('dashSerivces'); 
         }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::destroy($id);
        return redirect()->route('dashSerivces');
    }
}
