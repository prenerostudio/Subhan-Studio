<?php
include 'header.php';
?>
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="col">
            <h2 class="card-title mb-4">Corporate Shoot Image</h2>
        </div>
    </div>    
    <div class="row">        
        <div class="col-4">                
            <div class="card">                        
                <div class="card-header">                                
                    <div class="row align-items-center">                    
                        <div class="col">                                                                      
                            <h4 class="card-title">Add New Corporate</h4>                                                                          
                        </div>                                                                 
                    </div>                                                                 
                </div>                                
                <div class="card-body pt-0">					                        	
                      		
                    <div class="row">                       
                        <form method="post" action="functions.php" enctype="multipart/form-data">
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Product Image</label>
                                <select class="form-control" name="ctg_id">											
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
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Corporate Image</label>
                                <input type="file" class="form-control" name="ci">				
                            </div>				
                            <div class="col-sm-12 text-end">                            			
                                <button type="submit" class="btn btn-primary px-4" name="ci">				
                                    Upload Image			
                                </button>				
                            </div>                              
                        </form> 			
                    </div>  
                </div>                
            </div>
        </div> 
           
    </div>                                 
</div>  
<?php                
include 'footer.php';                
?>