@extends('layouts.app')

@section('content')

<div id="home_container" class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Terrains</h4>
        </div>

        <div class="card-body">
          <form method="POST" action="/terrain">
            {{csrf_field()}}

            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="nom" class="form-control" id="nom" name="nom">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection