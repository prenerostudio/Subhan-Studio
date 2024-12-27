<?php
include('header.php');
?>
<div id="page-wrapper">       
    <div id="page-inner">              
        <div class="row">                	
            <div class="col-md-12">                 	
                <h2>Corporate Categories</h2>                      		
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
                        Corporate Categories                     			
                    </div>                      		
                    <div class="panel-body">                           		
                        <div class="table-responsive">                            			
                            <table class="table table-striped table-bordered table-hover" id="wedding">
                                <thead>                                 				
                                    <tr>                                   				
                                        <th>#</th>										
                                        <th>Thumbnails</th>		
                                        <th>Category Name</th>                                   					
                                        <th>Date Added</th>                                     					
                                        <th>Actions</th>
                                    </tr>
                                </thead>                               				
                                <tbody>							
									<?php
									$query=mysqli_query($connect,"SELECT * FROM `corporate_category`");
									while($mrow = mysqli_fetch_array($query)){
									?>
                                    <tr class="odd gradeX">                                          				
                                        <td>											
											<?php echo $mrow['ctg_id']; ?>
                                        </td>															
                                        <td>					
                                            <img src="uploads/category/<?php echo $mrow['ctg_img']; ?>" alt="" style="width: 120px;">					
                                        </td>                                            					
                                        <td>											
											<?php echo $mrow['ctg_name']; ?>
                                        </td>                                           					
                                        <td class="center">											
											<?php echo $mrow['date_added']; ?>
                                        </td>                                            					
                                        <td class="center">					
                                            <a href="del-ctg.php?ctg_id=<?php echo $mrow['ctg_id'] ?>">
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