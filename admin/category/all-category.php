<?php include('../header.php');

$query_select = "SELECT * FROM category WHERE status ='0'";
$query_select = mysqli_query($conn,$query_select);
?>
<style>img {
    width: 100px;
}</style>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
              </div>
              <!-- /.card-header -->
			 <?php if(mysqli_num_rows($query_select)>= 1){?>
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
				<div class="row">
				<div class="col-sm-12 col-md-6">
				</div><div class="col-sm-12 col-md-6">
				</div>
				</div>
				<div class="row">
				<div class="col-sm-12">
				<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
			  <tr role="row">
			  <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
			  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">name</th>
			  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">action</th>
			  
             
            
			  </tr>
                  </thead>
                  <tbody>
  
                  <?php while($row = mysqli_fetch_assoc($query_select)){ ?>
                  <tr class="odd">
                    <td class="sorting_1 dtr-control" tabindex="0"><?php echo $row['cat_id']?></td>
                
				 
                    <td class="sorting_1 dtr-control" tabindex="0"><?php echo $row['cat_name']?></td> 
                 
                                      

                    
                 
                    
					
					<td class="sorting_1 dtr-control" tabindex="0"><a href="edit.php?idt=<?php echo $row['cat_id']?>">EDIT</a>||<a href="edit.php?idt=<?php echo $row['id']?>">DELETE</a></td>
                  </tbody><?php } ?> 
                </table></div></div></div>
			 </div><?php } ?>
              <!-- /.card-body -->
            </div>
			<?php include('../footer.php');?>