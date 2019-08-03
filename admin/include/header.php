<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header("location: login.php");
}
?>
<!--
Copyright (c) 2019 by Adeleye Ayodeji (https://adeleyeayodeji.com/)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
<?php 
            if(isset($_SERVER['HTTPS']) &&  
              $_SERVER['HTTPS'] === 'on') 
           $link = "https"; 
                else
                $link = "http"; 
                
              // Here append the common URL  
              // characters. 
              $link .= "://"; 
                    
              // Append the host(domain name, 
              // ip) to the URL. 
              $link .= $_SERVER['HTTP_HOST']; 

 ?>

<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    		<link rel='stylesheet' href='../css/style2.css'>
       	 <link rel="stylesheet" href="../css/style.css">
  </head>

  <body style="background: #1d3a75;">
  	    <div class="ui container">
  	    	<!--Logo begins HERE -->
      	  <div class="ui header custom">
      	  		<a class="logoadmin" href="<?php echo $_SERVER['PHP_SELF']; ?>">Admin Page</a>
              <a class="logoadmin" href="<?php echo $link.'/image-to-text-extractor/'; ?>">Homepage</a>
      	  </div>
              <div class="ui header custom">
              <a class="logoadmin" href="logout.php">Logout</a>
          </div>
          <?php
            //Update logo here
             if (isset($_POST['updatelogo'])) {
              $con = mysqli_connect("localhost", "root", "", "imageextractor") or die();
                  $target = "../img/".basename($_FILES['sitelogo']['name']);
              $sitelogo = $_FILES['sitelogo']['name'];
              $query = mysqli_query($con, "UPDATE userfile SET sitelogo='$sitelogo' ") or die();
              if (move_uploaded_file($_FILES['sitelogo']['tmp_name'], $target)) {
              $posted = "<p class='message'>Posted Successfully</p>";
            }else{
              $posted = "<p class='messageerror'>Error Posting!!!</p>";
            }
            }

            // Upadte file here
            if (isset($_POST['update'])) {
              $con = mysqli_connect("localhost", "root", "", "imageextractor") or die();
              $sitetitle = $_POST['sitetitle'];
              $description = $_POST['description'];
              $footer = $_POST['footer'];
              $ads1 = $_POST['ads1'];
              $ads2 = $_POST['ads2'];
              $username = $_POST['username'];
              $password = $_POST['password'];
              $email = $_POST['email'];
              $query = mysqli_query($con, "UPDATE userfile SET sitetitle='$sitetitle', description='$description', footer='$footer', ads1='$ads1', ads2='$ads2', username='$username', password='$password', email='$email' ") or die();
              if ($query) {
                $posted = "<p class='message'>Posted Successfully</p>";
              }else{
              $posted = "<p class='messageerror'>Error Posting!!!</p>";
            }
                }

                          if (isset($_SESSION["admin"])) {
                          $con = mysqli_connect("localhost", "root", "", "imageextractor") or die();
                          $query = mysqli_query($con, "SELECT * FROM userfile");
                          $row = mysqli_fetch_assoc($query);
                        }
                    ?>
           <!--Logo ends HERE -->

  		