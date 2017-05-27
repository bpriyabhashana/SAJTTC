
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="shortcut icon" href="icon.ico">
<title>SAJTTC 2017 - COLOMBO</title>

<link href="css/outsource/app.css" rel="stylesheet">
<link href="css/outsource/main.css" rel="stylesheet">
<link href="css/outsource/alert.css" rel="stylesheet">
<link href="css/outsource/bodystyle.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/slides2.css"/>
<link rel="stylesheet" type="text/css" href="css/scoreboards.css"/>

<script src="js/sa.js"></script>
<script src="js/jq.js"></script>
<!--  <script src="http://io.rsvp.lk/build/js/vendor-19243d8f96.js"></script> 
<script src="http://io.rsvp.lk/js/plugins/sweetalert/sweetalert.min.js"></script>  -->


<link rel="stylesheet" href="css/outsource/fontawesome.css">
<link href="css/outsource/notosansfont.css" rel='stylesheet' type='text/css'>
<!-- <link href="https://fonts.googleapis.com/css?family=Nixie+One|Raleway:400,300,700|Noto+Sans" rel='stylesheet' type='text/css'> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
 -->




</head>


<body class="home-view"  style="background-color:  !important;">

<div id="context">


 
<div id="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color: #030327 !important">

<div class="container" >
<div class="navbar-header" >

 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse" style="height: 0px !important">

<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="col-md-12" >
<a class="navbar-brand" href="#" style="	padding-bottom: 56px;"><b style="color: #E8004C;"></b><b></b> 
<img src="images/logo/sajttc.png" id="logo" class="image-responsive"  ></a>

</div>
</div>



<div class="navbar-collapse collapse navbar-responsive-collapse" >
<ul class="nav navbar-nav pull-right">
<li><a href="" class="btn btn-primary" id="home" style="
					background-color: ;
					color:#fff;
					padding: 20px;
					text-transform:Capitalize
				
					">
HOME</a></li>


<li><a href="#about" class="btn btn-primary" id="aboutus" style="
					background-color: ;
					color:#fff;
					padding: 20px;
					text-transform:Capitalize;
					">ABOUT US</a></li>

<li><a href="#results" class="btn btn-primary" id="leaderboard" style="
					background-color: ;
					color:#fff;
					padding: 20px;
					text-transform:Capitalize
					">RESULTS</a></li>


</ul>
</div> 




</div> 
</div>




<div id="wrapper">
<div class="container">
<div class="row">
<div class="col-md-12"><!--flags-->
<marquee>

  <img src="images/flags/flagset.png" style="padding-top: 10px; padding-bottom: 5px; height: 70px"  >

</marquee>
</div><!-- end flags-->
<div class="col-md-12">
 

<div id="slideshow" class="col-md-12">
			<div class="slideshow-container">
		<div class="mySlides fade">
			<img src="images\slideimg.jpg" class="event_cover" height="100%" width="100%">
			
		</div>

		<div class="mySlides fade">
			<img src="images\slideimg2.jpg" class="event_cover" height="100%" width="100%" >
		
		</div>

		<div class="mySlides fade" >
			<img src="images\slideimg3.jpg" class="event_cover"  height="100%" width="100%">
		
		</div>
		<br>

		<div style="text-align:center">
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



</div>
</div>


<div class="row">

<div style="text-align:center" class="col-md-4">

<div class="panel panel-default" >

            <div class="panel-body" style="color:#767676; background-color: #7272e2">
            <center><h2>LEADERBOARD</h2></center>
            </div>
            
	<div style="border-bottom:1px solid #E2E2E2"></div>

	<div class="panel-body" style="color:#767676;">
       <!--  <br/>
        enter text here
        <p class="text-danger">text</p>
        <br/>
       		 -->
        <!--leaderboard table-->
         <?php
 include 'include/dbhandler.php';
      $sql = "SELECT country, gold, silver,bronz, points FROM leaderboard ORDER BY points DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

     echo "<table width='90%' height='300px' align='center' style='text-align:center;' >
     <tr>
     <th></th>
     <th><center><img src='images/meddles/gold.png' width='40px'></center></th>
     <th><center><img src='images/meddles/silver.png' width='40px'></center></th>
     <th><center><img src='images/meddles/bronz.png' width='40px'></center></th>
     <th><center>POINTS</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td style='text-align:left;'><img src='".$row["country"]."' width='40px'></td><td>".$row["gold"]."</td><td> ".$row["silver"]."</td><td>".$row["bronz"]."
        </td><td>".$row["points"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>  


