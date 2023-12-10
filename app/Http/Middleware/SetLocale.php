<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use App\Models\visitor;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
  
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        
        if(!str_contains($request->path(),"dashboard") && !str_contains($request->path(),"login") && !str_contains($request->path(),"logout")) {
                $ip = "102.143.255.255";
                $client = new \GuzzleHttp\Client();
                $res =  $client->get("http://ip-api.com/json/". $ip .'',["auth" =>['user',"pass"]]);
                $res->getStatusCode();
                $Data =  json_decode($res->getBody());
                $nameOfPath = $request->path();
                visitor::create(["country"=>$Data->country,"city"=>$Data->city,"time_zone"=>$Data->timezone,"page"=> $nameOfPath]); 
                return $next($request);   
      
        }
        return $next($request);
    }
}
