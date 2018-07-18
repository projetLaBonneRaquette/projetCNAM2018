@extends('layouts.app')

@section('content')

<div id="home_container" class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Reservé</h4>
        </div>

        <div class="card-body">
          <form method="POST" action="/reserve">
            {{csrf_field()}}

            <div class="form-group">
              <label for="Choisir">Choisir terrain</label>
              <select class="form-control" name="terrain_id" id="terrain_id">
                <option selected>Choisir...</option>
                @foreach ($terrains as $terrain)
                  <option value="{{$terrain->id}}">{{ $terrain->nom }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="Choisir">Choisir adhérent</label>
              <select class="form-control" name="adherant_id" id="adherant_id">
                <option selected>Choisir...</option>
                @foreach ($adherants as $adherant)
                  @if(!Auth::guest())
                    @if(Auth::user()->id == $adherant->user_id)
                      <option value="{{$adherant->id}}">{{ $adherant->first_name }} {{ $adherant->last_name }}</option>
                    @endif
                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group">
              <label for="date">Heure debut</label>
              <input type="time" class="form-control" id="heure_debut" name="heure_debut" value="08:00" min="08:00" max="18:00">
            </div>

            <div class="form-group">
              <label for="date">Heure fin</label>
              <input type="time" class="form-control" id="heure_fin" name="heure_fin" value="18:00">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection