<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
      $getUser = User::get();
    
    //  return decrypt($getUser[0]->password);

       return view('dashboard.users.index',compact('getUser'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view("dashboard.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::get();
     
      if(!$user[2]->name == $request->name){
           User::create($request->except('_token'));
           return redirect()->route('users.index');
      }else{
        return "this User Already Exit";
      }
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $cryptPassword = encrypt($request->input('password'));
      User::where('id',$id)->update(['name'=>$request->name,"email"=>$request->email,"password"=> $cryptPassword ]);
       
     return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       User::destroy($id);
       return redirect()->route("users.index");
    }
}
