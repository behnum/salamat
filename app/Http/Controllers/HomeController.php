<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;
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
        $data = Workout::all()->toArray();
        $data = Workout::where('user_id', Auth::user()->id)
                ->orderBy('date', 'desc')
                ->get()->toArray();

        $totalDist = 0;
        $activeCal = 0;

        foreach($data as $current) {
            $totalDist += $current['distance'];
            $activeCal += $current['active_cal'];
        }

        $stats['totalDist'] = $totalDist;
        $stats['itemsCount'] = count($data);
        $stats['activeCal'] = $activeCal;


        return view('home')->with('data', $data)->with('stats', $stats);
    }

}
