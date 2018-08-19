<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Terrain;
use App\Adherant;
use App\Reservation;
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
        $terrain1 = 'Terrain 1';
        $terrain2 = 'Terrain 2';
        $terrain3 = 'Terrain 3';
        $terrains = Terrain::all();
        $adherants = Adherant::all();
        $reserves = Reservation::all();
        return view('home',['reserves' => $reserves,
                            'terrains' => $terrains,
                            'terrain1' => $terrain1,
                            'terrain2' => $terrain2,
                            'terrain3' => $terrain3,
                            'adherants' => $adherants
                        ]);
    }
}