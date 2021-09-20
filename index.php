<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

    <?php include 'menu.php'; ?>
    
    


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc4.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cc5.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cc6.jpg" alt="astanbool" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/cc7.jpg" alt="peshawar" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/cc2.jpg" alt="" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">I am ShahMasood Mern Stack Developer</h2>
                <p class="py-4">Keen and enthusiastic towards new technologies, having experience in web
                related computer languages. Able to effectively self-manage during
                independent projects, as well as collaborate as part of a productive team.
                Would like to gain the necessary experience to hopefully become a full stack
                developer.
                </p>
                    <a href="about.php" class="btn btn-success">check More</a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text_effects text-center">Our Services</h2>
    </div>
    <div class="container fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
            <img class="card-img-top" src="images/react.PNG" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">ReactJs</h4>
                <p class="card-text">I can develop UI for your website in ReactJs.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12" class= "mern">
            <div class="card" >
            <img class="card-img-top" src="images/mern4.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Mern Stack</h4>
                <p class="card-text">I can develop any type of website for you in Mern Stack.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
            <img class="card-img-top" src="images/graphic.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Graphic Designer</h4>
                <p class="card-text">I am a graphic designer, I can serve you in graphic designings </p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>

            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallary</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class="img-fluid pb-4">       
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/5.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/5.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/5.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/7.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/7.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/7.jpg" class="img-fluid pb-4">
            </div>
        </div>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" autocomplete="0ff" class="form-control">
            </div>
            <div class="form-group">
                <label>Email id</label>
                <input type="text" name="email" autocomplete="0ff" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="0ff" class="form-control">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>
</section>

<footer>
    <h3 class="p-3 bg-dark text-white text-center">@shahmasoodmernstackdeveloperProductions</h3>
</footer>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>