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
        $refreshTime = getenv('VOTE_ACTIVE_TIME');
        $halfHour = date('U') - (60*$refreshTime);
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
        $time = date('U');
        $vote = $request->getVote();
        return Models\PollVotes::updateOrCreate(
            ['id_user' => Auth::id()],
            ['vote' => $vote, 'update_time' => $time]
        );
    }

    public function getVote()
    {
        $refreshTime = getenv('VOTE_ACTIVE_TIME');
        $halfHour = date('U') - (60*$refreshTime);
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
