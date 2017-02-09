<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home');
    }
    public function showHomePage(){
        if(Auth::check()){
            $activities=DB::table('activities')->orderBy('updated_at','desc')->get();
            //dd($activities);
            return view('home',compact('activities'));
        }
        else {
            return redirect(url('/login'));
        }
    }


}
