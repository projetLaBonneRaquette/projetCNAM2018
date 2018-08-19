@extends('layouts.app')

@section('content')

@if(Auth::user())
<div id="home_container" class="container">
    <div class="row justify-content-center">

        <div class="col-md-8" style="margin-top: 2em;">
            <div class="card">
                <div class="card-header text-white bg-info">
                    <h3 class="panel-title">Réservation</h3>
                </div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Terrain 1</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Terrain 2</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Terrain 3</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          @if($terrain1)
                            <table class="table table-sm">
                                <!-- <caption>List of calendar</caption> -->
                                <thead>
                                  <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Heure debut</th>
                                        <th scope="col">Heure fin</th>
                                  </tr>
                                </thead>
                                @foreach ($reserves as $reserve)
                                    @foreach ($terrains as $terrain)
                                    @if($terrain->nom == $terrain1)
                                        @if($reserve->terrain_id == $terrain->id)
                                            @foreach ($adherants as $adherant)
                                            @if($reserve->adherant_id == $adherant->id)
                                            <tbody>
                                              <tr>
                                                <td>{{date("D", strtotime($reserve->date))}} {{date("d-m-Y", strtotime($reserve->date))}}</td>
                                                <td>{{$adherant->first_name}} {{$adherant->last_name}}</td>
                                                <td>{{$reserve->heure_debut}}</td>
                                                <td>{{$reserve->heure_fin}}</td>
                                              </tr>
                                            </tbody>
                                            @endif
                                            @endforeach
                                        @endif
                                    @endif
                                    @endforeach
                                @endforeach
                            </table>
                        @endif
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          @if($terrain2)
                            <table class="table table-sm">
                                <!-- <caption>List of calendar</caption> -->
                                <thead>
                                  <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Heure debut</th>
                                        <th scope="col">Heure fin</th>
                                  </tr>
                                </thead>
                                @foreach ($reserves as $reserve)
                                    @foreach ($terrains as $terrain)
                                    @if($terrain->nom == $terrain2)
                                        @if($reserve->terrain_id == $terrain->id)
                                            @foreach ($adherants as $adherant)
                                            @if($reserve->adherant_id == $adherant->id)
                                            <tbody>
                                              <tr>
                                                <td>{{date("D", strtotime($reserve->date))}} {{date("d-m-Y", strtotime($reserve->date))}}</td>
                                                <td>{{$adherant->first_name}} {{$adherant->last_name}}</td>
                                                <td>{{$reserve->heure_debut}}</td>
                                                <td>{{$reserve->heure_fin}}</td>
                                              </tr>
                                            </tbody>
                                            @endif
                                            @endforeach
                                        @endif
                                    @endif
                                    @endforeach
                                @endforeach
                            </table>
                        @endif
                      </div>
                      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          @if($terrain3)
                            <table class="table table-sm">
                                <!-- <caption>List of calendar</caption> -->
                                <thead>
                                  <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Heure debut</th>
                                        <th scope="col">Heure fin</th>
                                  </tr>
                                </thead>
                                @foreach ($reserves as $reserve)
                                    @foreach ($terrains as $terrain)
                                    @if($terrain->nom == $terrain3)
                                        @if($reserve->terrain_id == $terrain->id)
                                            @foreach ($adherants as $adherant)
                                            @if($reserve->adherant_id == $adherant->id)
                                            <tbody>
                                              <tr>
                                                <td>{{date("D", strtotime($reserve->date))}} {{date("d-m-Y", strtotime($reserve->date))}}</td>
                                                <td>{{$adherant->first_name}} {{$adherant->last_name}}</td>
                                                <td>{{$reserve->heure_debut}}</td>
                                                <td>{{$reserve->heure_fin}}</td>
                                              </tr>
                                            </tbody>
                                            @endif
                                            @endforeach
                                        @endif
                                    @endif
                                    @endforeach
                                @endforeach
                            </table>
                        @endif
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-8"> -->
            <!-- <div class="card"> -->
                <!-- <div class="card-header">Dashboard</div> -->

                <!-- <div class="card-body"> -->
                    <!-- @if (session('status')) -->
                    <!-- <div class="alert alert-success" role="alert"> -->
                        <!-- {{ session('status') }} -->
                    <!-- </div> -->
                    <!-- @endif -->

                    <!-- You are logged in! -->
                    
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->

    </div>
</div>
@endif

@endsection
