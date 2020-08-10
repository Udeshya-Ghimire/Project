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
              <a class="navbar-brand mr-auto" href="./index.php"> <img src="./img/logo.png" alt="logo" height="30" width="41"> </a>
          <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item "> <a class="nav-link" href="./index.php"> <span class="fa fa-home fa-lg"></span> Home</a></li>
              <li class="nav-item"> <a class="nav-link" href="./aboutus.php"> <span class="fa fa-info fa-lg"></span> About</a></li>
              <li class="nav-item active"> <a class="nav-link" href="#"><span class=" fa fa-list fa-lg"></span> Menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
            </ul>
            <span class="navbar-text">
                <a id="login">
                <span class="fa fa-sign-in"></span>Login</a>
            </span>
          </div>
       </div>
 </nav>
 <div class="container">
 <div class="row row-content">
             <div class="col-12 col-sm-9">
              <h2>Table Reserved</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Number of guests</th>
                            <th>Smoking or Non-smoking</th>
                            <th>date</th>
                            <th>time</th>
</tr>
                    <?php
                        $con = mysqli_connect("localhost","root","","reservedata");

                           if($con){
                                 //echo "connected successful";
                            }else{
                                   // echo "not connected";

                            }
                            $sql= "SELECT id, guests, section, date, time from reserveinfo";
                            $result = $con-> query($sql);

                            if($result->num_rows > 0){
                                while($row = $result-> fetch_assoc()){
                                    echo"<tr><td>".$row["id"]."</td><td>".$row["guests"]."</td><td>".$row["section"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
                                } 
                                echo "</table>";

                            }
                            else{
                                echo "result not found";
                            }
                        $con->close();

                    ?>
                    
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
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
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