@extends('layouts.app')

@section('content')


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/homePage.css">


  <style>
  


</style>
</head>
<body>

    <!-- Wrapper for slides -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../images/tennis3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/tennis1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/na.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div style="height:200px;background-color:white;font-size:25px">
    <h2 style="text-align: center">Notre histoire </h2>

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus semper neque in tincidunt. Maecenas leo mauris, dignissim sed vehicula quis, lacinia quis leo. Duis eu diam lorem. Donec malesuada dui id semper tempus. Etiam quam risus, scelerisque vel nulla at, sollicitudin porta erat.
    <a> read more </a></div>


    <div class="parallax">
      <div class="row">
        <div class="col-md-6" style="text-align: center; padding-left: 50px;">
          <h1 style="color: white;  text-decoration: underline;">La vie du club</h1>
          <div class="row">
            <div class="col-md-6 col-sm-6 cont">

              <img src="../images/bal.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <div class="textTour">Tournois interne</div>

                <div class="textUder"><b>du Samedi au Dimanche</b></div>
              </div>
              
            </div>
            
            <div class="col-md-6 col-sm-6 cont">

              <img src="../images/train.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Session d'entrainement <b>gratuite</b></div>

                <div class="textUder">RDV ce Vendredi</div>
              </div>

              
            </div>
          </div>
          <br>
          <br>

          <div class="row">
            <div class="col-md-12 res">

              <img src="../images/results.jpg" alt="Avatar" class="image" style="height: 100px">
              <div class="overlayRes">
                <div class="text"><b>Resultats</b></div>

                <div class="textUder">RDV ce Vendredi</div>
              </div>


            </div>

          </div>

          <div class="row">
            <div class="col-md-12 res"></div>

          </div>
        </div>

        <div class="col-md-6" style="text-align: center;  text-decoration: underline; color: white">
          <h1>Les Evenement à venir</h1>
          <br>
          <br>

          <div class="row">
            <div class="col-md-12" style="background-color: black,padding-right: 30px;">
              <ul class="events">
                <li>Evenement 1 : Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <br>
                <li>Evenement 2 : Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <br>
                <li>Evenement 3 :Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <br>
                <li>Evenement 4: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>


              </ul>

            </div>
          </div>
        </div>


      </div>
    </div>



    <div class="parallax2">

      <h1 style="text-align: center; color: black;background-color: white"> Les encadrants </h1>
      <br>
      <div class="row inter">
       <div class = "col-sm-12 col-md-4 user">
        <div class = "thumbnail">
         <img src = "../images/user.png" alt = "Generic placeholder thumbnail">
       </div>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <div class = "caption">
         <h3>Membre</h3>

         <p>
          <a href = "Membre/index.html" class = "btn btn-primary" role = "button" target="blank">
           let's see
         </a> 
       </p>

     </div>
   </div>
   <div class = "col-sm-12 col-md-4 user">
    <div class = "thumbnail">
     <img src = "../images/user.png" alt = "Generic placeholder thumbnail">
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class = "caption">
     <h3>Membre</h3>


     <p>
      <a href = "Membre/index.html" class = "btn btn-primary" role = "button" target="blank">
       let's see
     </a> 
   </p>

 </div>
</div>


   <div class = "col-sm-12 col-md-4 user">
    <div class = "thumbnail">
     <img src = "../images/user.png" alt = "Generic placeholder thumbnail">
   </div>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class = "caption">
     <h3>Membre</h3>


     <p>
      <a href = "Membre/index.html" class = "btn btn-primary" role = "button" target="blank">
       let's see
     </a> 
   </p>

 </div>
</div>

</div>

<div class="row inter">
 <div class = "col-sm-12 col-md-4">
  <div class = "thumbnail">
   <img src = "../images/user.png" alt = "Generic placeholder thumbnail">
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div class = "caption">
   <h3>Membre</h3>
   

   <p>
    <a href = "Membre/index.html" class = "btn btn-primary" role = "button" target="blank">
     let's see
   </a> 
 </p>

</div>
</div>
<div class = "col-sm-12 col-md-4">
  <div class = "thumbnail">
   <img src = "../images/user.png" alt = "Generic placeholder thumbnail">
 </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div class = "caption">
   <h3>Membre</h3>
   

   <p>
    <a href = "Membre/index.html" class = "btn btn-primary" role = "button" target="blank">
     let's see
   </a> 
 </p>

</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class = "col-sm-12 col-md-4">
  <div class = "thumbnail">
   <img src = "../images/user.png" alt = "Generic placeholder thumbnail">
 </div>


 <div class = "caption">
   <h3>Membre</h3>
   

   <p>
    <a href = "Membre/index.html" class = "btn btn-primary" role = "button" target="blank">
     let's see
   </a> 
 </p>

</div>
</div>

</div>


</div>
<div style="height:200px;background-color:white;font-size:25px;text-align:center">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus semper neque in tincidunt. Maecenas leo mauris, dignissim sed vehicula quis, lacinia quis leo. Duis eu diam lorem. Donec malesuada dui id semper tempus. Etiam quam risus, scelerisque vel nulla at, sollicitudin porta erat.
</div>


<div class="parallax3">

 
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
</div>


</body>
</html>

@endsection