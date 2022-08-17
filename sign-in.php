<?php
// if(!isset($_SESSION["shopping_cart"])){

// }
 include('header.php');?>
<div class="login-page-new">LOGIN</div>
<div class="col-lg-10 offset-lg-1">
   <form id="login" class="net" action="submit/sign_submit.php" method="POST">
       <div class="col-lg-12">
					<fieldset>
					  <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="on" required>
					</fieldset>
				  </div>
				  <div class="col-lg-12">
					<fieldset>
					  <input type="text" name="pwd" id="pwd" placeholder="Enter Your Password" required>
					</fieldset>
				  </div>
          <button type="submit" name="submit">Submit</button>
				 <p class="mb-1">
					<a href="forgot-password.html">I forgot my password</a>
					 </p>
					 <p class="mb-0">
					<a href="register.php"class="text-center">Register</a>
		        </p>
            
	</form>
				  
				  </div>
<?php include('footer.php');?>