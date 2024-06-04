<?php 
$mainurl="http://localhost/Assignment/";
$baseurl="http://localhost/Assignment/assets/";
?>

<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="<?php echo $baseurl;?>images/phone.jpg" type="">
      <title>Mobile Shop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="<?php echo $baseurl;?>css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?php echo $baseurl;?>css/responsive.css" rel="stylesheet" />
   </head>
   <body>
<div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href=""><img width="80px" src="<?php echo $baseurl;?>images/phone.jpg" alt="#" />Mobile Shop</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="<?php echo $mainurl;?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo $mainurl;?>content">Add Product</a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo $mainurl;?>product">Products</a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo $mainurl;?>view_cart">ViewCart</a>
                        </li>
                        <li class="">
                           <a class="" href="<?php echo $mainurl;?>view_cart">
                           
                           <span class="fa fa-shopping-cart fs-5" style="font-size:30px;color:darkred">
                           <span class="">
                              <?php echo $cartcount1[0]['total'];?></span>
                           </a>
                          
                      </li>

                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
</div>
</body>

 <!-- jQery -->
 <script src="<?php echo $baseurl;?>js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="<?php echo $baseurl;?>js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="<?php echo $baseurl;?>js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="<?php echo $baseurl;?>js/custom.js"></script>