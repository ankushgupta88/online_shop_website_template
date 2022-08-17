
<?php 
//session_start();
include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">


    <!-- Breadcrumb Start -->
    
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div> 
    <!-- Breadcrumb End -->

  

<?php 
       
        ?>
    

    <form action="#" method="POST" id="checkout_form_new" novalidate="novalidate">
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <?php if(!isset($_SESSION["login"])){ 
                                
                                ?>
                                <input class="form-control" type="text" placeholder="Enter your name" value="" name="first_name" id="first_name">
                                <?php } else { 
                                     $checkout = $_SESSION["login"];
                                     $checkout1 = implode(',',$checkout);
                                     $check_select = "SELECT * FROM `shoping_table` WHERE id ='$checkout1'";
                                     $check_query = mysqli_query($conn,$check_select);
                                     $check_show = mysqli_fetch_assoc($check_query); 
                                    
         ?>
        
                            <input class="form-control" type="text" placeholder="Enter your name" value="<?php echo $check_show['first_name'];?>" name="first_name" id="first_name"> <?php } ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <?php if(!isset($_SESSION["login"])){ ?>
                            <input class="form-control" type="text" placeholder="Doe" value ="" name="last_name" id="last_name">
                            <?php } else { ?>
                                <input class="form-control" type="text" placeholder="Doe" value ="<?php echo $check_show['last_name'];?>" name="last_name" id="last_name"><?php } ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>email-</label>
                            <?php if(!isset($_SESSION["login"])){ ?>
                            <input class="form-control" type="text" placeholder="example@email.com" value ="" name="email" id="email">
                            <?php } else { ?>
                                <input class="form-control" type="text" placeholder="example@email.com" value ="<?php echo $check_show['email'];?>" name="email" id="email"><?php } ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <?php if(!isset($_SESSION["login"])){ ?>
                            <input class="form-control" type="text" placeholder="+123 456 789" value ="<?php //echo $check_show['phone'];?>" name="mobile" id="mobile">
                            <?php } else { ?>
                                <input class="form-control" type="text" placeholder="+123 456 789" value ="<?php echo $check_show['phone'];?>" name="mobile" id="mobile"><?php } ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="123 Street"  name="Address" id="Address">
                        </div>
                     
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select" name="Country" id="Country">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="" name="City" id="City">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="" name="State" id="State">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123" name="Code" id="Code">
                        </div>
                      
                     
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
            <?php               $sub_total = 0;
                        $total1 = 0;
                if(isset($_SESSION['shopping_cart'])){ ?>
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <?php 
                       
                        foreach($_SESSION['shopping_cart'] as $keys => $value){
                            $total = $value['price_tag'] * $value['quantity_tag'];?>

                            <?php//send price?>
                            <!-- <input class="form-control" type="hidden"  name="price" value="<?php //echo $total ?>"> -->


                        <div class="d-flex justify-content-between">
                            <p><?php echo $value['product_name'];?></p>
                            <p>$<?php echo $total;
                            ?></p>
                        </div><?php 
                     $sub_total += ($value["quantity_tag"] * $value["price_tag"]);
                     //  echo $sub_total;exit;
                              $total1 +=  ($value["quantity_tag"] * $value["price_tag"]);
                    }
                    
                    ?>
                    </div>
                    
                    <?php 
                     
                            //  $sub_total += ($values["quantity_tag"] * $values["price_tag"]);
                            //  $total += ($values["quantity_tag"] * $values["price_tag"]); 
                
                } ?>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$<?php echo number_format($sub_total, 2);?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$0:00</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?php echo number_format($total1, 2);?></h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal" value="Paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck" value="Direct Check">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer" value="Bank Transfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3 submit-payment-button" name="submit">Place Order</button>
                        
                        <div class="payment_responce"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
          
    






    <!-- Checkout Start -->
    
    <!-- Checkout End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <?php include('footer.php');?>