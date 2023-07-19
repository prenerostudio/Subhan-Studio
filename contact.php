<?php
include('header.php');

     if(isset($_POST['btn-contact'])){
                $name = ($_POST['name']);
                $email = ($_POST['email']);
                $phone = ($_POST['phone']);
                $message = ($_POST['message']);
            
            $insert_contact = "INSERT INTO `contact`(`username`, `phone_number`, `user_email`, `user_message`) VALUES ('$name','$phone','$email','$message')";
            $run_contact=mysqli_query($connect, $insert_contact);
        }
            
            
            ?>
    <section>
        <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                            <h2 data-scroll-speed="8" class="background-text">Contact</h2>
                            <div class="small-border"></div>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

<!-- form -->
            <!-- section begin -->
            <section >
				
				<div class="container">
					<!-- <div class="row"> -->
						
						<form name="contactForm" id='contact_form' method="post" >
                        <div class="row">
                                    <div class="col-12 col-lg-8 pt-5 d-flex flex-column">
                                        <div class="pt-4">
                                            <input type='text' name='name' id='name' class="form-control" required style="width:60%;" placeholder="Your Name">
                                        </div>

                                        <div class="pt-4">
                                            <input type='text' name='email' id='email' class="form-control" required style="width:60%;" placeholder="Your Email">
                                        </div>
                                        <div class="pt-4">
                                            <input type='text' name='phone' id='phone' class="form-control" required style="width:60%;" placeholder="Your Phone">
                                        </div>
																		
                                        <div class="pt-4">
                                            <textarea name='message' id='message' class="form-control" required style="width:60%;" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

           

                            <div class="col-12 col-lg-4 d-flex flex-column justify-content-center pt-5">
							
                            <h4 class="id-color">Address</h4>
                            <h5 class="text-secondary">103-C People’s colony # 1 Superior college Jaranwala road<br>
                                38000 Faisalabad</h5>
							
								
							<h4 class="id-color">Call Us</h4>
                            <h5 class="text-secondary">(+92) 3472008888</h5>
							<h6 class="text-secondary">(+92) 302-7509932</h6>	

                            <h4 class="id-color">Email Us</h4>
                            <a href="#" class="text-decoration-none"><h5 class="text-secondary">subhansstudio@gmail.com</h5></a>
                        </div>

                        </div>
                        <div class="col-md-12 py-5">
                                            <button class="btn btn-warning" name="btn-contact" type="submit">Submit</button>
                                    </div>          
                            </form>
					


				</div>
            </section>


    <?php
 include ('footer.php');
?>
