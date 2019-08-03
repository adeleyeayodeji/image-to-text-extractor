<?php include 'include/header.php'; ?>
        <div class="sitedesciption">
          <h3 class="text">
          <?php echo $row["description"]; ?>
          </h3>
        </div>
        <div class="ui grid stackable">
          <div class="row">
            
            <!--Choose image upload begins HERE -->
            <div class="fifteen wide column">
              <div class="ui card">
                <div class="content">
                  <h2 class="header">Choose image to convert</h2>
                </div>
                <div class="content extra">
                    <label class="custom-file-upload">
                  		 <input id="file" type="file" onchange="proccess(window.lastFile=this.files[0])">  
                           <div class="content image">
                             <!--Sample image uploaded begins HERE -->
                            <img id="image" style="width: 100%;height: auto;cursor: pointer;" class="ui centered large image" src="img/capture.png"/>
                             <!--Sample image uploaded ends HERE -->
                          </div>
                  		      <center>Upload Image</center>
      		          </label>
                </div>
               
              </div>
            </div>
            <!--Choose image upload ends HERE -->
            <!-- Ads 1 start here -->
             <div class="sitedesciption ads">
               <?php echo $row['ads1']; ?>
             </div>            
             <!-- Ads end here -->
            <!--Choose image outputs begins HERE -->  
            <div class="fifteen wide column" style="margin-top: 10px;">
              <div class="ui card">
                <div class="content">
                  <h2 class="header">Your result here</h2>
                </div>
                <div class="content content-result">
                  <div class='ui grid'>
                    <div class='row result'>
                      <div class="column placeholder">
                        No Output <br/>
                        <span>Choose a file to start</span>    
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
             <!--Choose image outputs ends HERE -->
              <!-- Ads start here -->
             <div class="sitedesciption ads">
                <?php echo $row['ads2']; ?>
             </div>            
             <!-- Ads end here -->
               <!--Reset button begins HERE -->
              <div class="fifteen wide column" style="margin-top: 20px;">
                  <center><a class="ui button" href="<?php echo $_SERVER['PHP_SELF']; ?>">Reset Output</a></center>
              </div>
              <!--Reset button ends HERE -->

          </div>
        </div>
       
<?php include 'include/footer.php'; ?>