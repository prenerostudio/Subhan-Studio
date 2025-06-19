<?php
include('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">                 	
                <h2>Wedding Shoot</h2>                      		
                <h5>Welcome Jhon Deo , Love to see you back. </h5>                   		
                <a href="add-wedding-img.php">
                    <button class="btn btn-info" style="float: right; margin-right: 50px;"> Add New</button>
				</a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Wedding Shoot Images
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
									$query=mysqli_query($connect,"SELECT * FROM `wedding_shoot`");
									while($wrow = mysqli_fetch_array($query)){
									?>
									<tr class="odd gradeX">   
										<td>
											<?php echo $wrow['wi_id']; ?>
										</td>
										<td>
											<img src="uploads/wedding/<?php echo $wrow['wedding_img']; ?>" alt="" style="height: 100px;">
										</td>
										<td class="center">
											<?php echo $wrow['wi_created_at']; ?>
										</td>
                                        <td class="center">
                                            <a href="del-wedding.php?wi_id=<?php echo $wrow['wi_id'] ?>">
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