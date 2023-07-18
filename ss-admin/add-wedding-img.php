<?php
include('header.php');


if (isset($_POST['upload'])) {

   
	$target = "uploads/wedding/" . basename($_FILES['image']['name']);
   
	$wedding_image = $_FILES['image']['name'];
   
	move_uploaded_file($_FILES['image']['tmp_name'], $target);
   
	$insert_wedding = "INSERT INTO `wedding_shoot`(`wedding_img`) VALUES ('$wedding_image')";

  
	$insert_query = mysqli_query($connect, $insert_wedding);
	

	if($insert_query){
		
	
		header('location: wedding.php');

	}else{
	
		header('location: add-wedding-img.php');
		
	
	}
	
	

}



?>



<div id="page-wrapper" >

	<div id="page-inner">
    
		<div class="row">
        
			<div class="col-md-12">
            
				<h2>Add New Image</h2>   
                
				<h5>Wedding Image. </h5>
                
				
                
			</div>
            
		</div>
              
        
		<hr />
        
		<div class="row">
        
			<div class="col-md-6">
            
				
                
				<div class="panel panel-default">
                
					<div class="panel-heading">
                    
						Wedding Shoot
                        
					</div>
                    
					<div class="panel-body">
                    
						<div class="row">
                        
							<div class="col-md-12">
                            
								<h3>Add Wedding Image</h3>
                                
								<form role="form" method="post" action="" enctype="multipart/form-data">
                                       
                                
									<div class="form-group">
                                    
										<label>Select Image to Upload</label>
                                        
										<input type="file" name="image" />
                                       
									</div>
                                       
                                    
									<button type="submit" name="upload" class="btn btn-info">Upload</button>
                                        
                                   
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