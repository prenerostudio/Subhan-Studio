<?php
include('header.php');
if (isset($_POST['upload'])) {
    $target = "uploads/modal/" . basename($_FILES['image']['name']);   
    $modal_image = $_FILES['image']['name'];   
    move_uploaded_file($_FILES['image']['tmp_name'], $target);   
    $sql = "INSERT INTO `modal_shoot`(`img_name`) VALUES ('$modal_image')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: modal.php');	        
    }else{		
        header('location: add-modal-img.php');				        
    }		
}
?>
<div id="page-wrapper">	
    <div id="page-inner">
        <div class="row">        	
            <div class="col-md-12">            	
                <h2>Add New Modal Image</h2>                		
            </div>            	
        </div>                      	
        <hr />        	
        <div class="row">        	
            <div class="col-md-6">            				                	
                <div class="panel panel-default">                		
                    <div class="panel-heading">                    		
                        Modal Shoot                        			
                    </div>                    		
                    <div class="panel-body">                    		
                        <div class="row">                        			
                            <div class="col-md-12">                            			
                                <h3>Add Modal Image</h3>                                				
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