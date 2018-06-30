<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ticket;

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



        if(request()->user()->role == "team")
        {


         $tickets = Ticket::all();
         $users = User::all();

         return view('TMhome', compact('users','ticket'));

        }
        elseif(request()->user()->role == "teamadmin")
        {


         $tickets = Ticket::all();
         $users = User::all();

         return view('TMhome', compact('users','ticket'));

        }
        else
        {
            return view('home');

        }
    }
}
