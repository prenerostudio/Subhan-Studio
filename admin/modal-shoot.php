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
                            <h4 class="card-title">Modal Shoot</h4>                                                  			
                        </div>			
                        <div class="col-auto"> 											
                            <a href="add-modal.php" class="btn btn-primary" >			
                                <i class="fa-solid fa-plus me-1"></i> 													
                                Add Modal												
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
                                $msql=mysqli_query($connect,"SELECT * FROM `modal_shoot`");                                
                                while($mrow = mysqli_fetch_array($msql)){                                    
                                    ?>  																				                                
                                <tr>                                				
                                    <td style="width: 16px;">                                    				
                                        <div class="form-check">                                        					                                            
                                            <input type="checkbox" class="form-check-input" name="check"  id="customCheck1">					
                                                <?php echo $mrow['mi_id'];?>                                        
                                        </div>                                        					
                                    </td>                                    				
                                    <td class="ps-0"> 						                                        
                                        <img src="uploads/modal/<?php echo $mrow['mi_img'];?>" alt="" height="70">										                                           				                                  																									
                                        <p class="d-inline-block align-middle mb-0">					
                                            <a href="#" class="d-inline-block align-middle mb-0 product-name">												
                                                <?php echo $mrow['mi_img']; ?>
                                            </a>					
                                            <br>                                                           					
                                            <span class="text-muted font-13">												
                                                <?php echo $mrow['mi_created_at']; ?>
                                            </span>                                                       					
                                        </p>                                                   					
                                    </td>				                                    				
                                    <td class="text-end">				                                                                                        					
                                        <a href="del-modal.php?mi_id=<?php echo $mrow['mi_id']?>">					
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