<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact-Us</title>
<!-- bootstrap 4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- font-awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- <muli Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<!-- Lato google font -->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">   
<!-- work sans font -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/contact/contact.css">

</head>
<body>
<!-- The navigation bar -->
<header>
<!-- The navigation bar -->
<nav class="navbar navbar-expand-md  navbar-dark header-2" id="sect">
<img src="image/brand.png" alt="logo">
<button style="background: #1574CE;" class ="navbar-toggler"
type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse exp-colapse  right" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a explore class="nav-link exp" href="#" >About us</a>
</li>
<li class="nav-item">
<a class="nav-link exp second" href="#">Our Services</a>
</li>
<li class="nav-item">
<a class="nav-link exp third" href="#">Careers</a>
</li>                                  
<li class="nav-item">
<a class="nav-link exp fifth" href="#">Quality Assurance/HSE</a>
</li> 
<li class="nav-item right-btn">
<button type="submit">CONTACT US</button>
</li>        
</ul>
</div> 
</nav>  
</header>
<!-- End of header -->

<!-- MAIN -->
<!-- Top header -->
<main>
<div class="container-fluid top-header">

</div>

<!-- Enquiry form -->
<div class="container">
<div class="row d-flex-row justify-content-center">
<div class="left">
<h4>Enquiries</h4>
<form method="post">
<?php include "contact/contact.php";?>
<div class="form-group">
<label for="Name">Name *</label><br>
<input type="text" name="name" placeholder="Enter your name here" class="form-control" value="<?php if(isset($_POST['name'])): echo $_POST['name'];else:endif;?>">
</div>
<div class="form-group">
<label for="phonenumber">Phone Number *</label><br>
<input type="tel" name="phone" placeholder="Enter your phone number here" class="form-control" value="<?php if(isset($_POST['phone'])): echo $_POST['phone'];else:endif;?>">
</div>
<div class="form-group">
<label for="email address">Email Address *</label><br>
<input type="email" name="email" placeholder="Email address" class="form-control" value="<?php if(isset($_POST['email'])): echo $_POST['email'];else:endif;?>">
</div>
<div class="form-group">
<label for="message">Message *</label><br>
<textarea name="message" id="" cols="50" rows="7" class="form-control">
<?php if(isset($_POST['message'])): echo $_POST['message'];else:endif;?>
</textarea>
</div>
<input type="submit" name="submit">
</form>
</div>
<div class="right">
<img src="image/map.png" alt="Location map">
<div class="address">
<h6>Ribiax Engineering Limited</h6>
<p>No 6 Ajayi Street, Ile-Ile Bus Stop,<br>
Ketu, Lagos State <br>
Tel +234-(0) 703-555-5106; <br>
909-555-5106; 818-555-5106 </p>
<p>
<b>Email</b><br>
akpelupeterc@yahoo.com
akpelupeterc@ribiax.com
</p>
<p>
<b>Mobile Numbers</b><br>
+234(0) 703 555 5106, +234(0) 999 555 5106
</p>
</div>
</div>
</div>
</div>

<!-- Newsletter section -->
<section>
<div class="container-fluid newsletter">
<div class="row justify-content-center cen">
<img src="image/Group 561.png" alt="inbox image">      
</div>
<h4>Subscribe to our newsletter</h4>         
<div class="row justify-content-center"><input type="search" placeholder="Email Address"></div>
<div class="row justify-content-center"> <button type="submit">Search</button></div>
</div>
</section>

<!-- Footer section -->
<footer>
<div class="foot">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col left-column">
<p><a href="#">About us</a></p>
<p><a href="#">Our Services</a></p>
<p> <a href="#">Careers</a></p>
<p><a href="">Contact us</a></p>          
</div>
<div class="col left-column-2">
<p><a href="#">Quote</a></p>
<p><a href="#">HSE</a></p>
<p><a href="#">Terms of use</a></p>
<p><a href="#">Privacy Policy</a></p>    
</div>
<div class="col left-column-3">
<p>Ribiax Engineering Limited<br>
No. 6 Ajayi Street, Ile-lle Bus Stop Ketu,<br>
Lagos State.<br>
Tel +234-(0) 703-555-5106;<br>
909-555-5106; 818-555-5106</p>
</div>
<div class="col d-col">
<p>akpelupeterc@yahoo.com<br>
akpelupeterc@ribiax.com<br>
+234(0) 703 555 5106<br>
+234(0) 909 555 5106</p>
</div>
</div>
<div class="row  copy">
<p>Copyright 2020 Ribiax Engineering Limited</p>
<p second>All rights reserved worldwide</p>
</div>
</div>
</div>
</footer>
</main>
</main>

</body>
</html>