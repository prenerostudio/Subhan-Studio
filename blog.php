<?php
include('header.php');
?>
<div class="atf-page-heading atf-size-md atf-dynamic-bg" style="background-image: url(img/blog/5.jpg); background-size:cover; background-position: center center;">
    <div class="container">
        <div class="atf-page-heading-in text-center">	
            <h1 class="atf-page-heading-title">Blog</h1>	
            <div class="atf-post-label">	
                <span><a href="index.php">Home</a></span>		
                <span>Blog</span>		
            </div>	
        </div>	
    </div>
</div>
<section id="project" class="atf-section-padding mt-100">
    <div class="container">
        <div class="row justify-content-center">	
            <div class="col-lg-12 col-md-12 col-12">	
                <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">		
                    	
                    <h2 class="">Latest Articles</h2>		
<!--                    <p class="">Our services encompass a wide range of offerings, including professional photography for events, portraits, weddings, product shoots, and creative projects. We also provide image editing and retouching services to enhance the quality of your photos. Our team is dedicated to delivering exceptional visual content tailored to your needs.</p>		-->
                </div>		
            </div>	
        </div>        	
        <div class="row">					
            <div class="col-md-12">	
                <div id="atf-home-active" class="atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">
                      <?php                                
                                
                      $bsql=mysqli_query($connect,"SELECT * FROM `blog_post`");
                                
                      while($brow = mysqli_fetch_array($bsql)){                                    
                                    
                          ?> 
                    
                    <div class="atf-best-service-slide">		
                        <div class="atf-best-service-img">			
                            <a href="post-details.php?post_id=<?php echo $brow['post_id']; ?>">			
                                <img src="admin/uploads/blog/<?php echo $brow['post_img']; ?>" alt="Blog">			
                            </a> 				
                        </div>			
                        <div class="atf-best-service-content text-center">			
                            <h3 class="atf-best-service-title">
                                <a href="post-details.php?post_id=<?php echo $brow['post_id']; ?>">
                                    <?php echo $brow['post_title']; ?>
                                </a>
                            </h3>			
                            		
                        </div>			
                    </div>		                    		
                  <?php
                                
                  
                      }
                  ?>
                    
                </div>		
            </div>	
        </div>	
	</div>
</section>		

<section id="testimonial" class="atf-section-padding">
    <div class="container">
        <div class="row justify-content-center">	
            <div class="col-lg-6 col-md-7 col-12">	
                <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">		
                    <h5 class="atf-sheading"> Testimonial</h5>		
                    <h2 class="text-white">Client Feedback</h2>		
                    <p class="text-white">Subhan Studio.</p>		
                </div>		
            </div>	
        </div>		
        <div class="row">		           	
            <div class="col-lg-12">							
                <div id="testimonial-slider" class="atf-testimonials-slide atf-main-testimonials atf-testimonial-slider owl-carousel owl-theme">		
                    <div class="testimonial">		
                        <div class="pic">			
                            <img src="img/portfolio/Yousaf sb.jpg" alt="Portfolio Image">			
                        </div>			
                        <h3 class="testimonial-title">Ch Muhammad Yousaf</h3>			
                        <small class="post">RD Superior Group</small>			
                        <p class="description">			
                            Amazing production Cooperative camera men's I love his work Nice work professional good quality, at.			
                        </p>			
                    </div>		                    		
                    <div class="testimonial">		
                        <div class="pic">			
                            <img src="img/portfolio/Haseeb-Khan.webp" alt="Portfolio Image">			
                        </div>			
                        <h3 class="testimonial-title">Haseeb Khan</h3>			
                        <small class="post">Director Communication at The Superior Group</small>			
                        <p class="description">			
                            I Had a fantastic experience with the studio regarding professionalism as well as ethical dealing.			
                        </p>			
                    </div>		                    		
                    <div class="testimonial">		
                        <div class="pic">			
                            <img src="img/portfolio/Hamza.jpg" alt="Portfolio Image">			
                        </div>			
                        <h3 class="testimonial-title">Hamza Afzal</h3>			
                        <small class="post">Client</small>			
                        <p class="description">			
                            Subhan studio staff is an excellent professional. All staff was kind and made me feel very comfortable. I’m also very satisfied with the final work.			
                        </p>			
                    </div>		                    		
                    <div class="testimonial">		
                        <div class="pic">			
                            <img src="img/portfolio/Arshad.png" alt="Portfolio Image">			
                        </div>			
                        <h3 class="testimonial-title">Arshad Malik </h3>			
                        <small class="post">Manager Skin Care company</small>			
                        <p class="description">			
                            Subhan studio have a good work with good team .No compromise in work quality . good experience work with.			
                        </p>			
                    </div>                                        
                    <div class="testimonial">		
                        <div class="pic">			
                            <img src="img/portfolio/Sarmad.png" alt="Portfolio Image">			
                        </div>			
                        <h3 class="testimonial-title">Sarmad Ameer </h3>			
                        <small class="post">Client</small>			
                        <p class="description">			
                            Subhan studio All staff was kind and made me feel very comfortable.very satisfied with the final work.			
                        </p>			
                    </div>										
                </div>		
            </div>	
        </div>	
    </div>
</section>					   			
	
<?php
include('footer.php');
?>		