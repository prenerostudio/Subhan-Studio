<?php
include('config.php');
session_start();
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];	
    $final_pass = md5($password);	
    $sql = "SELECT * FROM `users` WHERE `username`='$username' && `password`='$final_pass'";	
    $results = $connect->query($sql);	
    if (mysqli_num_rows($results) == 1) {		
        $urow= mysqli_fetch_array( $results);					
        $_SESSION['username'] = $username;                	
        $_SESSION['first_name'] = $urow['first_name'];                	
        $_SESSION['last_name'] = $urow['last_name'];
        $_SESSION['user_id'] = $urow['user_id'];					
        $_SESSION['success'] = "You are now logged in";					
        $_SESSION['full_name']= $urow['first_name'] ." " .$urow['last_name'];					
        header('location: dashboard.php');
	} else {        
        $_SESSION['success_msg'] = "Wrong username/password combination";					
        header('location: index.php');            
        echo "Invalid username or password.";
    }
}


if (isset($_POST['modal-image'])) {
    $target = "uploads/modal/" . basename($_FILES['modal']['name']);   
    $modal_image = $_FILES['modal']['name'];   
    move_uploaded_file($_FILES['modal']['tmp_name'], $target);   
    $sql = "INSERT INTO `modal_shoot`(`mi_img`) VALUES ('$modal_image')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: modal-shoot.php');	        
    }else{		
        header('location: add-modal.php');				        
    }		
}


if (isset($_POST['wed-image'])) {
    $target = "uploads/wedding/" . basename($_FILES['wedding']['name']);   
    $wedding_image = $_FILES['wedding']['name'];   
    move_uploaded_file($_FILES['wedding']['tmp_name'], $target);   
    $sql = "INSERT INTO `wedding_shoot`(`wedding_img`) VALUES ('$wedding_image')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: wedding-images.php');	        
    }else{		
        header('location: add-wedding-image.php');				        
    }		
}


if (isset($_POST['baby'])) {
    $target = "uploads/baby/" . basename($_FILES['baby']['name']);   
    $baby_image = $_FILES['baby']['name'];   
    move_uploaded_file($_FILES['baby']['tmp_name'], $target);   
    $sql = "INSERT INTO `baby_shoot`(`bs_img`,) VALUES ('$baby_image')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: baby-shoot.php');	        
    }else{		
        header('location: baby-shoot.php');				        
    }		
}

if (isset($_POST['pi'])) {
    $target = "uploads/product/" . basename($_FILES['pi']['name']);   
    $pi_image = $_FILES['pi']['name'];   
    move_uploaded_file($_FILES['pi']['tmp_name'], $target);   
    $sql = "INSERT INTO `product_shoot`(`ps_img`) VALUES ('$pi_image')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: product-shoot.php');	        
    }else{		
        header('location: product-shoot.php');				        
    }		
}

if (isset($_POST['ci'])) {
    
    $ctg_id = $_POST['ctg_id'];
    $target = "uploads/corporate/" . basename($_FILES['ci']['name']);   
    $ci_image = $_FILES['ci']['name'];   
    move_uploaded_file($_FILES['ci']['tmp_name'], $target);   
    $sql = "INSERT INTO `corporate_images`(`ci_img`, `ci_category`) VALUES ('$ci_image','$ctg_id')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: corporate-shoot.php');	        
    }else{		
        header('location: corporate-shoot.php');			        
    }		
}

if (isset($_POST['ctg'])) {
    
    $ctg_name = $_POST['ctg_name'];    
    $sql = "INSERT INTO `corporate_category`(`ctg_name`) VALUES ('$ctg_name')";  
    $result = mysqli_query($connect, $sql);	
    if($result){			
        header('location: corporate-category.php');	        
    }else{		
        header('location: corporate-category.php');	        
    }		
}


if (isset($_POST['new_post'])) {

    $title = $_POST['title'];
    $desc = $_POST['desc'];

    $target = "uploads/blog/" . basename($_FILES['fi']['name']);
    $fi_image = $_FILES['fi']['name'];
    move_uploaded_file($_FILES['fi']['tmp_name'], $target);

    $stmt = $connect->prepare("INSERT INTO blog_post (post_title, post_img, post_details) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $fi_image, $desc);

    if ($stmt->execute()) {
        header('location: all-post.php');
    } else {
        echo "Error: " . $stmt->error; // optional: better error handling
        header('location: all-post.php');
    }

    $stmt->close();
}


if (isset($_POST['update_post'])) {
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];

    // Check if a file is uploaded
    if (!empty($_FILES['fi']['name'])) {
        $fi_image = $_FILES['fi']['name'];
        $target = "uploads/blog/" . basename($fi_image);
        move_uploaded_file($_FILES['fi']['tmp_name'], $target);

        // Update including image
        $sql = "UPDATE `blog_post` SET 
                    `post_title` = '$title',
                    `post_img` = '$fi_image',
                    `post_details` = '$desc' 
                WHERE `post_id` = '$post_id'";
    } else {
        // Update without changing the image
        $sql = "UPDATE `blog_post` SET 
                    `post_title` = '$title',
                    `post_details` = '$desc' 
                WHERE `post_id` = '$post_id'";
    }

    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('Location: all-post.php');
        exit();
    } else {
        header('Location: all-post.php');
        exit();
    }
}




?>