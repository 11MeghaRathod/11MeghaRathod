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
      <section class="product_section layout_padding" >
         <div class="container" >
            <div class="heading_container heading_center">
               
            </div>
            <div class="row" >
               
              <table class="table table-responsive" >
<tr>
<th>#id</th>
<th>Photo</th>
<th>ProductName</th>
<th>Price</th>
<th>qty</th>
<th>Total Price</th>
<th>Action</th>
</tr>
<?php 

foreach($showcart1 as $cart1)
{?>
    <tr>
    <td><?php echo $cart1['cart_id'];?></td>  
    <td><img style="width:100px;height:100px" src="<?php echo $cart1['m_img'];?>"></td>  
    <td><?php echo $cart1['m_name'];?></td>  
    <td><?php echo $cart1['price'];?></td>  
    <td><?php echo $cart1['qty'];?></td>  
    <td><?php echo $cart1['subtotal'];?></td>  
 
    <td><a href="<?php echo $mainurl;?>view_cart?cid=<?php echo $cart1['cart_id'];?>" class="btn btn-danger btn-sm text-white"><span class="bi bi-trash text-white">DELETE</span></a></td>


    </tr>
<?php }?>
<tr>
    <td colspan="8" align="right">
        <h6 class="bg-dark text-white p-3 w-100" >Subtotal Rs. <?php echo $subtotal[0]["total"];?></h6>
    </td>
</tr>
</table> 
            </div>
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      
      <!-- footer section -->
     
   </body>
</html>


