<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
    <link rel="stylesheet" href="css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
<script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>


 <script src="js/all.min.js"></script>

   
    <title> main </title>
<style>

.navbar-brand{
	font-family: 'Ubuntu', sans-serif;
	font-size: 2em;
	font-weight: bold;
	color:#fff;
}

.customclass a{
	color:#fff !important;
}
 .ab{
	color:red;
} 
.customclass-item:hover{
	background-color: #dc3545;
	border: solid #dc3545 1px;
	border-radius: 10px;

}
.removempfrmcon{
	margin: 0px;
	padding: 0px;
}
.abc{
	
	position: relative;
     
	}
video{
	     position: relative;
		height:100%;
    width:100%;
    
	}
.overmake{
	position: absolute;
    top:0;
    left:0;
    height:100%;
    width:100%;
    background-color:#225470;
    z-index: 1;
    opacity: 0.2; 
}
.content{
	position: absolute;
	z-index: 2;
	top:35%;
	left:35%;
	text-align: center;
	color:#fff;
}
.bottom-banner a{
     color:#fff;
     text-decoration: none;
}
.bottom-banner a:hover{
	color:aqua;
	
}
.bottom-banner{
	height:60px;
}
.col-sm{
	text-align:center;
	padding-top:15px;
}

.cardsystem{
	margin-top: 20px;
}
h3{
	font-size:35px;
	font-weight:200;
	letter-spacing:3px;
	text-shadow:1px 1px 2px red;  
}
 h1{
	margin:30px 0 20px 0;
	font-size:55px;
	font-weight:700;
	text-shadow:2px 1px 5px red;
	
	
}
h5{
	margin:30px 0 20px 0;
	font-size:50px;
	font-weight:700;
	text-shadow:2px 1px 5px red;
	color:yellow;
	/*background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)) */
	opacity:0.5;
	
}
.changecontent:after{
	   content:'';
	animation:change_text 10s infinite linear;
	color:#00b894; 

	
}
@keyframes change_text{
	0%{content:'1 Time';}
	20%{content:'2 Time';}
	35%{content:'3 Time';}
	60%{content:'4 Time';}
	80%{content:'5 Time';}
	100%{content:'6 Time';}
}
 .btn1{
 /*	background:#00b894; */
 background:#00b894;
 /* fff is code of white color */
 color:#000;
	
 
}
 .btn1:hover{
	
	background:#fff; 
/* background:#fff; */
 /* fff is code of white color */
 color:#000;
/* background:red; */

}
.btn2{
 background:red; 
/* background:#fff; */
 /* fff is code of white color */
 color:#000;
/* background:red; */
	
 
}
.btn2:hover{
	/*	background:#00b894; */
 background:#fff;
 /* fff is code of white color */
 color:#000;

	
}
.carousel-inner img{
       height:300px;
       width:1100px;
}

.stripe{
	background-image: linear-gradient(240deg , #ed213a , #93291e);
	padding:3rem;
	height:13rem;
	margin-top: 10rem;
	transform:rotate(10deg);
	z-index:-5;
	margin-left: 3rem;
}
.footer{
         
    opacity: 1.2; 

}





* {box-sizing: border-box}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}

</style>
</head>
<body>
	<!--start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.html">EMS</a>
 
 <a class="navbar-brand" href="index.html"><img src="images/lions.jpg" style="height:100px; width:100px;" class="rounded-circle img-fluid" >
 </a>
 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav customclass pl-5 ml-auto">
      <li class="nav-item  customclass-item ">
        <a class="nav-link  disabled"   href="#">Home </a>
      </li>
      <li class="nav-item customclass-item">
        <a class="nav-link disabled" href="about.php">About</a>
      </li>
      <li class="nav-item customclass-item">
        <a class="nav-link disabled" href="#">Services</a>
      </li>
      <li class="nav-item customclass-item">
        <a class="nav-link disabled" href="#">Gallery</a>
      </li>
    </ul>
  </div>
</nav>
<!--end navigation -->

<div class="container-fluid removempfrmcon ">
	<!--start video background-->
	
	<div class="abc">
		<video playsinline autoplay muted loop>
			<source src="images/k.vid" type="video/mp4">
			</video>
			<div class="overmake"> </div>
		</div>

<div class="content">
	<h3 class="mycntnt">Welcome To MY Website</h3>
	<small class="mycntnt"><h1>Visit & Cheack <span class="changecontent"></span></h1></small>
	<a href="#" class="btn btn1" data-toggle="modal" data-target="#myModal"> SignIn </a>&nbsp &nbsp &nbsp
	<a href="#" class="btn btn2" data-toggle="modal" data-target="#myModal1">About me</a>



</div>
<!--end video background-->

