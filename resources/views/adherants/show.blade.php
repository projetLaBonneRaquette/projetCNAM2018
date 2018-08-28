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
			@if($reserve->adherant_id == $adherant->id)

			<div class="card-header" id="headingTwo" style="background-color: white;">
				<center>
					Entrainement le <b>{{date("d-m-Y", strtotime($reserve->date))}}</b> de <b>{{$reserve->heure_debut}}</b> à <b>{{$reserve->heure_fin}}</b>
					<form method="POST" action="../delete/{{ $reserve->id }}">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<button type="submit" class="btn btn-danger">Supprimer</button>
					</form>


				</center>

			</div>
			<br>

			@endif
			@endforeach
		</div>
	</div>

	@endsection