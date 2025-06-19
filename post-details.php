<?php
include('header.php');

$post_id = $_GET['post_id'];
$bsql=mysqli_query($connect,"SELECT * FROM `blog_post` WHERE `post_id` = '$post_id'");							
$brow = mysqli_fetch_array($bsql);

?>
<div class="atf-page-heading atf-size-md atf-dynamic-bg" style="background-image: url(img/blog/5.jpg); background-size:cover; background-position: center center;">
    <div class="container">
        <div class="atf-page-heading-in text-center">	
            <h1 class="atf-page-heading-title"><?php echo $brow['post_title'];?></h1>	
            <div class="atf-post-label">	
                <span><a href="index.php">Home</a></span>		
                <span><?php echo $brow['post_title'];?></span>		
            </div>	
        </div>	
    </div>
</div>
<section id="project" style="padding-top: 50px;">
    <div class="container">
        <div class="row justify-content-center">	
            <div class="col-lg-12 col-md-12 col-12">	
                <div class="atf-section-title text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">		
                    	
                    <h2 class=""><?php echo $brow['post_title'];?> </h2>		
                   
                </div>		
            </div>	
        </div>        					
    </div>
</section>			        
<div id="about" class="atf-about style1">
    <div class="container">    
        <div class="row">        
            <div class="col-xl-12 col-12">	
                <div class="about-image text-center">                
                    <img src="admin/uploads/blog/<?php echo $brow['post_img']; ?>" alt="<?php echo $brow['post_img']; ?>">                    
                </div>                
            </div>            
            <div class="col-xl-12 col-12 align-self-center mt-xl-40">            
                <div class="atf-section-title">                                                                                                    
                    <p class="" align="justify"><?php echo $brow['post_details']  ?></p>                    
                </div>                
                             
                        
            </div>            
        </div>
    </div>    
</div> 

<?php
include('footer.php');
?>		