<center> Leaderboard will be updated according to the meddle count.</center>

	</div>
<div style="border-bottom:1px dashed #E2E2E2"></div>

</div> <!-- End leaderboard -->


<div class="panel panel-default" ><!-- start recent div -->

            <div class="panel-body" style="color:#767676; background-color: #7272e2">
            <center><h2>Download Score Sheets</h2></center>
            </div>
            
	<div style="border-bottom:1px solid #E2E2E2"></div>

	<div class="panel-body" style="color:#767676;overflow-y: auto; height: 240px !important" >

		<!-- <?php
 include 'include/dbhandler.php';
      $sql = "SELECT  * FROM matchresult order by tableno desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

     echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='60%'><center><font size='1'>Match</font></center></th>
     <th width='20%'><center><font size='1'>Team1</font></center></th>
     <th width='20%'><center><font size='1'>Team2</font></center></th>
     <th width='5%'><center><font size='1'>Winner</font></center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='1'> ".$row["singledouble"]." | ".$row["agegroup"]." | ".$row["menwomen"]." <br>( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='20px'></td>
        <td> <img src=".$row["country2"]." height='20px'></td>
        <td><img src=".$row["matchwinner"]." height='20px'></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>   -->  <!--  end score table comment -->

<table class="table" style="text-align: center;">
	<tr>
		<td width="60%">Score sheet <br>(Day - 1)</td>
		<td width="40%"><a href="backup pages/a.pdf" target="_blank"><img src="images/down.png" width="40px"> Download</a></td>
	</tr>

</table>
	
	
	</div>
<div style="border-bottom:1px dashed #E2E2E2"></div>

</div>









<div class="panel panel-default" ><!-- start partner div -->

            <div class="panel-body" style="color:#767676; background-color: #7272e2">
            <center><h2>PARTNERS</h2></center>
            </div>
            
	<div style="border-bottom:1px solid #E2E2E2"></div>

	<div class="panel-body" style="color:#767676;">


	
	<img src="images/logo/sltta.png" width="80px" >&nbsp &nbsp &nbsp &nbsp
	<img src="images/sponsors/cmc.png" width="60px" >
		
		<hr>


       		<div class="col-md-4"><img src="images/sponsors/stag.png" width="90px" ></div>
       		<div class="col-md-4"><img src="images/sponsors/litro.png" width="80px" ></div>
       		<div class="col-md-4"><img src="images/sponsors/attu.png" width="110px" style="margin-bottom: 40px;" ></div>
	
       		<div class="col-md-4"><img src="images/sponsors/eh.png" width="80px"></div>
       		<div class="col-md-4"><img src="images/sponsors/melwa.jpg" width="90px" style="margin-top: 30px"></div>
       		<div class="col-md-4"><img src="images/sponsors/sl.jpg" width="100px"></div>
 
       		<div class="col-md-4"><img src="images/sponsors/rtnc.jpg" width="80px" style="margin-top: 30px;"></div>
       		
  
      
      
      
       
		
	</div>
<div style="border-bottom:1px dashed #E2E2E2"></div>

</div>


</div><!--end left-->





<div class="col-md-8">
<div class="panel panel-default" >
<div class="panel-body" style="color:#767676; padding-left:30px; padding-right:30px; background-color: #7272e2">

<center><h1 itemprop="name">SCORE BOARDS</h1>
</div></center>
<div style="border-bottom:1px solid #E2E2E2"></div>
<div class="panel-body" style="color:#767676; padding-left:30px">




<div id="rightdiv">


	
							<!-- ==================Score board 1=====================-->
		<div class="col-md-6" id="sc1">
        	<div class="mblock" style="height: auto;">
                 <center><h5 style=" font-size: 12px">

                  <?php
				 include 'include/dbhandler.php';
				      $sql = "SELECT * FROM tableresult WHERE tableno='1'";
				$result = $conn->query($sql);

				

				if ($result->num_rows > 0) {
				     // output data of each row
					while($row = $result->fetch_assoc()) {

						 echo'<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">';
                                                
                           echo $row['singledouble'].'/  '.$row['matchcat'];
                                                
                           echo' </b>';

                          echo '<br>';

				     echo '<img height="40px"  src="'.$row['country1'].'">';
				    // output data of each row
				 
                        echo '<img height="40px"  src="'.$row['country2'].'">';
              		

                   echo '</h5> </center>';
                    echo '<center>'.$row['agegroup'].' vs '.$row['menwomen'].'</center>';
               
               echo'<center> <hr style="margin-top: -3px;margin-bottom:0px ; width: 80%   "></center>';
                
                
                echo '<center><h5> <img height="20px"  src="'.$row['matchwinner'].'"> Won the match</h5></center><!--Add round number-->';

              /* echo '<center> <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   "></center>';*/
                               
                

		echo "<table width='80%'  align='center' style='text-align:center;' class='table' >
		<tr>
	        <td width='30%'>Round 1</td>
	        <td width='30%'>".$row["round1"]."</td>
	        <td width='30%'>  <img width='30px'  src=".$row['round1win']."></td>
      	</tr>
   

        <tr>
	        <td>Round 2</td>
	        <td>".$row["round2"]."</td>
	        <td> <img width='30px'  src=".$row['round2win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 3</td>
	        <td>".$row["round3"]."</td>
	        <td> <img width='30px'  src=".$row['round3win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 4</td>
	        <td>".$row["round4"]."</td>
	        <td> <img width='30px'  src=".$row['round4win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 5</td>
	        <td>".$row["round5"]."</td>
	        <td> <img width='30px'  src=".$row['round5win']."></td>
      	</tr>
    	</table>";


				}
				}
				
				$conn->close();
				?>

                

            </div><!--end of mb block-->
        
        </div><!--end of score board-->
        				
                        <!-- ==================Score board 2=====================-->
        
        <div class="col-md-6" id="sc2">
        	<div class="mblock" style="height: auto;">
                 <center><h5 style=" font-size: 12px">

                  <?php
				 include 'include/dbhandler.php';
				      $sql = "SELECT * FROM tableresult WHERE tableno='2'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				     // output data of each row
					while($row = $result->fetch_assoc()) {

						 echo'<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">';
                                                
                           echo $row['singledouble'].'/  '.$row['matchcat'];
                                                
                           echo' </b>';

                          echo '<br>';

				     echo '<img  height="40px"  src="'.$row['country1'].'">';
				    // output data of each row
				    
				
                        echo '<img  height="40px" src="'.$row['country2'].'">';
              		

                   echo '</h5> </center>';
                   echo '<center>'.$row['agegroup'].' vs '.$row['menwomen'].'</center>';
               
               echo'<center> <hr style="margin-top: -0px;margin-bottom:0px ; width: 80%   "></center>';
                
                
                echo '<center><h5> <img height="20px"  src="'.$row['matchwinner'].'"> Won the match</h5></center><!--Add round number-->';

              /* echo '<center> <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   "></center>';*/
                               
                

		echo "<table width='80%'  align='center' style='text-align:center;'  class='table' >
		<tr>
	        <td width='30%'>Round 1</td>
	        <td width='30%'>".$row["round1"]."</td>
	        <td width='30%'>  <img width='30px'  src=".$row['round1win']."></td>
      	</tr>
   

        <tr>
	        <td>Round 2</td>
	        <td>".$row["round2"]."</td>
	        <td> <img width='30px'  src=".$row['round2win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 3</td>
	        <td>".$row["round3"]."</td>
	        <td> <img width='30px'  src=".$row['round3win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 4</td>
	        <td>".$row["round4"]."</td>
	        <td> <img width='30px'  src=".$row['round4win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 5</td>
	        <td>".$row["round5"]."</td>
	        <td> <img width='30px'  src=".$row['round5win']."></td>
      	</tr>
    	</table>";


				}
				}
				$conn->close();
				?>

                

            </div><!--end of mb block-->
        
        </div><!--end of score board-->
        
                        <!-- ==================Score board 3=====================-->
        <div class="col-md-6" id="sc3">
        	
        	
        	<div class="mblock" style="height: auto;">
                 <center><h5 style=" font-size: 12px">

                  <?php
				 include 'include/dbhandler.php';
				      $sql = "SELECT * FROM tableresult WHERE tableno='3'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				     // output data of each row
					while($row = $result->fetch_assoc()) {

						 echo'<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">';
                                                
                            echo $row['singledouble'].'/  '.$row['matchcat'];
                                                
                           echo' </b>';

                          echo '<br>';

				     echo '<img  height="40px"  src="'.$row['country1'].'">';
				    // output data of each row
				 
                        echo '<img  height="40px"  src="'.$row['country2'].'">';
              		

                   echo '</h5> </center>';
                    
                echo '<center>'.$row['agegroup'].' vs '.$row['menwomen'].'</center>';
               
               echo'<center> <hr style="margin-top: -3px;margin-bottom:0px ; width: 80%   "></center>';
                
                
                echo '<center><h5> <img height="20px"  src="'.$row['matchwinner'].'"> Won the match</h5></center><!--Add round number-->';

             /*  echo '<center> <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   "></center>';*/
                               
                

		echo "<table width='80%'  align='center' style='text-align:center;'  class='table' >
		<tr>
	        <td width='30%'>Round 1</td>
	        <td width='30%'>".$row["round1"]."</td>
	        <td width='30%'>  <img width='30px'  src=".$row['round1win']."></td>
      	</tr>
   

        <tr>
	        <td>Round 2</td>
	        <td>".$row["round2"]."</td>
	        <td> <img width='30px'  src=".$row['round2win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 3</td>
	        <td>".$row["round3"]."</td>
	        <td> <img width='30px'  src=".$row['round3win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 4</td>
	        <td>".$row["round4"]."</td>
	        <td> <img width='30px'  src=".$row['round4win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 5</td>
	        <td>".$row["round5"]."</td>
	        <td> <img width='30px'  src=".$row['round5win']."></td>
      	</tr>
    	</table>";


				}
				}
				$conn->close();
				?>

                

            </div><!--end of mb block-->
        
        </div><!--end of score board-->
        				
   
        
        <br />
        
                        <!-- ==================Score board 4=====================-->
        <div class="col-md-6" id="sc4">
        	<div class="mblock" style="height: auto;">
                 <center><h5 style=" font-size: 12px">

                  <?php
				 include 'include/dbhandler.php';
				      $sql = "SELECT * FROM tableresult WHERE tableno='4'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				     // output data of each row
					while($row = $result->fetch_assoc()) {

						 echo'<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">';
                                                
                          echo $row['singledouble'].'/  '.$row['matchcat'];
                                                
                           echo' </b>';

                          echo '<br>';

				     echo '<img  height="40px"  src="'.$row['country1'].'">';
				    // output data of each row
				 
                        echo '<img  height="40px"  src="'.$row['country2'].'">';
              		

                   echo '</h5> </center>';
                    
               
               echo '<center>'.$row['agegroup'].' vs '.$row['menwomen'].'</center>';
               
               echo'<center> <hr style="margin-top: -3px;margin-bottom:0px ; width: 80%   "></center>';
                
                
                echo '<center><h5> <img height="20px"  src="'.$row['matchwinner'].'"> Won the match</h5></center><!--Add round number-->';

            /*   echo '<center> <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   "></center>';*/
                               
                

		echo "<table width='80%'  align='center' style='text-align:center;'  class='table' >
		<tr>
	        <td width='30%'>Round 1</td>
	        <td width='30%'>".$row["round1"]."</td>
	        <td width='30%'>  <img width='30px'  src=".$row['round1win']."></td>
      	</tr>
   

        <tr>
	        <td>Round 2</td>
	        <td>".$row["round2"]."</td>
	        <td> <img width='30px'  src=".$row['round2win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 3</td>
	        <td>".$row["round3"]."</td>
	        <td> <img width='30px'  src=".$row['round3win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 4</td>
	        <td>".$row["round4"]."</td>
	        <td> <img width='30px'  src=".$row['round4win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 5</td>
	        <td>".$row["round5"]."</td>
	        <td> <img width='30px'  src=".$row['round5win']."></td>
      	</tr>
    	</table>";


				}
				}
				$conn->close();
				?>

                

            </div><!--end of mb block-->
        
        </div>
        
                        <!-- ==================Score board 5=====================--> 
        <div class="col-md-6" id="sc5">
        	<div class="mblock" style="height: auto;">
                 <center><h5 style=" font-size: 12px">

                  <?php
				 include 'include/dbhandler.php';
				      $sql = "SELECT * FROM tableresult WHERE tableno='5'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				     // output data of each row
					while($row = $result->fetch_assoc()) {

						 echo'<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">';
                                                
                           echo $row['singledouble'].'/  '.$row['matchcat'];
                                                
                           echo' </b>';

                          echo '<br>';

				     echo '<img  height="40px"  src="'.$row['country1'].'">';
				    // output data of each row
				 
                        echo '<img  height="40px"  src="'.$row['country2'].'">';
              		

                   echo '</h5> </center>';
                    
               
                echo '<center>'.$row['agegroup'].' vs '.$row['menwomen'].'</center>';
               
               echo'<center> <hr style="margin-top: -3px;margin-bottom:0px ; width: 80%   "></center>';
                
                
                echo '<center><h5> <img height="20px"  src="'.$row['matchwinner'].'"> Won the match</h5></center><!--Add round number-->';

              /* echo '<center> <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   "></center>';*/
                               
                

		echo "<table width='80%'  align='center' style='text-align:center;'  class='table' >
		<tr>
	        <td width='30%'>Round 1</td>
	        <td width='30%'>".$row["round1"]."</td>
	        <td width='30%'>  <img width='30px'  src=".$row['round1win']."></td>
      	</tr>
   

        <tr>
	        <td>Round 2</td>
	        <td>".$row["round2"]."</td>
	        <td> <img width='30px'  src=".$row['round2win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 3</td>
	        <td>".$row["round3"]."</td>
	        <td> <img width='30px'  src=".$row['round3win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 4</td>
	        <td>".$row["round4"]."</td>
	        <td> <img width='30px'  src=".$row['round4win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 5</td>
	        <td>".$row["round5"]."</td>
	        <td> <img width='30px'  src=".$row['round5win']."></td>
      	</tr>
    	</table>";


				}
				}
				$conn->close();
				?>

                

            </div><!--end of mb block-->
        </div>
        
                        <!-- ==================Score board 6=====================--> 
        <div class="col-md-6" id="sc6">
        	<div class="mblock" style="height: auto;">
                 <center><h5 style=" font-size: 12px">

                  <?php
				 include 'include/dbhandler.php';
				      $sql = "SELECT * FROM tableresult WHERE tableno='6'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				     // output data of each row
					while($row = $result->fetch_assoc()) {

						 echo'<b class="text-uppercase" style="margin-left: 10px; margin-right: 10px">';
                                                
                         echo $row['singledouble'].'/  '.$row['matchcat'];
                                                
                           echo' </b>';

                          echo '<br>';

				     echo '<img  height="40px"  src="'.$row['country1'].'">';
				    // output data of each row
				 
                        echo '<img  height="40px"  src="'.$row['country2'].'">';
              		

                   echo '</h5> </center>';
                    
                echo '<center>'.$row['agegroup'].' vs '.$row['menwomen'].'</center>';
               
               echo'<center> <hr style="margin-top: -3px;margin-bottom:0px ; width: 80%   "></center>';
                
                
                echo '<center><h5> <img height="20px"  src="'.$row['matchwinner'].'"> Won the match</h5></center><!--Add round number-->';

          /*     echo '<center> <hr style="margin-top: -5px;margin-bottom:0px ; width: 80%   "></center>';*/
                               
                

		echo "<table width='80%'  align='center' style='text-align:center;'  class='table' >
		<tr>
	        <td width='30%'>Round 1</td>
	        <td width='30%'>".$row["round1"]."</td>
	        <td width='30%'>  <img width='30px'  src=".$row['round1win']."></td>
      	</tr>
   

        <tr>
	        <td>Round 2</td>
	        <td>".$row["round2"]."</td>
	        <td> <img width='30px'  src=".$row['round2win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 3</td>
	        <td>".$row["round3"]."</td>
	        <td> <img width='30px'  src=".$row['round3win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 4</td>
	        <td>".$row["round4"]."</td>
	        <td> <img width='30px'  src=".$row['round4win']."></td>
      	</tr>

      	 <tr>
	        <td>Round 5</td>
	        <td>".$row["round5"]."</td>
	        <td> <img width='30px'  src=".$row['round5win']."></td>
      	</tr>
    	</table>";


				}
				}
				$conn->close();
				?>

                

            </div><!--end of mb block-->
        </div>
        
  
   
    
  
 

	</div><!-- end of right div -->

