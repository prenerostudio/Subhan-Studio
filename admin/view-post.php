<?php
include 'header.php';
$post_id = $_GET['post_id'];
$bsql=mysqli_query($connect,"SELECT * FROM `blog_post` WHERE `post_id` = '$post_id'");							
$brow = mysqli_fetch_array($bsql);


?>
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="col">
            <h2 class="card-title mb-4">View Post</h2>
        </div>
    </div>    
    <div class="row">        
        <div class="col-12">                
            <div class="card">                        
                <div class="card-header">                                
                    <div class="row align-items-center">                    
                        <div class="col">                                                                      
                            <h4 class="card-title">Edit Post</h4>                                                                          
                        </div>                                                                 
                    </div>                                                                 
                </div>                                
                <div class="card-body pt-0">                      		
                    <div class="row">                       
                        <form method="post" action="functions.php" enctype="multipart/form-data">
                            <div class=" mb-3">
                               
                                <input type="text" class="form-control" name="post_id" value="<?php echo $brow['post_id']; ?>">  				
                            </div>
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Post Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $brow['post_title']; ?>">  				
                            </div>
                             <div class=" mb-3">
                                 <img src="uploads/blog/<?php echo $brow['post_img']; ?>" alt="" height="200px">				
                            </div>
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Featured Image</label>
                                <input type="file" class="form-control" name="fi">				
                            </div>
                            <div class=" mb-3">
                                <label for="Product-Category" class="form-label">Post Description</label>
                                <textarea rows="9" class="form-control" name="desc"><?php echo $brow['post_details']; ?></textarea>
                                			
                            </div>
                            <div class="col-sm-12 text-end">                            			
                                <button type="submit" class="btn btn-primary px-4" name="update_post">				
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