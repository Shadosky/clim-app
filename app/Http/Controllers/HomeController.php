<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\Auth;

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
        $user = Models\Users::find(Auth::user()->id);
        $votes = Models\PollVotes::all();
        $result['a'] = 0;
        $result['b'] = 0;
        foreach ($votes as $line){
            $result[$line->vote] ++;
        }
        dd($result);
        return view('dashboard', compact('user', 'votes'));
    }
}
