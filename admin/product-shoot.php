<?php
include 'header.php';
?>           
<div class="container-xxl"> 	
    <div class="row">    
        <div class="col-12">        	
            <div class="card">            	
                <div class="card-header">                		
                    <div class="row align-items-center">                    		
                        <div class="col">                                              			
                            <h4 class="card-title">Product Shoot</h4>                                                  			
                        </div>			
                        <div class="col-auto"> 											
                            <a href="add-product.php" class="btn btn-primary" >			
                                <i class="fa-solid fa-plus me-1"></i> 													
                                Add Product												
                            </a>			
                        </div>						                        			
                    </div>					                    		
                </div>				                		
                <div class="card-body pt-0">                                                    		
                    <div class="table-responsive">                    		
                        <table class="table mb-0 checkbox-all" id="datatable_1">                        			
                            <thead class="table-light">                            			
                                <tr>                                				
                                    <th style="width: 16px;">                                    				
                                        <div class="form-check mb-0">                                        					
                                            <input type="checkbox" class="form-check-input" name="select-all" id="select-all">					
                                        </div>                                        					
                                    </th>                                    				
                                    <th class="ps-0">Image</th>				                                   				
                                    <th class="text-end">Action</th>                                    				
                                </tr>                                				
                            </thead>                            			
                            <tbody> 								 
                                <?php                                
                                $psql=mysqli_query($connect,"SELECT * FROM `product_shoot`");                                
                                while($prow = mysqli_fetch_array($psql)){                                    
                                    ?>  																				                                
                                <tr>                                				
                                    <td style="width: 16px;">                                    				
                                        <div class="form-check">                                        					                                            
                                            <input type="checkbox" class="form-check-input" name="check"  id="customCheck1">					
                                                <?php echo $prow['ps_id'];?>                                        
                                        </div>                                        					
                                    </td>                                    				
                                    <td class="ps-0"> 						                                        
                                        <img src="uploads/product/<?php echo $prow['ps_img'];?>" alt="" height="70">										                                           				                                  																									
                                        <p class="d-inline-block align-middle mb-0">					
                                            <a href="#" class="d-inline-block align-middle mb-0 product-name">												
                                                <?php echo $prow['ps_img']; ?>
                                            </a>					
                                            <br>                                                           					
                                            <span class="text-muted font-13">												
                                                <?php echo $prow['ps_created_at']; ?>
                                            </span>                                                       					
                                        </p>                                                   					
                                    </td>				                                    				
                                    <td class="text-end">				                                                                                        					
                                        <a href="del-product.php?ps_id=<?php echo $prow['ps_id']?>">					
                                            <i class="las la-trash-alt text-secondary fs-18"></i>					
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
<?php
include 'footer.php';
?>