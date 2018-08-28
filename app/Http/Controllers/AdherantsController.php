<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adherant;
use Auth;
use App\Reservation;


use DB;

class AdherantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$adherants  = Adherant::all();
        $reserves = Reservation::all();
        return view('adherants.index',['adherants' => $adherants,'reserves' => $reserves,]);
    }

    public function userId($id)
    {
       $user = Auth::user()->id;
        return view('welcome',compact('user'));
    }

    public function show( Adherant $adherant)
    {
        $reserves = Reservation::all();
        
       
        return view('adherants.show',['reserves' => $reserves,'adherant' => $adherant]);
       
    }

    public function create()
    {
        return view('adherants.create');
    }

    public function store()
    {
        
        //create adherant
        $adherant = new Adherant;
        $adherant->user_id = Auth::user()->id;
        $adherant->first_name = request('first_name');
        $adherant->last_name = request('last_name');
        $adherant->email = request('email');
        $adherant->licence_number = request('licence_number');
        $adherant->save();

        return redirect('adherants');
    }

    public function edit( Adherant $adherant)
    {
        $adherant = Adherant::find($id);

        return view('adherants.edit',compact('adherant'));
    }

    public function update(Request $req , $id)
    {
        $adherant = Adherant::findOrFail($id);
        $adherant->update($req->all());

        return redirect('adherants');
    }

   public function destroy($id) {
      DB::delete('delete from adherants where id = ?',[$id]);
      return redirect('adherants');
   }


    public function test( Adherant $adherant)
    {
       //$adherant = Adherant::find($id);
        return view('adherants.test',compact('adherant'));
    }



}
