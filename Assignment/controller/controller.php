<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
         parent:: __construct();

        // insert mobile product
        if(isset($_POST['add_prod']))
        {
            
           
            $pname=$_POST['pname']; 
            $tmp_name=$_FILES["img"]["tmp_name"];
                     
            $path="uploads/".$_FILES["img"]["name"];            
            
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            move_uploaded_file($tmp_name,$path);
            
            $qty=$_POST['qty']; 
            $price=$_POST['price']; 
           
            $details=$_POST['desc']; 
           
            $pro = array("m_name"=>$pname,"m_description"=>$details,"m_img"=>$path,"quantity"=>$qty,"price"=>$price);
          
            $chk1=$this->insertalldata('m_product',$pro); 
            
            if($chk1 == 1)
            {
            echo "<script>
            alert('Your Product added successfully .....')
            window.location='./';
            </script>";
            }
            else
            {
                echo "<script>
            alert('try Again !')
            window.location='content';
            </script>";

            }
            
        }


        // View all Product
        $fetch_mobile = $this->selectalldata("m_product");

        // view product_detail
        if(isset($_GET['mobile_id']))
        {   
            $m_id = $_GET['mobile_id'];

            $fetch_mobile = $this->selectalldatawhere("m_product","m_id",$m_id);

        }

        // Add to cart

    if(isset($_POST["addtocart"]))
    {
        $m_id=$_POST["m_id"];
       
           
        $chk = $this->selectalldatawhere('cart','product_id',$m_id);
       
        if($chk == true)
       {
            echo "<script>
            alert('Already Product Is exist in Yor cart !')
            window.location='./';
            </script>";
       }
       else
       {
            
           
            $qty=$_POST["qty"];
            $price=$_POST["price"];
            $subtotal=$price*$qty;
            

            $data=array("product_id"=>$m_id,"qty"=>$qty,"c_price"=>$price,"subtotal"=>$subtotal);
            $chk=$this->insertalldata('cart',$data);

            if($chk)
            {
                echo "<script>
            alert('Your Product successfully added in cart')
            window.location='./view_cart';
            </script>";
            }
        }
        
    }
    // view Cart

    $showcart1 = $this->selectjoin('cart','m_product','cart.product_id = m_product.m_id');


    // Total Count
    $subtotal = $this->totalcount('cart','subtotal');

    // count cart
    $cartcount1 = $this->cartcount('cart','cart_id');

    // delete cart
    if(isset($_GET['cid']))
    {
        $cid = $_GET['cid'];
       
        $cdelete = $this->deletecart('cart','cart_id',$cid);
        if($cdelete)
           {
               echo "<script>
               alert('Your Record is Deleted !')
               window.location='view_cart';
               </script>";
           }
           else 
           {
           
                echo "<script>
               alert('Your Record is not Deleted . Please Try Again !')
               window.location='view_cart';
               </script>";
           }
    }
        //load a view index content
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");                    
                    require_once("navbar.php");
                    require_once("product.php");
                    require_once("footer.php");
                       
                 
                    break;

                case '/content':
                        require_once("index.php");                    
                        require_once("navbar.php");
                        require_once("content.php");
                        require_once("footer.php");
                       
                     
                break;
                case '/product':
                        require_once("index.php");                    
                        require_once("navbar.php");
                        require_once("product.php");
                        require_once("footer.php");
                       
                     
                break;
                case '/view_detail':
                        require_once("index.php");                    
                        require_once("navbar.php");
                        require_once("view_detail.php");
                        require_once("footer.php");
                       
                     
                break;

                case '/view_cart':
                    require_once("index.php");                    
                    require_once("navbar.php");
                    require_once("view_cart.php");
                    require_once("footer.php");
                   
                 
            break;

                default :
                require_once("index.php");
                
                break; 
                    
            }
        }  
    }

}
$obj=new controller;
?>