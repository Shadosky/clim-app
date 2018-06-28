<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
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
        $halfHour = date('U') - (60*30);
        $votes = Models\PollVotes::where("update_time", ">", $halfHour)->get();
        $result['a'] = 0;
        $result['b'] = 0;
        foreach ($votes as $line){
            $result[$line->vote] ++;
        }

        return view('dashboard', compact('user', 'result'));
    }

    public function vote(VoteRequest $request)
    {
        $vote = $request->getVote();
        return Models\PollVotes::updateOrCreate(
            ['id_user' => Auth::id()],
            ['vote' => $vote]
        );
    }

    public function getVote()
    {
        $halfHour = date('U') - (60*30);
        $votes = Models\PollVotes::where("update_time", ">", $halfHour)->get();
        $result['a'] = 0;
        $result['b'] = 0;

        foreach ($votes as $line){
            if($line->update_time)
            $result[$line->vote] ++;
        }
        return json_encode([$result['a'], $result['b']]);
    }
}
