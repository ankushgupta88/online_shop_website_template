<?php include('../header.php');?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<style>form {
    margin-left: 250px;
}
textarea {
    height: 200px;
    width: 100%;
}</style>
</head>
</body>


          <!-- left column -->
         
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo SITE_URL?>submit/sub_submit.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" class="form-control" name="sub_name" placeholder="Add name">
                  </div>


                  <div class="form-group">
                  <label for="exampleInputEmail1">category_name</label>

                  <?php 
                  //GET CATEGORY
                  $sli_select = "SELECT * FROM category WHERE status='0'";
$sli_result = mysqli_query($conn,$sli_select);?>
<select name="category_name">
	<option value="">--- Choose a category---</option>
  <?php while ($values = mysqli_fetch_assoc($sli_result)){?>
	<option value="<?php echo $values["cat_id"];?>"><?php echo $values["cat_name"];?></option>
	<?php } ?>
</select>
                  </div>
                  </div>
                 
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit">Submit</button>
                </div>
              </form>
            </div>
         
            <?php include('../footer.php');?>