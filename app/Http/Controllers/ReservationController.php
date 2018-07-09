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
    	$terrains = Terrain::all();
    	$adherants = Adherant::all();
    	$reserves  = Reservation::all();

    	$events = [];

    	foreach ($reserves as $key => $reserve) {
    		foreach ($terrains as $key => $terrain) {
    			if($reserve->terrain_id == $terrain->id){
    				foreach ($adherants as $key => $adherant) {
    					if ($reserve->adherant_id == $adherant->id){
    						$events[] = \Calendar::event(
		    					$adherant->first_name.' '.$adherant->last_name,
		    					true,
		    					$reserve->date.'T'.$reserve->heure_debut,
		    					$reserve->date.'T'.$reserve->heure_fin,
								$reserve->id
							);
    					}
    				}
    			}
    		}
    	}		

		$calendar = \Calendar::addEvents($events)
						->setOptions([
							'sunday' => 1
						])->setCallbacks([ ]);

        return view('home',['calendar' => $calendar, 'reserves' => $reserves, 'adherants' => $adherants, 'terrains' => $terrains]);
        // return view('reservation.index',compact('reservation'));
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
