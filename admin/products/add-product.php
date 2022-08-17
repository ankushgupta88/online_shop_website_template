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

<?php 
// if(isset($_GET['id'])){
//    $id=$_GET['id'];
//                           }
//          else{
//     $id=1;
//              }
?> 
          <!-- left column -->
         
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo SITE_URL?>submit/product_submit.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">product_name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Add name">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">category_name</label>

                  <div class="form-group">        
<select name="type" id="cat">
	<option value="">--- Choose a category---</option>

</select>
                  </div>

                  <div class="form-group">
    <label for="exampleInputEmail1">Subcategory Name</label>
    <select name="type1" id="sub-cat">
        <option>Category</option>
        
        
    </select>
</div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mrp</label>
                    <input type="text" class="form-control" name="Mrp" placeholder="Add Mrp">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">price</label>
                    <input type="text" class="form-control" name="price" placeholder="Add price">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">quantity</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Add quantity">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_desc:</label>
                  <textarea name="meta_desc" value=""></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">desc_text</label>
                  <textarea name="desc_text" value=""></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">keyword</label>
                  <textarea name="keyword" value=""></textarea>
                  </div>

                  <div class="custom-file">
                            <input type="file" name="choosefile" value=""/><br>
                            
                            </div>
                 
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit">Submit</button>
                </div>
        </div>
              </form>
            </div>

            <script type="text/javascript" defer>

                   
</script> 
          


<script src="jquery-1.9.1.min.js"></script> 
<!-- CHANGE THE JQUERY FILE DEPENDING ON THE VERSION YOU HAVE DOWNLOADED -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<script>
$(document).ready(function(){
    
    function loadData(type2,id){
   $.ajax({
    url : "get_sub.php",
    type : "POST",
    data :{type2 : type2 , ids : id},
    success : function(data){
        if(type2=="sub"){
            $('#sub-cat').html(data);
        }else{
            $('#cat').append(data);
        }
   
    }
   });
    }
  loadData();
  $("#cat").on("change",function(){
  var cat =$("#cat").val();

  loadData("sub",cat);

  })

});
</script>
            <?php include('../footer.php');?>