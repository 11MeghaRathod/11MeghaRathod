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
                       <h3>View Product</h3>
                    </div>
                 </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               
            </div>
            <div class="row">
               <?php 
               foreach($fetch_mobile as $row)
               {

               
               ?>
               <div class="col-md-4 p-0">
<form method="post">
<input type="hidden" name="m_id" value="<?php echo  $row["m_id"];?>" readonly style="border:none">        
<p class="text-center"><img src="<?php echo  $row["m_img"];?>" class="img-fluid" style="width:100%; height:350px"></p>
</div>

<div class="col-md-8">

<p class="h4 ms-5 mt-2"><?php echo  $row["m_name"];?></p>


 Rs.<input type="text" name="price" id="price" value="<?php echo  $row["price"];?>" readonly style="border:none"></p>

<p class="h5 ms-5 mt-4">
    <input type="number" name="qty" id="qty" class="form-control w-50" value="1" min="1" max="10" onchange="subtotal()"></p>

<p class="h5 ms-5 mt-4 bg-dark p-3 text-white w-50">SubTotal Rs.<label id="total"><?php echo  $row["price"];?></label></p>

<p class="ms-5 mt-4">




<input type="submit" class="btn btn-danger text-white ord ms-5" name="addtocart" value="Add To Cart" >


</p>

</form>

<p class="h4 ms-5 mt-5">Food Details :</p>
<p class="ms-5 mt-4"><?php echo  $row["m_description"];?></p>

<hr class="ms-5">
</div>
               <?php }?>
               
           
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      
      <!-- footer section -->
     
   </body>
</html>


<script type="text/javascript">

function subtotal()
{
var p=document.getElementById("price").value;
var q=document.getElementById("qty").value;
var tot=p*q;
document.getElementById("total").innerHTML=tot;
}
</script>