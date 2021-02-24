<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php  include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/fish.jpg" alt="fish" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ocean1.jpg" alt="ocean1" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ocean2.jpg" alt="ocean2" width="1100" height="500">
      <div class="carousel-caption">
      
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-3">
    <div class="py-5">
        <h2 class="text-center">Interesting Facts</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/dolphin-home.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">DOLPHINS</h4>
                        <p class="card-text">
                                    Dolphins sleep with only half of their brain and keep one eye open
									so they can watch for predators and other threats.</p>        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/octopus-home.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">OCTOPUS</h4>
                        <p class="card-text">An octopus can detach itself from it's arm to escape from it's predators and can later regrow their limb.<br /><br /></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/jellyfish-home.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">JELLYFISH</h4>
                        <p class="card-text">Jellyfish have been around for more than 650 million years which means 
									that they outdated both dinosaurs and sharks.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="my-3">
    <div class="py-5">
        <h2 class="text-center">Want To Know More About Sea Creatures.</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                   
                    <div class="card-body">
                        
                        <a href="crabs.php" class="btn btn-primary stretched-link">CRABS</a>      
                    </div>
                    <img class="card-img-bottom" src="images/crab.jpg" alt="Card image">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                   
                    <div class="card-body">
                        
                        <a href="dolphins.php" class="btn btn-primary stretched-link">DOLPHINS</a>                        
                    </div>
                    <img class="card-img-bottom" src="images/dolphins.jpg" alt="Card image">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                   
                    <div class="card-body">
                        
                        <a href="seabirds.php" class="btn btn-primary stretched-link">SEA BIRDS</a>   
                    </div>
                    <img class="card-img-bottom" src="images/seabird.jpg" alt="Card image">
                </div>
            </div>
        </div>
    </div>

</section>

<footer>
<p class="p-3 bg-dark text-white text-center"> <a href="#" class="text-white">DESIGNED AND DEVELOPED BY NEHA</a></p>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>