<?php
include('header.php');

if (isset($_POST['add-ctg'])) {

   
	$category_name = $_POST['ctg_name'];
   
	$sql = "INSERT INTO `corporate_category`(`ctg_name`) VALUES ('$category_name')";

  
	$result = mysqli_query($connect, $sql);
	

	if($result){
		
	
		header('location: category.php');

	}else{
	
		header('location: add-category.php');
		
	
	}
	
	

}
?>



<div id="page-wrapper" >

	<div id="page-inner">
    
		<div class="row">
        
			<div class="col-md-12">
            
				<h2>Add New Category</h2>   
                
			                
				
                
			</div>
            
		</div>
              
        
		<hr />
        
		<div class="row">
        
			<div class="col-md-6">
            
				
                
				<div class="panel panel-default">
                
					<div class="panel-heading">
                    
						Corporate Category
                        
					</div>
                    
					<div class="panel-body">
                    
						<div class="row">
                        
							<div class="col-md-12">
                            
								<h3>Add Category</h3>
                                
								<form role="form" method="post" action="" enctype="multipart/form-data">
                                       
                                
									<div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="ctg_name" />
                                           
                                        
									</div>
                                       
                                    
									<button type="submit" name="add-ctg" class="btn btn-info">Add Category</button>
                                        
                                   
								</form>
                                   
                                 
    
							</div>
                                
                                
                           
						</div>
                      
					</div>
                  
				</div>
                    
				
               
			</div>
           
		</div>
               
    
	</div>
            
           
</div>

<?php
include('footer.php');
?>