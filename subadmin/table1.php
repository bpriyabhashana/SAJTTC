<?php 
    session_start();
    if ($_SESSION['uname']==NULL) {
        header('Location:  ../formpage/login.php');
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/table.css" />
<link rel="stylesheet" type="text/css" href="../css/formselect.css" />

</head>

<body>
<form action="../include/logout.php">
       <button type="submit" id="logout">LOG OUT</button>
       </form>
<div id="maindiv">
<div id="scoreboard">
 <div class="form-style-6" id="formdiv">
        <h1>Update Score</h1>

<form action="../include/enterresult.php" method="POST">
	<center><select name="singledouble" size="1" >
         <option value="-">--Select match--</option>
         <option value="junior boys single">junior boys single</option>
          <option value="junior girls single">junior girls single</option>
           <option value="junior boys double">junior boys double</option>
            <option value="junior girls double">junior girls double</option>
             <option value="cadet boys single">cadet boys single</option> 
             <option value="cadet girls single">cadet girls single</option>
             <option value="cadet boys double">cadet boys double</option>
             <option value="cadet girls double">cadet girls double</option>              
    </select></center>
    
    <input type="text" name="agegroup">
    <!-- <select name="agegroup" size="1" >
         <option value="-">--Select Age Group--</option>
         <option value="Cadet">Cadet</option>
         <option value="Junior">Junior</option>        
    </select> -->
    
     <input type="text" name="menwomen">
     <!-- <select name="menwomen" size="1" >
         <option value="-">--Select Match--</option>
         <option value="Boys">Boys</option>
         <option value="Girls">Girls</option>        
    </select> -->

   <center>
       <select name="matchcat" size="1" >
         <option value="-">--Select Type--</option>
         <option value="Group">Group</option>
         <option value="Semi">Semi</option> 
         <option value="Final">Final</option>         
    </select>
   </center> 
    

    
    <center>  <select name="country1" size="1"  >
         <option value="images/flags/blank.png">--Select country--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select>
    
     <select name="country2" size="1"  >
         <option value="images/flags/blank.png">--Select country--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select></center>
    
   
    
 
    
     <hr />
  
    
     <select name="tableno" size="1" id="round" >
         <option>--Select Table--</option>
         <option value="1">Table 1</option>
         <option value="2">Table 2</option>
         <option value="3">Table 3</option>
         <option value="4">Table 4</option>
         <option value="5">Table 5</option>
          <option value="6">Table 6</option>
    </select>

   
 </center>
    
    
   <hr />
   
  
    
    <table width="70%" align="center">
    <tr>
    	<th> </th>
        <th>Country 1</th>
        <th> Country 2</th>
         <th> </th>
    </tr>
    
     <!-- =============round 1============== -->
    <tr>
    	<td><h3>Round 1 : </h3></td>
        <td> <input type="text" id="round1_1" size="20" name="round1" autocomplete="off" ></td>
        <td>  <select name="round1win" size="1"  >
         <option value="images/flags/blank.png">--Select country--</option>
        <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select></td>
         <td> </td>
    </tr>
    
     <!-- =============round 2============== -->
    <tr>
    	<td><h3>Round 2 : </h3></td>
        <td> <input type="text" id="round2_1" size="20" name="round2"  autocomplete="off"></td>
        <td>  <select name="round2win" size="1"  >
         <option value="images/flags/blank.png">--Select country--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select></td>
         <td> </td>
    </tr>
    
     <!-- =============round 3============== -->
    <tr>
    	<td><h3>Round 3 : </h3></td>
        <td> <input type="text" id="round3_1" size="20" name="round3"  autocomplete="off"></td>
        <td> <select name="round3win" size="1" >
        <option value="images/flags/blank.png">--Select country--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select></td>
         <td> </td>
    </tr>
    
     <!-- =============round 4============== -->
    <tr>
    	<td><h3>Round 4 : </h3></td>
        <td> <input type="text" id="round4_1" size="20" name="round4"  autocomplete="off"></td>
        <td>  <select name="round4win" size="1"  >
         <option value="images/flags/blank.png">--Select country--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select></td>
         <td> </td>
    </tr>
    
     <!-- =============round 5============== -->
    <tr>
    	<td><h3>Round 5 : </h3></td>
        <td> <input type="text" id="round5_1" size="20" name="round5"  autocomplete="off"></td>
        <td>  <select name="round5win" size="1"  >
        <option value="images/flags/blank.png">--Select country--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>
         <option value="images/flags/napal.png">Napal</option>
    </select></td>
         <td></td>
    </tr>
    </table>
    <center> <select name="matchwinner" size="1"  >
         <option value="images/flags/blank.png">--Select winner--</option>
         <option value="images/flags/srilanka.png">Sri Lanka</option>
         <option value="images/flags/india.png">India</option>
         <option value="images/flags/pakisthan.png">Pakisthan</option>
         <option value="images/flags/bangladesh.png">Bangladesh</option>
         <option value="images/flags/maldives.png">Maldives</option>		
         <option value="images/flags/napal.png">Napal</option>
    </select></center>
  
    <center> <input type="submit"  value="submit" id="resultsubmit"> 

     <input type="reset"  value="RESET"  id="resultreset"/>

     </form>   
    

     <!-- delete record form -->
<div  style="margin-top: 50px !important">
      <h1>Delete Record From Result Table</h1>
    <form action="../include/deleterecord.php" method="POST">
  
   <center><h5>Enter Match ID for Delete Record</h5></center>
     <center><input type="text" id="rowdelete" size="20" name="matchid" placeholder="ID"  autocomplete="off" >
   </center>

   
      <center> <input type="submit"  value="DELETE RECORD" id="resultsubmit"> 


     </center>
</form>

<div class="panel-body" style="color:#767676; overflow-y: auto; height: 300px; margin-bottom: 100px; border: solid !important"  >
       
   
        <?php
 include '../include/dbhandler.php';
      $sql = "SELECT tableno, singledouble, agegroup, menwomen, country1, country2, round1, round2, round3, round4, round5, matchwinner FROM matchresult";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

     echo "<table width='90%' align='center' style='text-align:center;' class='table'>
     <tr>
     <th width='5%'><center></center></th>
     <th width='25%'><center>Match</center></th>
     <th width='10%'><center>Team 1</center></th>
     <th width='10%'><center>Team 2</center></th>
     <th width='30%'><center>Score</center></th>
     <th width='20%'><center>Winner</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>
        <td><font size='2px'>".$row["tableno"]."</font></td>
        <td style='text-align:left; padding-bottom:15px;'><b>".$row["singledouble"]." | ".$row["agegroup"]." | ".$row["menwomen"]."</b></td>
        <td><img src='../".$row["country1"]."' width='40px'></td>
        <td> <img src='../".$row["country2"]."' width='40px'></td>
        <td>".$row["round1"]." , ".$row["round2"]." , ".$row["round3"]." , ".$row["round4"]." , ".$row["round5"]."</td>
        <td><img src='../".$row["matchwinner"]."' width='40px'></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
echo "<hr>"
?>  



    </div>
</div>

 <!-- end delete record form -->

     </center>
 </center>
 





<!-- form for update leaderboard -->


  <h1>Update Leaderboard</h1>

<div style="width: 50%;float: left;">

      

<form action="../include/updateleaderboard.php" method="POST">
   <center><select name="id" size="1"  >
         <option value="">--Select country--</option>
         <option value="1">Sri Lanka</option>
         <option value="2">India</option>
         <option value="3">Pakisthan</option>
         <option value="4">Bangladesh</option>
         <option value="5">Maldives</option>
         <option value="6">Napal</option>
    </select></center> 
    
   
     <center><input type="text" id="gold"  size="20" name="gold" placeholder="Gold"  autocomplete="off" >
    <input type="text" id="silver" size="20"  name="silver" placeholder="Silver"  autocomplete="off">
    <input type="text" id="bronz" size="20"  name="bronz" placeholder="Bronz"  autocomplete="off"> </center>

    <script>
function calcpoints() {
    var gold = parseInt(document.getElementById("gold").value);
    var silver = parseInt(document.getElementById("silver").value);
    var bronz = parseInt(document.getElementById("bronz").value);
    
    var points = gold*3 + silver*2 + bronz*1;
    
    
    document.getElementById("totalpoints").value = points;
}
</script>

     <center><input type="button" onclick="calcpoints()" value="Get Points" id="getpoints"> </center>
     <center><input type="text" id="totalpoints" size="20" name="points" placeholder=""  autocomplete="off" ></center>

      <center> <input type="submit"  value="submit" id="resultsubmit"> 

     <input type="reset"  value="RESET"  id="resultreset"/>
     </center>
</form>

</div>
<div style="width: 48%;float: right;">
    
    <div class="panel panel-default" >

            <div class="panel-body" style="color:#767676; background-color: #04bcd4">
            
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
 include '../include/dbhandler.php';
      $sql = "SELECT country, gold, silver,bronz, points FROM leaderboard ORDER BY points DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

     echo "<table width='90%' height='400px' align='center' style='text-align:center;'>
     <tr>
     <th></th>
     <th><center><img src='../images/meddles/gold.png' width='40px'></center></th>
     <th><center><img src='../images/meddles/silver.png' width='40px'></center></th>
     <th><center><img src='../images/meddles/bronz.png' width='40px'></center></th>
     <th><center>POINTS</center></th>
     </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td style='text-align:left;'><img src='../".$row["country"]."' width='40px'></td><td>".$row["gold"]."</td><td> ".$row["silver"]."</td><td>".$row["bronz"]."
        </td><td>".$row["points"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>  


    </div>

</div> <!-- end -->



</div><!--end of form style-->



</div> <!--end of score board-->






</div> <!--end of main div-->


</body>
</html>