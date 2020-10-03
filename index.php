
<?php 
include("connect.php");
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
   header("Location:home.php");
   }
else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyHub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">    
<link rel="stylesheet" href="homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("header.php") ?>
    

    <div id="searcharea">
        <div id="searchbar">
            <form>
                <div class="form-row align-items-center">
                  <div class="col-auto">
                      <select id="cars" name="cars" class="form-control mb-2">
                        <option value="volvo">Location</option>
                        <option value="saab">A</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-auto">
                    <select id="category" name="category" class="form-control mb-2">
                        <option value="volvo">Category</option>
                        <option value="saab">A</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                    </div>
                  <div class="col-auto">
                    <select id="subcategory" name="subcategory" class="form-control mb-2">
                        <option value="volvo">Subcategory</option>
                        <option value="saab">A</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div style="margin-left: 1vw;" class="col-auto ser_btn">
                    <button  type="submit" class="btn btn-warning mb-2 "><i  class="fa fa-search fa-2x animate__animated animate__infinite animate__pulse" aria-hidden="true"></i></button>
                  </div>
                </div>
              </form>

        </div>

    </div>
    <h1 class="bigHeading">Popular Freelancers</h1>

    <div class="main_box">
      <div class="row">
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
      </div>
      <button id="browse" class="btn btn-warning ">Browse more</button>
    </div>
    <h1 class="bigHeading">Popular service</h1>

    <div class="main_box">
      <div class="row">
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
       <div class="col-sm-6 col-lg-3 box"></div>
      </div>
      <button id="browse" class="btn btn-warning ">Browse more</button>
    </div>

    <!--  -->
 

    <!-- end -->
  
<!-- about us -->
<h1 id="about" style="text-align: center; margin:10% 0 5% 0">About us</h1>
<div class="container">
<div class="row ">
  <div class="col-lg-6 abt_content">
    <p class="but">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, 
    quis nostrum exercitationem ullam corporis suscipit laboriosam,
     nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit 
     qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
  </p></div>
     <div class="col-lg-6 abt_content">
       <div class="imageBox"></div>
</div>
    </div>
    <!-- services -->
    <h1 style="text-align: center; margin:10% 0 5% 0">Services</h1>

    <div class="card-group serv">
      <div class="card">
        <img class="card-img-top" src="https://source.unsplash.com/random" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://source.unsplash.com/random" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://source.unsplash.com/random" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <!-- testimonials -->
    <h1 style="text-align: center; margin:10% 0 5% 0">testimonials</h1>
    <div id="carouselExample" class="carousel slide testi" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
         
          <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h5>
        </div>
        <div class="carousel-item">
          <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h5>

        </div>
        <div class="carousel-item">
          <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h5>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>










  <!-- footer -->
  
  <div class="footer_content" >

   
  </div>
  <footer class="">
    <h3 style="text-align: center; color: blanchedalmond;">Hobby hub</h3>

   
  </footer>




</body>
</html>




<?php } ?>