<?php
include 'header/header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="css/main2.css" />
<link rel="stylesheet" type="text/css" href="css/navstyle3.css" />


<link rel="stylesheet" type="text/css" href="css/slides2.css"/>
 
</head>

<body>
<div id="maindiv">
<header>

<div id="logodiv"><img src="images/logo/sajttc.jpeg" height="170px"></div>
<div id="navdiv">
  <nav>
    <ul>
      <li><a href="#"><img src="images/flags/srilanka.png"  class="flags"></a></li>
      <li><a href="#"><img src="images/flags/india.png"  class="flags" ></a></li>
      <li><a href="#"><img src="images/flags/pakisthan.png"  class="flags" ></a></li>
      <li><a href="#"><img src="images/flags/maldives.png" class="flags" ></a></li>
      <li><a href="#"><img src="images/flags/bhutan.png"  class="flags" ></a></li>
      <li><a href="#"><img src="images/flags/afganistan.png"  class="flags" ></a></li>
      <li><a href="#"><img src="images/flags/bangladesh.png" class="flags" ></a></li>
      <li><a href="#"><img src="images/flags/napal.png" class="flags" ></a></li>
    </ul>
  </nav>
</div>

</header>


<br />
<div id="navmenu">

 <nav class="skew-menu">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Score</a></li>
    <li><a href="#">Meddle</a></li>
    <li><a href="#">Schedule</a></li>
  </ul>
</nav>

</div>


<br />
<div id="slideshow">
			<div class="slideshow-container">
		<div class="mySlides fade">
			<img src="images\banner_tiger-2016.jpg"  height="300px" width="100%">
			
		</div>

		<div class="mySlides fade">
			<img src="images\banner_2.jpg"  height="300px" width="100%" >
		
		</div>

		<div class="mySlides fade" >
			<img src="images\banner_4.jpg"   height="300px" width="100%">
		
		</div>
		<br>

		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
	    </div>
		<br>

		<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					for (i = 0; i < slides.length; i++) {
					   slides[i].style.display = "none";
					}
					slideIndex++;
					if (slideIndex> slides.length) {slideIndex = 1}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";
					dots[slideIndex-1].className += " active";
					setTimeout(showSlides, 6000); // Change image every 6 seconds
				}
		</script>
	</div>
</div><!--end of slide div-->

	

<div id="leftdiv">
	


</div><!-- end of left div -->
	<div id="rightdiv">
		<div class="scoreboard">
        	<input type="image" src="images/flags/afganistan.png" height="50px" />
        </div>
        <div class="scoreboard"></div>
        <div class="scoreboard"></div>
        
        <br />
        <div class="scoreboard"></div>
        <div class="scoreboard"></div>
        <div class="scoreboard"></div>
        

   
    
  
 

	</div><!-- end of right div -->
</div>
</body>
</html>