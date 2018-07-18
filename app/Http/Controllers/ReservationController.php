<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Auth;
use Calendar;
use App\Terrain;
use App\Adherant;
use App\Reservation;

class ReservationController extends Controller
{
    //
    public function index()
    {
    	$adherants = Adherant::all();
    	$reserves = Reservation::all();
        $terrains = Terrain::all();
        $terrain1 = 'Terrain 1';
        $terrain2 = 'Terrain 2';
        $terrain3 = 'Terrain 3';

        $date = date("d-m-Y");
        $time = date("H:i");
        // $time = date("H:i", strtotime("-30 minutes"));

        return view('home',['date' => $date,
                            'time' => $time,
                            'reserves' => $reserves,
                            'terrains' => $terrains,
                            'terrain1' => $terrain1,
                            'terrain2' => $terrain2,
                            'terrain3' => $terrain3,
                            'adherants' => $adherants
                        ]);
    }

    public function createTerra()
    {

    	$terrains = Terrain::all();

        return view('reservation.terrain', compact('terrains'));
    }

    public function storeTerra(Request $request)
    {

    	// store Terrains
    	
    	$terrain = new Terrain;
    	$terrain->nom = request('nom');
    	$terrain->save();

        return view('reservation.index', compact('terrain'));
    }

    public function createReserve()
    {
    	// $user = Auth::user();
    	$adherants = Adherant::all();

    	$terrains = Terrain::all();

        return view('reservation.create',['adherants' => $adherants, 'terrains' => $terrains]);
    }

    public function storeReserve(Request $request)
    {

    	// store reservation
    	$reserve = new Reservation;
    	$reserve->date = request('date');
    	$reserve->user_id = Auth::user()->id;
    	$reserve->heure_debut = request('heure_debut');
    	$reserve->heure_fin = request('heure_fin');
    	$reserve->terrain_id = request('terrain_id');
    	$reserve->adherant_id = request('adherant_id');
    	$reserve->save();

        $terrains = Terrain::all();

        return redirect('/reservation');
        // return view('reservation.index',['reserve' => $reserve, 'terrains' => $terrains]);
    }
}