<a href="" name="about"></a>

</div>


<div style="border-bottom:1px solid #E2E2E2"></div>
<div class="panel-body" style="text-align:justify; color:#767676; padding:30px">
<p style="text-align:justify" itemprop="description">Scoreboards will be updated after every matche. click RESULTS button to see other results </p>
</div>
</div>
<div class="slide">
</div>
</div>




<!--right div-->
</div>


<div style="text-align:center" class="col-md-12"> <!-- start about us -->
  <div class="panel-body" style="color:#767676; background-color: #6363ef">
    <center><h2>GALLERY</h2></center>
 </div>

<div class="panel panel-default"  style=" overflow-y: auto; height: 600px !important" >

          
            
	<div style="border-bottom:1px solid #E2E2E2"></div>

	<div class="panel-body" style="color:#767676;">
	<center><h3>Opening Ceremony</h3></center>
      
  <a target="_blank" href="images/gallery/1.jpg">
       <img src="images/gallery/1.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;" >
   </a>
      
       <img src="images/gallery/2.jpg" width="30%" class="col-md-4"  style="padding-bottom: 20px;">
       <img src="images/gallery/3.jpg" width="30%" class="col-md-4"  style="padding-bottom: 20px;">

       <img src="images/gallery/4.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;">
       <img src="images/gallery/5.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;">
       <img src="images/gallery/6.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;">

         <img src="images/gallery/7.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;">
       <img src="images/gallery/8.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;">
       <img src="images/gallery/9.jpg" width="30%" class="col-md-4" style="padding-bottom: 20px;">
   
	</div>
