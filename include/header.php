

<!--
Copyright (c) 2019 by Adeleye Ayodeji (https://adeleyeayodeji.com/)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
 <?php
      $con = mysqli_connect("localhost", "root", "", "imageextractor") or die();
      $query = mysqli_query($con, "SELECT * FROM userfile");
      $row = mysqli_fetch_assoc($query);
 ?>

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $row["description"]; ?>">
    <meta name="keyword" content="<?php echo $row["description"]; ?>">
    <title><?php echo $row["sitetitle"]; ?></title>
    		<link rel='stylesheet' href='css/style2.css'>
       	 <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
  	    <div class="ui container">
  	    	<!--Logo begins HERE -->
      	  <div class="ui header custom">
      	  		<a class="logo" href="<?php echo $_SERVER['PHP_SELF']; ?>"><img src="img/<?php echo $row['sitelogo']; ?>"></a>

  	    	<?php if (!isset($_SESSION["admin"])) {
  	    		echo ""?>
  	    		<div>
  	    			<a class="adminlink" href="admin/"><p class="adminlogin">Admin login</p></a>
  	    		</div>  
				 <?php "";
  	    	}  ?>
      	  </div>
           <!--Logo ends HERE -->

  		