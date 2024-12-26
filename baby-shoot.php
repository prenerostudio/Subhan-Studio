<?php
include('header.php');
include('config.php');
?>

<!-- Start-page-heading -->
			<div class="atf-page-heading atf-size-md atf-dynamic-bg" style="background-image: url(img/blog/5.jpg); background-size:cover; background-position: center center;">
				<div class="container">
					<div class="atf-page-heading-in text-center">
						<h1 class="atf-page-heading-title">My Portfolio</h1>
						<div class="atf-post-label">
							<span><a href="index.php">Home</a></span>
							<span>Baby Shoot Gallery</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Start-page-heading -->
			
			<!-- START PORTFOLIO -->
			<section id="portfolio" class="atf-portfolio-area atf-section-padding">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-7 col-12">
							<div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
								<h5 class="atf-sheading">Gallery</h5>
								<h2 class="">Baby Shoot Images</h2>
								
							</div>
						</div><!--- END COL -->
					</div><!--- END ROW -->
						
					
					<div class="atf-portfolio-grid">
						
						
						  <?php
                $mfetch = "SELECT * FROM `baby_shoot`";
                $mrun_fetch_query = mysqli_query($connect, $mfetch);

                while ($mdata = mysqli_fetch_array($mrun_fetch_query)) {
                ?>
						<div class="col-lg-4 col-md-6 col-12 grid-item filter3">
							<div class="atf-single-portfolio">
								<div class="portfolio-img">
									<a href="#"><img src="ss-admin/uploads/baby/<?php echo $mdata['bs_img'];?>" alt="<?php echo $mdata['bs_img'];?>"></a> 
								</div>
								
							</div>
						</div>
						
					<?php
				}
					?>
						
					</div>
				</div>
			</section>

<?php
include('footer.php');
?>