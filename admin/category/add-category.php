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
              <form method="POST" action="<?php echo SITE_URL?>submit/category_submit.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add category</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Add name">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> descreption:</label>
                  <textarea name="cat_desc" value=""></textarea>
                  </div>

                      <div class="custom-file">
                      <select name="status">
  <option value="">Select status</option>
  <option value="0">Active</option>
  <option value="1">Inactive</option>
</select>
                      
                      </div>
                     
                    </div>
                  </div>
                 
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit">Submit</button>
                </div>
              </form>
            </div>
         
            <?php include('../footer.php');?>