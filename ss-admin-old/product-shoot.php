<?php
include('header.php');
?>
<div id="page-wrapper">          
    <div id="page-inner">              
        <div class="row">                	
            <div class="col-md-12">                 	
                <h2>Product Shoot</h2>                      		
                <h5>Welcome , Love to see you back. </h5>                   		
                <a href="add-product-img.php"> 		
                    <button class="btn btn-info" style="float: right; margin-right: 50px;"> Add New</button>		
                </a>		
            </div>               	
        </div>               		                 	
        <hr />                        	
        <div class="row">            	
            <div class="col-md-12">                				                 	
                <div class="panel panel-default">                    		
                    <div class="panel-heading">                      		
                        Product Shoot                     			
                    </div>                      		
                    <div class="panel-body">                           		
                        <div class="table-responsive">                            			
                            <table class="table table-striped table-bordered table-hover" id="wedding">
                                <thead>                                 				
                                    <tr>                                   				
                                        <th>#</th>                                  					
                                        <th>Image</th>                                    					
                                        <th>Date Added</th>                                     					
                                        <th>Actions</th>  					
                                    </tr>                                  				
                                </thead>                               				
                                <tbody>						
									<?php                                   
									$query=mysqli_query($connect,"SELECT * FROM `product_shoot`");
									while($prow = mysqli_fetch_array($query)){             
									?>				
                                    <tr class="odd gradeX">                                          				
                                        <td>											
											<?php echo $prow['ps_id']; ?>
                                        </td>       					
                                        <td>					
                                            <img src="uploads/product/<?php echo $prow['ps_img']; ?>" alt="" style="height: 100px;">					
                                        </td>                                           					
                                        <td class="center">											
											<?php echo $prow['ps_created_at']; ?>
                                        </td>                                            					
                                        <td class="center">					
                                            <a href="del-product.php?ps_id=<?php echo $prow['ps_id'] ?>">
                                                <button class="btn square-btn-adjust btn-danger">Delete</button>
                                            </a>					
                                        </td>                                        					
                                    </tr>									
									<?php										                                      
									}                
									?>			
                                </tbody>                                				
                            </table>                            			
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