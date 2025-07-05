<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
            <title>Subhan Studio | Admin Section Dashboard</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="images/favicon.ico">

       

    <link rel="stylesheet" href="libs/jsvectormap/css/jsvectormap.min.css">

     <!-- App css -->
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="css/app.min.css" rel="stylesheet" type="text/css" />
       <link href="libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
       
       
       <!-- TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/1atuhzoaiqbt15mollr66s2ke64vhohag7x8kz4x5prjofo0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: '#desc', // Match the ID of your textarea
    height: 300,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
             'bold italic backcolor | alignleft aligncenter ' +
             'alignright alignjustify | bullist numlist outdent indent | ' +
             'removeformat | help',
    content_css: 'https://www.tiny.cloud/css/codepen.min.css' // Optional styling
  });
</script>


     

</head>

<body>
    <?php
    include 'top-bar.php';
    include 'left-sidebar.php';
    ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">