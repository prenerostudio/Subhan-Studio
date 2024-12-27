<?php
include('header.php');
if (isset($_POST['upload'])) {
    $target = "uploads/baby/" . basename($_FILES['image']['name']);
    $baby_image = $_FILES['image']['name'];           
    move_uploaded_file($_FILES['image']['tmp_name'], $target);   
    $sql = "INSERT INTO `baby_shoot`(`bs_img`) VALUES ('$baby_image')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			        
		header('location: baby-shoot.php');	        
    }else{		
        header('location: baby-shoot.php');				        
    }		
}
?>
<div id="page-wrapper">	
    <div id="page-inner">    
        <div class="row">                    	
            <div class="col-md-12">            	
                <h2>Add New Baby Image</h2>
			</div>
        </div>                      	
        <hr />        	
        <div class="row">        	
            <div class="col-md-6">            				                	
                <div class="panel panel-default">                		
                    <div class="panel-heading">                    		
                        Baby Shoot                        			
                    </div>                    		
                    <div class="panel-body">                    		
                        <div class="row">                        			
                            <div class="col-md-12">                            			
                                <h3>Add Baby Image</h3>                                				
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