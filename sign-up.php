<?php include('header.php');?>
<div class="col-lg-10 offset-lg-1">
          <form id="register" class="net" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="first_name" id="first_name" placeholder="Enter Your firstname" autocomplete="on" >
                </fieldset>
              </div>
			  <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="last_name" id="last_name" placeholder="Enter Your lastname" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="email" id="email" placeholder="Enter Your Email" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="password" name="pwd" id="pwd" placeholder="Enter Your password" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="phone" id="phone" placeholder="Enter Your phone" autocomplete="on" >
                </fieldset>
              </div>
			<div class="col-lg-6">
                <fieldset>  
              Gender:
	<input type="radio" name="gender" id="gender" value="female">Female
	<input type="radio" name="gender" id="gender" value="male">Male
	<input type="radio" name="gender" id="gender" value="other">Other
	</fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>  
                <input type="file" name="fileToUpload" id="fileToUpload">
              </div>
			  
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="button-register">submit</button>
                </fieldset>
              </div>
			   <div class="responce-loader text-center mb-3" style="display:none; width: 100px;
    height: 100px;">
					<img src="<?php echo WEBSITE_URL; ?>assets/images/loading-buffering.gif" class="img-responce-loader"> 
				</div>
				<div class="order_submit_responce text-center"></div>
            </div>
          </form>
        </div>
        <?php include('footer.php');?>