<!DOCTYPE html>
<html>
<head>
	<title>Mobile app & Website Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container">

	<div class="container-1">


		<a class="email_section" href="mailto:sales#conceptopensource.com">
			<i class="fa fa-envelope"></i>
			sales@conceptopensource.com
		</a>
	</div>

	<div class="container-2">

			<a class="phone_call"><i class="fa fa-phone"></i>
				+918780882871(INDIA)
			</a>

			<a class="phone_call2"><i class="fa fa-phone"></i>
				+918488956864(USA)
			</a> 

			</div>
		
	</div>


	</div>

	<div class="logo-menus">
	
	<div class="logosecton">
		<a href="https://conceptopensource.com">
			<img id="logo" src="https://www.conceptopensource.com/wp-content/themes/conceptopensource/images/logo.png">
		</a>
		

	</div>
	<div class="navbar">
			<ul class="nav-list">
				<li class="home"><a class="active" href="#">Home</a></li>
				<li>Developement</li>
				<li>Design</li>
				<li>Hire Developers</li>
				<li>Mobile Development</li>
				<li>Portfolio</li>
				<li>Company</li>
				<li>Blog</li>
				<li>Contact Us</li>

			</ul>
	</div>


</div>

<div class="slideshow-container">

 
    <img class="mySlides" src="https://www.conceptopensource.com/wp-content/uploads/2017/07/mobile-development.jpg" style="width:100%">
  
	<img class="mySlides"  src="https://www.conceptopensource.com/wp-content/uploads/2017/07/web-design.jpg" style="width:100%">

   	<img class="mySlides" src="https://www.conceptopensource.com/wp-content/uploads/2017/07/web-development-1.jpg" style="width:100%">
    
  	
  	<img class="mySlides" src="https://www.conceptopensource.com/wp-content/uploads/2017/07/outsource-partner.jpg" style="width: 100%">	

   
    
 
 


</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>

</div>

<div class="text">
	
		<h1 class="bigText">Best Mobile app & Website Design & Development Company</h1>
		<hr class="solid">
		<p class="homeText">Concept Open Source is leading best Mobile app & Website Design & Development Company. It is fastest growing website development and mobile app development company. We are expert in custom website and mobile app development. We have completed more than 750+ projects in web development. We provide the inclusive range of services for responsive web design & custom web development, custom web programming & redesigning, eCommerce web solutions, Internet Marketing Services, android and ios application development. We also provide services for hire dedicated 
</div>



<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  

  if (n > slides.length) {
  	slideIndex = 1
  }
  if (n < 1) {
  	slideIndex = slides.length;
  	
  	}
  for (i = 0; i < slides.length; i++) 
  {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {

      dots[i].className = dots[i].className.replace("active","");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


</script>
</body>
</html>