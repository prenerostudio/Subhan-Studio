<?php
include('header.php');
?>

<div id="page-wrapper" >
           
	<div id="page-inner">
              
		<div class="row">
                
			<div class="col-md-12">
                 
				<h2>Modal Shoot</h2>   
                   
				<h5>Welcome , Love to see you back. </h5>
                   
				<a href="add-modal-img.php"> 
					<button class="btn btn-info" style="float: right; margin-right: 50px;"> Add New</button>
				</a>
                    
			</div>
               
		</div>
               
		
                 
		<hr />
               
         
		<div class="row">
            
			<div class="col-md-12">
                
				
                 
				<div class="panel panel-default">
                    
					<div class="panel-heading">
                      
						Modal Shoot
                     
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
										
										
									$query=mysqli_query($connect,"SELECT * FROM `modal_shoot`");
										
									while($mrow = mysqli_fetch_array($query)){
										
									?>	
								
										
                                        
									<tr class="odd gradeX">
                                          
										<td>
											<?php echo $mrow['img_id']; ?>
										</td>
                                            
										<td>
											<img src="uploads/modal/<?php echo $mrow['img_name']; ?>" alt="" style="width: 170px;">
										</td>
                                           
										<td class="center">
											<?php echo $mrow['date_added']; ?>
										</td>
                                            
										<td class="center">
											<a href="del-modal.php?img_id=<?php echo $mrow['img_id'] ?>">
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