<!DOCTYPE html>
<html>
  
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
        
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               <?php 
               foreach($fetch_mobile as $row)
               {

               
               ?>
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           <?php echo $row['m_name'];?>
                           </a>
                           <a href="<?php echo $mainurl;?>view_detail?mobile_id=<?php echo $row['m_id']; ?>" class="option2">
                           View Product
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?php echo $row['m_img'];?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5 style = "text-align: center;">
                        <?php echo $row['m_name'];?>
                        </h5>
                        
                       
                     </div>
                     <h6 style = "text-align: center;">
                          Rs . &nbsp; <?php echo $row['price'];?>
                        </h6>
                  </div>
               </div>
               <?php }?>
               
           
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      
      <!-- footer section -->
     
   </body>
</html>