<div style="border-bottom:1px dashed #E2E2E2"></div>
</div>
</div> <!-- end about us -->

<a href="" name="results"></a>
<div style="text-align:center" class="col-md-12"> <!-- start match result -->
 <div class="panel-body" style="color:#767676; background-color: #6363ef; "  >
            <center><h2>TOTAL RESULTS</h2></center>
            <hr>

            <center> <font color="white">
             <a href="#jbs">Junior boys Single</a>   &nbsp  
             |  &nbsp  <a href="#jgs">Junior girls Single</a>  &nbsp 
             |   &nbsp <a href="#jbd">Junior boys double </a> 
              |   &nbsp <a href="#jgd">Junior girls double </a>
              <br>
               <a href="#cbs">Cadet boys single</a>  &nbsp  
               |   &nbsp <a href="#cgs">Cadet girls single</a>  &nbsp 
                |  &nbsp <a href="#cbd"> Cadet boys double</a>   &nbsp 
                |   &nbsp <a href="#cgd">Cadet girls double</a> </font></center>
            </div>

<div class="panel panel-default" style=" overflow-y: auto; height: 600px !important" >

           
            
	<div style="border-bottom:1px solid #E2E2E2"></div>

	<div class="panel-body" style="color:#767676;"> <!-- total result content -->
       

 <a href="" name="jbs"></a>
 <center><h3>Junior Boys Single</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='junior boys single'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'> ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  
 <a href="" name="jgs"></a>
 <center><h3>Junior Girls Single</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='junior girls single'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>   ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  


 <a href="" name="jbd"></a>
 <center><h3>Junior Boys Double</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='junior boys double'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>    ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  


 <a href="" name="jgd"></a>
 <center><h3>Junior Girls Double</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='junior girls double'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>   ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  

 <a href="" name="cbs"></a>
 <center><h3>Cadet Boys Single</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='cadet boys single' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>   ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  

 <a href="" name="cgs"></a>
 <center><h3>Cadet Girls Single</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='cadet girls single'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>   ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  


 <a href="" name="cbd"></a>

