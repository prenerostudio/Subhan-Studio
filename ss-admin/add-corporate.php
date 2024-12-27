<?php
include('header.php');
if (isset($_POST['upload'])) {
    $ctg = $_POST['ctg'];
    $target = "uploads/corporate/" . basename($_FILES['image']['name']);
    $corporate_image = $_FILES['image']['name'];   
    move_uploaded_file($_FILES['image']['tmp_name'], $target);   
    $sql = "INSERT INTO `corporate_images`(`ci_img`, `ci_category`) VALUES ('$corporate_image','$ctg')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: corporate-img.php');	        
    }else{		
        header('location: add-corporate.php');				        
    }		
}
?>
<div id="page-wrapper">	
    <div id="page-inner">
        <div class="row">        	
            <div class="col-md-12">            	
                <h2>Add Corporate Image</h2>		
            </div>
        </div>                      	
        <hr />        	
        <div class="row">        	
            <div class="col-md-6">            				                	
                <div class="panel panel-default">                		
                    <div class="panel-heading">                    		
                        Corporate Shoot                        			
                    </div>                    		
                    <div class="panel-body">
                        <div class="row">                        			
                            <div class="col-md-12">                            			
                                <h3>Add Corporate Image</h3>
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Select Image to Upload</label>
                                        <input type="file" name="image" />
                                    </div>
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <select class="form-control" name="ctg">
											<option value=" ">Select category</option>
											<?php
											$query=mysqli_query($connect,"SELECT * FROM `corporate_category`");
											while($crow = mysqli_fetch_array($query)){
											?>
                                            <option value="<?php echo $crow['ctg_id']; ?>">
												<?php echo $crow['ctg_name']; ?>   
                                            </option>
											<?php
											}
											?>										  
                                        </select>                                        					
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