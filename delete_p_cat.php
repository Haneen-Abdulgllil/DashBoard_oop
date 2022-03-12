
<?php

include 'include/db_oop.php';
$db = new operations();

$table = "product_categories";
$table_id = "p_cat_id";

if(isset($_GET['delete_p_cat']))
{

    $delete_p_cat_id = $_GET['delete_p_cat'];   
    $result=$db->delete($table, $table_id ,$delete_p_cat_id );



    if( $result){
        echo "<script>alert('product category has been deleted successfully')</script>";
        echo "<script>window.open('index.php?view_p_cat','_self')</script>";
    }



}



?>