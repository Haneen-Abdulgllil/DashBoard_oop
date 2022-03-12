

<?php

include 'include/db_oop.php';
$db = new operations();

$table = "products";
$table_id = "product_id";

if(isset($_GET['delete_product']))
{

    $delete_p_id = $_GET['delete_product'];   
    $result=$db->delete($table, $table_id ,$delete_p_id );



    if( $result){
        echo "<script>alert('product has been deleted successfully')</script>";
        echo "<script>window.open('index.php?view_p','_self')</script>";
    }


}



?>