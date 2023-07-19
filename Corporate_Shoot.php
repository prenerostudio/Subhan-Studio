<?php
include('header.php');
?>

    
    <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                        <h2 data-scroll-speed="8" class="background-text">Corporate Shoot</h2>
                        <div class="small-border"></div>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section begin -->
    <section style="background-color: #fff; padding-bottom: 50px;" >
        <div class="container">
            <div>
                <h2 class="s1 text-center pt-5">Corporate Shoot</h2>
                <div class="small-border"></div>
            </div>
            <div class="gallery ">
                <div class="row">
					
                <?php
                $fetch = "SELECT * FROM `corporate_category`";
                $run_fetch_query = mysqli_query($connect, $fetch);

                while ($data = mysqli_fetch_array($run_fetch_query)) {
                ?>

                	<div class="col-md-4">
						<a href="shoot-details.php?ctg_id=<?php echo $data['ctg_id']; ?>">
					<figure class="figure" style="float: left;">
  
						<img src="ss-admin/uploads/category/<?php echo $data['ctg_img']; ?>" class="figure-img img-fluid rounded" alt=" " >
  
						<figcaption class="figure-caption text-right">
							<h4 align="center"><?php echo $data['ctg_name'];  ?></h4>
						</figcaption>

					</figure>
							</a>
						</div>
					<?php
				}
					?>
					
					
                </div>
            </div>
        </div>
    </section>

   
    
<?php
 include ('footer.php');
?>
