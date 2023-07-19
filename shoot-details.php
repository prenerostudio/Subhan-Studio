<?php
include('header.php');

$ctg_id = $_GET['ctg_id'];

$query= "SELECT * FROM `corporate_category` WHERE `ctg_id`='$ctg_id'";
                $result = mysqli_query($connect, $query);
$crow = mysqli_fetch_array($result);
?>

    
    <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                        <h2 data-scroll-speed="8" class="background-text"><?php echo $crow['ctg_name']; ?></h2>
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
                <h2 class="s1 text-center pt-5"><?php echo $crow['ctg_name']; ?></h2>
                <div class="small-border"></div>
            </div>
            <div class="gallery ">
                <div class="row">
					
               <?php
                $fetch = "SELECT * FROM `corporate_images` WHERE `img_category`='$ctg_id'";
                $run_fetch_query = mysqli_query($connect, $fetch);

                while ($data = mysqli_fetch_array($run_fetch_query)) {
                ?>

                <div class="col-md-6 col-lg-4 py-3">
                        
					<a href="ss-admin/uploads/corporate/<?php echo $data['img_name'];?>" data-lightbox="mygallery">
						<img src="ss-admin/uploads/corporate/<?php echo $data['img_name'];?>" height="250px" width="350px" alt="">
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
