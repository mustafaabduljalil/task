<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $start_time = microtime(true); 

        $friends = \App\Friend::where('user_id',7)->get();

        // End clock time in seconds 
        $end_time = microtime(true); 
          
        // Calculate script execution time 
        $execution_time = ($end_time - $start_time);
        dd($execution_time);
    }
}
/** first way 
\App\Friend::where('user_id',7)->orWhere('friend_id',7)->get();
execution time at many times = 0.021485090255737 or 0.019468784332275 or 0.0189049243927 
**/


/** second way 
\App\Friend::where('user_id',7)->get();
execution time at many times = 0.014565944671631 or 0.015597105026245 or 0.013629198074341
**/
