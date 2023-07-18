<?php
include('header.php');
?>

<div id="page-wrapper" >
           
	<div id="page-inner">
              
		<div class="row">
                
			<div class="col-md-12">
                 
				<h2>Contact Enquiries</h2>   
                   
				<h5>Welcome , Love to see you back. </h5>
                   
				<a href="add-category.php"> 
					<button class="btn btn-info" style="float: right; margin-right: 50px;"> Add New</button>
				</a>
                    
			</div>
               
		</div>
               
		
                 
		<hr />
               
         
		<div class="row">
            
			<div class="col-md-12">
                
				
                 
				<div class="panel panel-default">
                    
					<div class="panel-heading">
                      
						Contact Enquiries
                     
					</div>
                      
					<div class="panel-body">
                           
						<div class="table-responsive">
                            
							<table class="table table-striped table-bordered table-hover" id="wedding">
                              
								<thead>
                                 
									<tr>
                                   
										<th>#</th>
                                  
										<th>Username</th>
                                    
										<th>Phone</th>
										
										<th>Email</th>
										<th>Message</th>
                                     
										<th>Date Added</th>
                                            
                                     
									</tr>
                                  
								</thead>
                               
								<tbody>
								
										
									<?php
										
										
									$query=mysqli_query($connect,"SELECT * FROM `contact`");
										
									while($mrow = mysqli_fetch_array($query)){
										
									?>	
								
										
                                        
									<tr class="odd gradeX">
                                          
										<td>
											<?php echo $mrow['contact_id']; ?>
										</td>
                                            
										<td>
											<?php echo $mrow['username']; ?>
										</td>
                                           
										<td class="center">
											<?php echo $mrow['phone_number']; ?>
										</td>
										
										<td class="center">
											<?php echo $mrow['user_email']; ?>
										</td>
										
										<td class="center">
											<?php echo $mrow['user_message']; ?>
										</td>
                                            
										<td class="center">
											<?php echo $mrow['date_added']; ?>
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