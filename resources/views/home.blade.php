@extends('layouts.app')

@section('content')

@if(Auth::user())



 

<div id="home_container" class="container">
    <div class="row justify-content-center">

        <div class="col-md-8" style="margin-top: 2em;">
            <div class="card">
                <div class="card-header text-white bg-info">
                    <h3 class="panel-title">Les réservation du jour</h3>
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
                                @if(date("d-m-Y") == date("d-m-Y", strtotime($reserve->date))  )

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
                                    @endif
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
                                @if(date("d-m-Y") == date("d-m-Y", strtotime($reserve->date))  )
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
                                                       @endif
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
                                @if(date("d-m-Y") == date("d-m-Y", strtotime($reserve->date))  )
                                    @foreach ($terrains as $terrain)
                                    @if($terrain->nom == $terrain3)
                                        @if($reserve->terrain_id == $terrain->id)
                                            @foreach ($adherants as $adherant)
                                            @if($reserve->adherant_id == $adherant->id)
                                            <tbody>
                                              <tr>
                                                <td>{{date("D", strtotime($reserve->date))}} {{date("Y-m-d", strtotime($reserve->date))}}</td>
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
                                    @endif
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
<!-----------------------------------------------------------
Footer Section
------------------------------------------------------------> 
<footer id="footer">
    <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Contact Us</h3>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>rue de rue</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="#">00 00 00 00 00</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <div class="footer-top">
    <div class="container">
      <div class="row centered">


        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>CNAM.</strong> All Rights Reserved
    </div>
  </div>
</footer>
<!-- #footer -->

@endif

@endsection