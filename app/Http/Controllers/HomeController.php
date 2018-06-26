<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

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
        $user = Models\Users::all();
        dump($user);
        return view('home');
    }
}
