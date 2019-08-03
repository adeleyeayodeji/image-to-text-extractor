
<?php include 'include/header.php'; ?>
	<!-- Change site logo here -->

		<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" value="999999999999999">
		<?php if (isset($_POST["updatelogo"])) {
					echo $posted;
				} ?>
			<div class="sitedesciption editor">
				<h3 align="left">Site logo:</h3>
				 <label class="custom-file-upload">
				 	<input type="hidden" name="default" value="<?php echo $row['sitelogo']; ?>">
                  		 <input id="file" type="file" name="sitelogo" onchange="proccess(window.lastFile=this.files[0])">  
                           <div class="content image">
                             <!--Sample image uploaded begins HERE -->
                            <img id="image" style="width: 20%;height: auto;cursor: pointer;" class="ui centered large image" src="../img/<?php echo $row['sitelogo']; ?>"/>
                             <!--Sample image uploaded ends HERE -->
                          </div>
                  		      <center>Upload Image</center>
      		      </label>          
			</div>
			<!-- Update button here -->
			<div class="fifteen wide column" style="margin-top: 20px;">
		        <center><button class="ui button logo" name="updatelogo">Update </button></center>
		    </div>
		</form>

	<!-- Site logo ends here -->
	<form action="" method="post">
			<!-- Change site title here -->
			<?php if (isset($_POST["update"])) {
					echo $posted;
				} ?>
			<div class="sitedesciption editor">
				<h3 align="left">Site Title:</h3>
			 <p>
				<textarea name="sitetitle"><?php echo $row["sitetitle"]; ?></textarea>			          
			</p>
			</div>

			<!-- Change site description here -->

			<div class="sitedesciption editor">
				<h3 align="left">Site description:</h3>
			 <p>
				<textarea name="description"><?php echo $row["description"]; ?></textarea>			          
			</p>
			</div>
			<!-- Change site footer here -->

			<div class="sitedesciption editor">
				<h3 align="left">Footer Text:</h3>
			 <p>
				<textarea name="footer"><?php echo $row["footer"]; ?></textarea>			          
			</p>
			</div>
			<!-- Change ads 1 here -->

			<div class="sitedesciption editor">
				<h3 align="left">Ads 1 script:</h3>
			 <p>
				<textarea name="ads1"><?php echo $row["ads1"]; ?></textarea>			          
			</p>
			</div>
			<!-- Change ads 2 here -->
			<div class="sitedesciption editor">
				<h3 align="left">Ads 2 script:</h3>
			 <p>
				<textarea name="ads2"><?php echo $row["ads2"]; ?></textarea>			          
			</p>
			</div>
			<!-- Change username here -->
			<div class="sitedesciption editor">
				<h3 align="left">Username:</h3>
			 <p>
				<textarea name="username"><?php echo $row["username"]; ?></textarea>			          
			</p>
			</div>
			<!-- Change Email here -->
			<div class="sitedesciption editor">
				<h3 align="left">Email:</h3>
			 <p>
				<textarea name="email"><?php echo $row["email"]; ?></textarea>			          
			</p>
			</div>
			<!-- Change Password here -->
			<div class="sitedesciption editor">
				<h3 align="left">Password:</h3>
			 <p>
				<textarea name="password"><?php echo $row["password"]; ?></textarea>			          
			</p>
			</div>
			<!-- Update button here -->
			<div class="fifteen wide column" style="margin-top: 20px;">
		                  <center><button class="ui button" name="update">Update </button></center>
		    </div>
	</form>
	
<?php include 'include/footer.php'; ?>