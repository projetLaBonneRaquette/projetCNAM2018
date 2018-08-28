@extends('layouts.app')

@section('content')



	<div id="adherants" class="container">
		<div class="card col-md-8 mx-auto" style="
    text-align: center;
    height: 60px;
    color: white;
    background: rgba(0,123,255,.60);
    text-transform: uppercase;
">  <p style="    padding-top: 20px;">Liste des entraînement pour {{$adherant->first_name}} {{$adherant->last_name}} <p></div>
	<br>
		<div class="card col-md-8 mx-auto" style="background-color: transparent; border: none;">
		

@foreach($reserves as $reserve)

		<div class="card-header" id="headingTwo" style="background-color: white;">
			<center>
				Entrainement le <b>{{date("d-m-Y", strtotime($reserve->date))}}</b> de <b>{{$reserve->heure_debut}}</b> à <b>{{$reserve->heure_fin}}</b>


			</center>
		</div>
		<br>


@endforeach
</div>
</div>

@endsection