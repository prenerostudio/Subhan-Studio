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
							<span>Gallery</span>
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
								<h2 class="">Our Recent Porfolio</h2>
								
							</div>
						</div><!--- END COL -->
					</div><!--- END ROW -->
						
					
					<div class="portfolio-filter text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<button class="active" data-filter="*">ALL</button>
						<button data-filter=".filter1">Corporate</button>
						<button data-filter=".filter2">Wedding</button>
						<button data-filter=".filter3">Model</button>
						
					</div>
					

					<div class="atf-portfolio-grid">
						 <?php
                $cfetch = "SELECT * FROM `corporate_images`";
                $crun_fetch_query = mysqli_query($connect, $cfetch);

                while ($cdata = mysqli_fetch_array($crun_fetch_query)) {
                ?>
						<div class="col-lg-4 col-md-6 col-12 grid-item filter1">
							<div class="atf-single-portfolio">
								<div class="portfolio-img">
									<a href="ss-admin/uploads/corporate/<?php echo $cdata['img_name'];?>" data-rel="lightcase:myCollection"><img src="ss-admin/uploads/corporate/<?php echo $cdata['img_name'];?>" alt="Portfolio Image"></a> 
								</div>
								
							</div>
						</div>
						
					<?php
				}
					?>
						
						 <?php
                $fetch = "SELECT * FROM `wedding_shoot`";
                $run_fetch_query = mysqli_query($connect, $fetch);

                while ($data = mysqli_fetch_array($run_fetch_query)) {
                ?>
						<div class="col-lg-4 col-md-6 col-12 grid-item filter2">
							<div class="atf-single-portfolio">
								<div class="portfolio-img">
									<a href="ss-admin/uploads/wedding/<?php echo $data['wedding_img'];?>" data-rel="lightcase:myCollection"><img src="ss-admin/uploads/wedding/<?php echo $data['wedding_img'];?>" alt="Portfolio Image"></a> 
								</div>
								
							</div>
						</div>
						
					<?php
				}
					?>
						
						 <?php
                $mfetch = "SELECT * FROM `modal_shoot`";
                $mrun_fetch_query = mysqli_query($connect, $mfetch);

                while ($mdata = mysqli_fetch_array($mrun_fetch_query)) {
                ?>
						<div class="col-lg-4 col-md-6 col-12 grid-item filter3">
							<div class="atf-single-portfolio">
								<div class="portfolio-img">
									<a href="ss-admin/uploads/modal/<?php echo $mdata['img_name'];?>" data-rel="lightcase:myCollection"><img src="ss-admin/uploads/modal/<?php echo $mdata['img_name'];?>" alt="Portfolio Image"></a> 
								</div>
								<!--<div class="portfolio-content">
									<h2 class="title">Videography</h2>
									<p class="description">
										Lorem ipsum dolor consectetur adipisicing elit. Ipsa, tempor ibus sit amet, consectetur adipisicing elit. Ipsa, temporibus?
									</p>
									<div class="portfolio-btn">
										<a class="read-more" href="portfolio-details.html">Read More</a>
									</div>
								</div>-->
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