<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Ristorante Con Fusion</title>
    
</head>

<body>
   <nav class="navbar navbar-dark navbar-expand-sm fixed-top"> 
       <div class="container">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
              <span class="navbar-toggler-icon"></span>
           </button>
              <a class="navbar-brand mr-auto" href="#"> <img src="./img/logo.png" alt="logo" height="30" width="41"> </a>
          <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"> <a class="nav-link" href="#"> <span class="fa fa-home fa-lg"></span> Home</a></li>
              <li class="nav-item"> <a class="nav-link" href="./aboutus.html"> <span class="fa fa-info fa-lg"></span> About</a></li>
              <li class="nav-item"> <a class="nav-link" href="#"><span class=" fa fa-list fa-lg"></span> Menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
            </ul>
            <span class="navbar-text">
                <a id="login">
                <span class="fa fa-sign-in"></span> Login</a>
            </span>
          </div>
       </div>
 </nav>
 <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login </h4>
                <button type="button" class="close"data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1"  id="exampleInputEmail3" placeholder="Enter email">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="sr-only" for="exampleInputPassword3">Password</label>
                            <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                        </div>
                        <div class="col-sm-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header align-items-center">
                <div class="col-12 col-sm-6">
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-12 col-sm-3 align-self-center"> 
                    <img src="./img/logo.png" class="img-fluid" alt="logo">

                    </div>
                    <div class="col-12 col-sm-3 align-self-center"> 
                        <a class=" btn btn-sm btn-warning btn-block text-center"
                            id="reserve" role="button" >Reserve a Table</a>
                 </div>
            </div>
        </div>
    </header>

    <div id="reservetable" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reserve a Tabel </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="reserve.php" method="POST">
                        <div class="form-group row">
                                <label for="numofguest" class="col-md-2 col-form-label"> Number Of Guests</label>
                            <div class="  col-md-10 ">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="1" name="radio" value="1"required>
                                    <label class="form-check-label" for="1">1</label>
                               </div>
                               <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="2" name="radio" value="2"required>
                                    <label class="form-check-label" for="2">2</label>
                                </div>
                               <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="3" name="radio" value="3"required>
                                <label class="form-check-label" for="3">3</label>
                                 </div>
                                <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="4" name="radio" value="4"required>
                                <label class="form-check-label" for="4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="5" name="radio" value="5"required>
                                <label class="form-check-label" for="5">5</label>
                                 </div>
                                 <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="6" name="radio" value="6" required >
                                <label class="form-check-label" for="6">6</label>
                                </div>
                           </div>
                       </div>
                       <div class="form-group row">
                        <label for="section" class="col-md-2 col-form-label">Section</label>
                        <div class="  col-md-10 ">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-success btn-sm">
                                  <input type="radio" class="form-check-input" name="options" id="option1" value="non-smoking" required > Non-Smoking
                                </label>
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-danger btn-sm">
                                  <input type="radio" class="form-check-input" name="options" id="option2" value="smoking" required> Smoking
                                </label>
                              </div>
                       </div>
                      </div>
                       
                         <div class="form-group row">
                              <label for="telnum" class=" col-12 col-md-2 col-form-label">Date and Time</label>
                              <div class=" col-12 col-md-5"> 
                                <input type="text" class="form-control" id="date" name="date" placeholder="Date" required>
                               </div> 
                               <div class=" col-12 col-md-5"> 
                                <input type="text" class="form-control" id="time" name="time" placeholder="Time" required>
                               </div>
                         </div>   
                         <div class="form-group row">
                                <div class="col-md-1 offset-2">
                                 <button type="submit" class="btn btn-secondary btn-sm" data-dismiss="modal">
                                  Cancel
                                 </button>
                              </div>
                              <div class="col-md-1">
                                <button type="submit" class="btn btn-primary btn-sm">
                                 Reserve
                                </button>
                             </div>
                          </div>
                 </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-content">
            <div class="col">
               <div id="mycarousel" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active">
                           <img class="d-block img-fluid"
                               src="img/uthappizza.png" alt="Uthappizza">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Uthappizza <span class="badge badge-danger">HOT</span>
                                   <span class="badge badge-pill badge-secondary">$4.09</span>
                                   </h2>
                                   <p class=" d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>             
                           </div>
                       </div>
                       <div class="carousel-item">
                        <img class="d-block img-fluid"
                        src="img/buffet.png " alt="buffet">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Weekend Grand Buffet <span class="badge badge-danger">NEW</span>
                            </h2>
                            <p class=" d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>         
                        </div>      
                       </div>
                       <div class="carousel-item">
                        <img class="d-block img-fluid"
                        src="img/alberto.png " alt="alberto">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Alberto Somayya</h2>
                            <h4>Executive Chef</h4>
                            <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide
                                International experience having worked closely with
                                whos-who in the culinary world, he specializes in
                                creating mouthwatering Indo-Italian fusion experiences.
                                </p>
                        </div>

                       </div>
                   </div>
                   <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                   </ol>
                   <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                        <button class="btn btn-danger btn-sm" id="carouselButton">
                            <span class="fa fa-pause"></span>
                        </button>

             </div>
            </div>
        </div>
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4  order-sm-last col-md-3 ">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img  class="d-flex mr-3 img-thumbnail align-self-center"src="./img/Uthappizza.png" alt="Uthappizza">
                    <div class="media-body">
                        <h2 class="mt-0">Uthappizza <span class="badge badge-danger">HOT</span>
                        <span class="badge badge-pill badge-secondary">$4.09</span>
                        </h2>
                        <p class=" d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                    </div>
                    
                </div>
                
            </div>
        </div>


        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4  col-md-3 ">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                     <div class="media-body">
                        <h2 class="mt-0">Weekend Grand Buffet <span class="badge badge-danger">NEW</span>
                        </h2>
                        <p class=" d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                    </div>
                    <div class="media-right">
                    <img  class="d-flex mr-3 img-thumbnail align-self-center"src="img/buffet.png" alt="buffet"></div>
                 </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3 ">
                <h3>Meet our Culinary Specialists</h3>
            </div>
            
            <div class="col col-sm col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="img/alberto.png" alt="Alberto Somayya">
                    <div class="media-body">
                        <h2 class="mt-0">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide
                            International experience having worked closely with
                            whos-who in the culinary world, he specializes in
                            creating mouthwatering Indo-Italian fusion experiences.
                            </p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                
                 <div class="col-12 col-sm-4 align-self-center">
                     <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i> </a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i> </a>
                        <a  class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i> </a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>   
                 </div>
                 
                
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto ">
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>
 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
 <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
</body>


</html> 