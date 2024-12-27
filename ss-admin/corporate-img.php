<?php
include('header.php');
?>
<div id="page-wrapper">           
    <div id="page-inner">              
        <div class="row">                	
            <div class="col-md-12">                 	
                <h2>Corporate Shoot</h2>                      		
                <h5>Welcome , Love to see you back. </h5>                   		
                <a href="add-corporate.php"> 		
                    <button class="btn btn-info" style="float: right; margin-right: 50px;"> Add New</button>		
                </a>                    		
            </div>               	
        </div>               		                 	
        <hr />                        	
        <div class="row">            	
            <div class="col-md-12">               				                 	
                <div class="panel panel-default">                    		
                    <div class="panel-heading">                      		
                        Corporate Shoot                     			
                    </div>                      		
                    <div class="panel-body">                           		
                        <div class="table-responsive">                            			
                            <table class="table table-striped table-bordered table-hover" id="wedding">
                                <thead>				
                                    <tr>                                   				
                                        <th>#</th>                                  					
                                        <th>Image</th>					
                                        <th>Category</th>                                    					
                                        <th>Date Added</th>                                     					
                                        <th>Actions</th>
                                    </tr>
                                </thead>				
                                <tbody>					
									<?php	                                    
									$query=mysqli_query($connect,"SELECT * FROM `corporate_images`");
									while($mrow = mysqli_fetch_array($query)){             
									?>                                					
                                    <tr class="odd gradeX">				
                                        <td>											
											<?php echo $mrow['ci_id']; ?>
                                        </td>					
                                        <td>					
                                            <img src="uploads/corporate/<?php echo $mrow['ci_img']; ?>" alt="" style="width: 120px;">					
                                        </td>															
                                        <td>											
											<?php                                            
										$ctg= $mrow['ci_category'];
										$cquery=mysqli_query($connect,"SELECT * FROM `corporate_category` WHERE `ctg_id`='$ctg'");
										$crow = mysqli_fetch_array($cquery);
										echo $crow['ctg_name']
											?>
                                        </td>
                                        <td class="center">
											<?php echo $mrow['ci_created_at']; ?>
                                        </td>					
                                        <td class="center">					
                                            <a href="del-corporate.php?ci_id=<?php echo $mrow['ci_id'] ?>">
                                                <button class="btn square-btn-adjust btn-danger">Delete</button>
                                            </a>
                                        </td>                                        					
                                    </tr>					
									<?ph
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