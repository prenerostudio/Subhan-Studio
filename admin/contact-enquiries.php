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
                            <h4 class="card-title">Contact Enquiries</h4>                                                  			
                        </div>			
                        <div class="col-auto"> 											
                           			
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
                                    <th class="ps-0">Name</th>	
                                    <th class="ps-0">Phone</th>	
                                    <th class="ps-0">Subject</th>	
                                    <th class="ps-0">Message</th>	
                                    <th class="text-end">Action</th>                                    				
                                </tr>                                				
                            </thead>                            			
                            <tbody> 								 
                                <?php                                
                                $csql=mysqli_query($connect,"SELECT * FROM `contact`");
                                while($crow = mysqli_fetch_array($csql)){                                    
                                    ?>  																				                                
                                <tr>                                				
                                    <td style="width: 16px;">                                    				
                                        <div class="form-check">                                        					                                            
                                            <input type="checkbox" class="form-check-input" name="check"  id="customCheck1">					
                                                <?php echo $crow['contact_id'];?>                                        
                                        </div>                                        					
                                    </td>                                    				
                                    <td class="ps-0"> 						                                                     									                                           				                                  																									
                                        <p class="d-inline-block align-middle mb-0">					
                                            <a href="#" class="d-inline-block align-middle mb-0 product-name">												
                                                <?php echo $crow['contact_name']; ?>
                                            </a>					
                                            <br>                                                           					
                                            <span class="text-muted font-13">												
                                                <?php echo $crow['contact_email']; ?>
                                            </span>                                                       					
                                        </p>                                                   					
                                    </td>
                                    <td class="text-end">				                                                                                        					
                                        <p class="d-inline-block align-middle mb-0">					
                                              <?php echo $crow['contact_phone']; ?>                                                    					
                                        </p>                                                   					
                                    </td>
                                    <td class="text-end">				                                                                                        					
                                        <p class="d-inline-block mb-0">					
                                              <?php echo $crow['contact_subject']; ?>                                                    					
                                        </p>                                                  					
                                    </td>
                                    <td class="text-end">				                                                                                        					
                                        <p class="d-inline-block mb-0">					
                                              <?php echo $crow['contact_message']; ?>                                                    					
                                        </p>                                                  					
                                    </td>
                                    <td class="text-end">				                                                                                        					
                                        <a href="del-enquiry.php?contact_id=<?php echo $crow['contact_id']?>">					
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