<?php
include('header.php');
include('config.php');
?>			
<div class="atf-page-heading atf-size-md atf-dynamic-bg" style="background-image: url(img/blog/5.jpg); background-size:cover; background-position: center center;">
    <div class="container">
        <div class="atf-page-heading-in text-center">	
            <h1 class=" best photographer in faisalabad">My Portfolio</h1>	
            <div class="atf-post-label">	
                <span><a href="index.php">Home</a></span>		
                <span>Gallery</span>		
            </div>	
        </div>	
    </div>
</div>
<section id="portfolio" class="atf-portfolio-area atf-section-padding">
    <div class="container">
        <div class="row justify-content-center">	
            <div class="col-lg-6 col-md-7 col-12">	
                <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">		
                    <h5 class="atf-sheading">Gallery</h5>		
                    <h2 class="">Our Recent Porfolio</h2>		                    		
                </div>		
            </div>	
        </div>	        						
        <div class="portfolio-filter text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">	
            <button class="active" data-filter="*">ALL</button>	
            <button data-filter=".filter1">Corporate</button>	
            <button data-filter=".filter2">Wedding</button>	
            <button data-filter=".filter3">Model</button>	
            <button data-filter=".filter4">Baby</button>	
            <button data-filter=".filter5">Product</button>	
        </div>	        	
        <div class="atf-portfolio-grid">						             
			<?php                
            $csql = "SELECT * FROM `corporate_images`";                
            $c_query = mysqli_query($connect, $csql);                
            while ($cdata = mysqli_fetch_array($c_query)) {                
			?>		
            <div class="col-lg-4 col-md-6 col-12 grid-item filter1">	
                <div class="atf-single-portfolio">		
                    <div class="portfolio-img">		
                        <a href="ss-admin/uploads/corporate/<?php echo $cdata['ci_img'];?>" data-rel="">
                            <img src="ss-admin/uploads/corporate/<?php echo $cdata['ci_img'];?>" alt="Corporate Image">
                        </a> 			
                    </div>		                    		
                </div>		
            </div>											                
			<?php				                
            }						            
			$wsql = "SELECT * FROM `wedding_shoot`";            
			$w_query = mysqli_query($connect, $wsql);            
			while ($wdata = mysqli_fetch_array($w_query)) {            
			?>						
            <div class="col-lg-4 col-md-6 col-12 grid-item filter2">	
                <div class="atf-single-portfolio">		
                    <div class="portfolio-img">		
                        <a href="ss-admin/uploads/wedding/<?php echo $wdata['wedding_img'];?>" data-rel="">
                            <img src="ss-admin/uploads/wedding/<?php echo $wdata['wedding_img'];?>" alt="Wedding Image">
                        </a> 			
                    </div>		                    		               
                </div>		            
            </div>											                
			<?php				                            
			}							            
			$msql = "SELECT * FROM `modal_shoot`";                           
			$m_query = mysqli_query($connect, $msql);                           
			while ($mdata = mysqli_fetch_array($m_query)) {                          
			?>						
            <div class="col-lg-4 col-md-6 col-12 grid-item filter3">	
                <div class="atf-single-portfolio">		
                    <div class="portfolio-img">		
                        <a href="ss-admin/uploads/modal/<?php echo $mdata['mi_img'];?>" data-rel="">
                            <img src="ss-admin/uploads/modal/<?php echo $mdata['mi_img'];?>" alt="Model Image">
                        </a>			
                    </div>		                    		
                </div>		
            </div>											                                
			<?php            
			}							            
			$bsql = "SELECT * FROM `baby_shoot`";                            
			$b_query = mysqli_query($connect, $bsql);                            
			while ($bdata = mysqli_fetch_array($b_query)) {                            
			?>						
            <div class="col-lg-4 col-md-6 col-12 grid-item filter4">	
                <div class="atf-single-portfolio">		
                    <div class="portfolio-img">		
                        <a href="ss-admin/uploads/baby/<?php echo $bdata['bs_img'];?>" data-rel="">
                            <img src="ss-admin/uploads/baby/<?php echo $bdata['bs_img'];?>" alt="Baby Image">
                        </a> 			
                    </div>		                    		
                </div>		
            </div>											                
			<?php				                            
			}							            
			$psql = "SELECT * FROM `product_shoot`";            
			$p_query = mysqli_query($connect, $psql);            
			while ($pdata = mysqli_fetch_array($p_query)) {            
			?>						
            <div class="col-lg-4 col-md-6 col-12 grid-item filter5">							
                <div class="atf-single-portfolio">								
                    <div class="portfolio-img">									
                        <a href="ss-admin/uploads/product/<?php echo $pdata['ps_img'];?>" data-rel="">
                            <img src="ss-admin/uploads/product/<?php echo $pdata['ps_img'];?>" alt="Baby Image">
                        </a> 								
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