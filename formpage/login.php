<?php
include '../header/header.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/form.css">


<title>Login Page</title>

</head>

<body> 
 <div id="maindiv">

      
   <div id="leftdiv"></div>
   <div id="rightdiv">
      <h1 align="center">Log in</h1>
        <hr />
        <div class="form-style-6" id="formdiv">
        <h1>Log in</h1>
        <form action="../include/login.php" method="POST">
        
          
              
             
               <input name="root" type="text" maxlength="40" placeholder="Enter Name"  autocomplete="off"/>

                 <?php
                  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  if (strpos($url, 'error=empty')!== false) {
                    echo "<font color='red'> *Enter your name </font>";
                  }

                ?>

             
             <input name="uname" type="text" maxlength="40" placeholder="User Name"  autocomplete="off" />
          
          
         
              <input name="password" type="password" maxlength="40" placeholder="Password"/>
              <br>
              <?php
               $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  if (strpos($url, 'error=notmatch')!== false) {
                    echo "<font color='red'>  *Incorrect password or username </font>";
                  }
                ?>
              
          <?php
                  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  if (strpos($url, 'error=empty')!== false) {
                    echo "<font color='red'> *Fill all required empty fields </font>";
                  }

                ?>
          
         <input type="submit">
        
        </form>
        </div>
        
    </div>
</div>
   
</body>
 </html>
