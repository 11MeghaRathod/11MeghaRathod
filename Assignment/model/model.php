<?php  
class model 
{
    public $conn="";
    public function __construct()
    {
        session_start();
        //database connection 
        try 
        {
            $this->conn=new mysqli("localhost","root","","mobile_store");
           // echo "connection successfully";
        }
        catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
        }
        /*catch(Exception)
        {
            die(mysqli_error($this->conn));

        }*/
  
    }


     // create a member function for select all data
     public function selectalldata($table)
     {
         $select="select * from $table";
         
          
         $query=mysqli_query($this->conn,$select);
         while($fetch=mysqli_fetch_array($query))
         {
              $arr[]=$fetch;

         }
         return $arr;
     }
     // create a member function with condition
     public function selectalldatawhere($table,$column,$id)
     {
         $select="select * from $table where $column = $id";
       //echo $select;
       //exit;
         $query=mysqli_query($this->conn,$select);
         while($fetch=mysqli_fetch_array($query))
         {
              $arr[]=$fetch;

         }
         return $arr;
     }

     
     public function insertalldata($table,$data)
     {
         
         $key=array_keys($data);
         $key1=implode(' , ',$key); 
        
         
         $value=array_values($data);
         $value1=implode("' , '",$value);
         //echo $value1."<br>"; // neha' , '2024-05-23
         
 
         $insert="insert into $table($key1) values('$value1')"; 
       //echo $insert; exit;
 
         $query=mysqli_query($this->conn,$insert);
         
         return $query;
         
         
         
         
     }

      // view cart
      public function selectjoin($table,$table1,$where)
      {
         $select="select * from $table join $table1 on $where ";
         //echo $select;exit;
 
         $query=mysqli_query($this->conn,$select);
         while($fetch=mysqli_fetch_array($query))
         {
              $arr[]=$fetch;
  
         }
         return $arr;
      }

      // count cart
     public function cartcount($table,$column)
     {
        $select = "select count($column) as total from $table";
        //echo $select;
        //exit;
        $query=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($query))
        {
             $arr[]=$fetch;
 
        }
        return $arr;
     }
       // count total
     public function totalcount($table,$column)
     {
        $select = "select sum($column) as total from $table";
        //echo $select;
       //exit;
        $query=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($query))
        {
             $arr[]=$fetch;
 
        }
        return $arr;
     }

     public function deletecart($table,$column,$cid)
     {

        $select ="delete from $table where $column = $cid"; 
       // echo $select;exit;
        $query=mysqli_query($this->conn,$select);
        return $query;
        
     }

     
}

?>