</div>
<div class="container-fluid bg-danger txtbanner ">
	<div class="row bottom-banner">
		<div class="col-sm">
			<a href="#"><i class="fab fa-whatsapp mr-3"></i>100+</a>
		</div>
		<div class="col-sm">
			<a href="#"><i class="fas fa-users mr-3"></i>100+</a>
		</div>
	<div class="col-sm">
			<a href="#"><i class="fas fa-envelope mr-3"></i>100+</a>
		</div>
	<div class="col-sm">
			<a href="#"><i class="fab fa-apple mr-3"></i>100+</a>
		</div>
		<div class="col-sm">
			<a href="#"><i class="fab fa-facebook mr-3"></i>100+</a>
		</div>
	<div class="col-sm">
			<a href="#"><i class="fab fa-whatsapp mr-3"></i>100+</a>
		</div>
	
	
	</div>
	</div>

<div class="container cardsystem">
	<center><h1>OUR TEAM</h1></center>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/a4.jpg" alt="Card image" style="width:100% ; height:230px;">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-12">
  
  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/aa.jpg" alt="Card image" style="width:100%; height:230px;">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  
  </div>
  <div class="col-lg-4 col-md-6 col-sm-12">
  
  <div class="card" style="width:300px">
    <img class="card-img-top" src="images/aa.jpg" alt="Card image" style="width:100%; height:230px;">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  
  </div>
  </div >
 </div>
     <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login_Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="login.php" method="post" name="lgnform" id="lgnform" onsubmit="return q()">
   

 <div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email"required>
    </div>

<div class="form-group">
      <label for="usr">Password:</label>
      <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter Your Password"required>
    </div>
   

 <center> <button type="submit" class="btn btn-info " name="login" >Login</button>&nbsp &nbsp &nbsp
  <button type="reset" class="btn btn-secondary  " name="reset" >Cancel</button></center>


</form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
<div class="modal" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">About Me</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
      <p>it is my  website created by me during the class-room</p>
<p>I am looking an entry level web developer in php where i work with exprienced team and can learn a lot of things.</p>

<p>I have done BCA from MCU Bhopal</p>
<p>I have learnt a lot of thing during creating this website</p>
<p>Used HTML/CSS  ,javascript, Bootstrap, and PHP while creating this website</p>



        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

	
</div>

	
</div>

<div class="container mt-4" id =" contact">
<hr style="height:2px; background:black">
<center><h5 style="color:black">CONTACT ME</h5></center>
	
	<div class="row">
		
		<div class="col-sm-6 col-offset">
			

<form action="" method="post" name="lgnform" id="lgnform" onsubmit="return q()">
   
<div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email" style="width:100%; background-color:#d9d9d9; padding:5px; border-bottom:2px solid red; "required>
    </div>

 <div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email" style="width:100%; background-color:#d9d9d9; padding:5px; border-bottom:2px solid red; "required>
    </div>

<div class="form-group">
      <label for="usr">Password:</label>
      <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter Your Password" style="width:100%; background-color:#d9d9d9; padding:5px; border-bottom:2px solid red; "required>
    </div>
   <div class="form-group">
      <label for="usr">Subject:</label>
    <textarea name="replymessage" rows="5" style="width:100%; background-color:#d9d9d9; padding:5px; border-bottom:2px solid red; " class="form-control" placeholder="reply message...."  required></textarea>

    </div>


 <center> <button type="submit" class="btn btn-info btn2 " name="login" >Submit</button>&nbsp &nbsp &nbsp
  <button type="reset" class="btn btn-secondary btn1 " name="reset" >Cancel</button></center>


</form>


		</div>

<div class="col-md-4 stripe text-white text-center">
<h4>Address<h4>
	<p>Bobina Hotel<br>gorakhpur<br>27003<br>mob:6386309770</p>

</div>
		
	</div>

	</div>
	<div class="container-fluid removempfrmcon mt-5">
	
	<div class="slideshow-container">

<div class="mySlides">
<img src="images/lions.jpg" style="height:100px; width:100px;" class="rounded-circle img-fluid" ><br>

  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
  <p class="author">- Ajay Mourya</p>
</div>

<div class="mySlides">
<img src="images/hands.jpg" style="height:100px; width:100px;" class="rounded-circle img-fluid" ><br>

  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
  <p class="author">- Kishan Mourya</p>
</div>

<div class="mySlides">
<img src="images/lions.jpg" style="height:100px; width:100px;" class="rounded-circle img-fluid" ><br>

  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Atul upadhyay</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



</div>
	<div class="container-fluid bg-dark txtbanner footer ">
	<div class="row bottom-banner">
		
	</div>
	</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

	                        
</body>
</html>