<center><h3>Cadet Boys Double</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='cadet boys double'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>   ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  

 <a href="" name="cgd"></a>
 <center><h3>Cadet Girls Double</h3></center>
   
		<?php
 include 'include/dbhandler.php';
      $sql = "SELECT tableno, matchcat, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult WHERE singledouble='cadet girls double'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row


		   echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     
     <th width='20%'><center>Match</center></th>
     <th width='15%'><center>Team 1</center></th>
     <th width='15%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
       
        <td style='text-align:left; padding-bottom:15px;'><b><font size='2'>   ".$row["agegroup"]." vs ".$row["menwomen"]." ( ".$row["matchcat"].")</font></b></td>
        <td><img src=".$row["country1"]." height='25px'></td>
        <td> <img src=".$row["country2"]." height='25px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src=".$row["matchwinner"]." height='25px'></td>
        </tr>";
    }
    echo "</table>";


  
} else {
    echo "0 results";
}
$conn->close();
?>  


	</div>  <!-- end of total result content -->
<div style="border-bottom:1px dashed #E2E2E2"></div>
</div>
</div> <!-- end match result -->





</div>
</div>
<div class="container" style="margin-bottom:25px; margin-top:25px">
<div class="row">
<div class="col-md-2" style="text-align:center"><img src="images/logo/sajttc.png" width="100px"></div>
<div class="col-md-2" style="text-align:center"><img src="images/logo/sltta.png" width="100px"></div>
<div class="col-md-2" style="text-align:center"><img src="images/sponsors/cmc.png" width="80px"></div>
<div class="col-md-2" style="text-align:center"><img src="images/sponsors/stag.png" width="120px"></div>
<div class="col-md-2" style="text-align:center"><img src="images/sponsors/litro.png" width="100px"></div>
<div class="col-md-2" style="text-align:center"><img src="images/sponsors/attu.png" width="200px"></div>
</div>
<div>
<div class="col-md-3" style="text-align:center"><img src="images/sponsors/melwa.jpg" width="100px" style="margin-top: 60px;"></div>
<div class="col-md-3" style="text-align:center"><img src="images/sponsors/sl.jpg" width="100px" style="margin-top: 30px;"></div>
<div class="col-md-3" style="text-align:center"><img src="images/sponsors/eh.png" width="100px" style="margin-top: 30px;"></div>
<div class="col-md-3" style="text-align:center"><img src="images/sponsors/rtnc.jpg" width="100px" style="margin-top: 30px;"></div>
</div>
</div>
<div class="container" style="margin-bottom:25px; margin-top:25px">
<div class="row">
<div class="col-md-4 col-sm-12">
<div class="g-plusone" data-annotation="inline" data-width="300" data-href="http://rsvp.lk"></div>
</div>
<div class="col-md-6 col-sm-12">
</div>
</div>
</div>
<hr style="border-top:1px solid #E2E2E2;;"/>
<div class="col-lg-12" style="text-align:center;letter-spacing: 1px;">
SUSL - Tech Team (Department of Computing & Information Systems)<br><br>

</div>
 

 

</div>
</body>
</html>
