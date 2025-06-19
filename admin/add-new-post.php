<?php
include 'header.php';
?>
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="col">
            <h2 class="card-title mb-4">New Post</h2>
        </div>
    </div>    
    <div class="row">        
        <div class="col-12">                
            <div class="card">                        
                <div class="card-header">                                
                    <div class="row align-items-center">                    
                        <div class="col">                                                                      
                            <h4 class="card-title">Add New Post</h4>                                                                          
                        </div>                                                                 
                    </div>                                                                 
                </div>                                
                <div class="card-body pt-0">                      		
                    <div class="row">                       
                        <form method="post" action="functions.php" enctype="multipart/form-data">
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Post Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Post Title Here....">  				
                            </div>
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Featured Image</label>
                                <input type="file" class="form-control" name="fi">				
                            </div>
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Post Description</label>
                                <textarea rows="9" class="form-control" name="desc"></textarea>
                                			
                            </div>
                            <div class="col-sm-12 text-end">                            			
                                <button type="submit" class="btn btn-primary px-4" name="new_post">				
                                    Upload Post			
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