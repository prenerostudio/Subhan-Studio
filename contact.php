<?php
include('header.php');
?>
<div class="atf-page-heading atf-size-md atf-dynamic-bg" style="background-image: url(img/blog/5.jpg); background-size:cover; background-position: center center;">
    <div class="container">
        <div class="atf-page-heading-in text-center">	
            <h1 class="atf-page-heading-title">Get In Touch</h1>	
            <div class="atf-post-label">	
                <span><a href="index.php">Home</a></span>		
                <span>Contact Us</span>		
            </div>	
        </div>	
    </div>
</div>
<section id="contact" class="atf-contact-area"> 
    <div class="atf-section-padding">
        <div class="container">	
            <div class="row justify-content-center">	
                <div class="col-lg-6 col-md-7 col-12">		
                    <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">		
                        <h5 class="atf-sheading">Contact Us</h5>			
                        <h2 class="">Get In Touch</h2>			
                        <p class="">I'm here to help! If you have questions or need assistance with anything, feel free to ask right here.</p>			
                    </div>		
                </div>		
            </div>            								
            <div class="row clearfix">	
                <div class="col-xl-5 col-12  pe-lg-5">		
                    <div class="atf-contact-info">		
                        <div class="atf-section-title atf-section-title2">			
                            <h2 class="">Our Address</h2>			
                        </div>											
                        <div class="atf-contact-details">			
                            <i class="fa fa-home"></i>                            			
                            <h4>Your Location</h4>			
                            <p>Hani Khan Market, Street # 10, Main Bazar, </p>			
                            <p>Mansoor Abad, Faisalabad, Pakistan 38000.</p>			
                        </div>											
                        <div class="atf-contact-details">			
                            <i class="fa fa-phone"></i>			
                            <h4>Mobile Number</h4>			
                            <p>+92 347 200 8888</p>			
                            <p>+92 302 750 9932</p>			
                        </div>										
                        <div class="atf-contact-details">			
                            <i class="fa fa-envelope"></i>			
                            <h4>Email Address</h4>			
                            <p>subhansstudio@gmail.com</p>			
                        </div>			
                        <h4 class="">Quick Connect</h4>			
                        <div class="atf-footer-social-icon mt-3">			
                            <a href="#" class="icon"> 
								<i class="fab fa-facebook"></i> 
							</a>			
                            <a href="#" class="icon"> 
								<i class="fab fa-dribbble"></i> 
							</a>			
                            <a href="#" class="icon"> 
								<i class="fab fa-behance"></i> 
							</a>			
                            <a href="#" class="icon"> 
								<i class="fab fa-linkedin"></i> 
							</a>			
                            <a href="#" class="icon"> 
								<i class="fab fa-twitter"></i> 
							</a>			
                        </div>			
                    </div>							
                </div>									
                <div class="col-xl-7 col-12 mt-xl-40 d-block align-self-center" data-aos="fade-up">		
                    <div class="contact">		
                        <h4>Send a Message</h4>			
                        <form class="atf-contact-form form" method="post" action="contact-process.php">			
                            <div class="row">			
                                <div class="form-group col-md-6">				
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"  required="required">				
                                </div>				
                                <div class="form-group col-md-6">				
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="required">				
                                </div>				
                                <div class="form-group col-md-6">				
                                    <input type="text" name="subject" class="form-control" placeholder="Your Subject" required="required">				
                                </div>				
                                <div class="form-group col-md-6">				
                                    <input type="text" name="phone" class="form-control" placeholder="Your Mobile" required="required">				
                                </div>				                                				
                                <div class="form-group col-md-12">				
                                    <textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>				
                                </div>				
                                <div class="col-md-12">				
                                    <div class="text-left atf-contact-btn">				
                                        <button type="submit" value="Submit Now" name="submit" data-hover="Send Message" class="btn atf-themes-btn" title="Submit Your Message!"><span>Send Message</span></button>					
                                    </div>				
                                </div>				
                            </div>			
                        </form>			
                        <p class="form-message"></p>			
                    </div>		
                </div>		
            </div>	
        </div>	
    </div>
</section>
<?php
include('footer.php');
?>