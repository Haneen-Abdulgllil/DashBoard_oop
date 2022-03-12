<?php 

    
    require_once('db_oop.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {

        public function delete($table , $table_id , $id ){
            global $db;
            $sql = "delete from $table where $table_id = $id";
            $result = mysqli_query($db->connection, $sql);
        }



        
        public function insert($table,  $table_r_1, $table_r_2,  $r_1,  $r_2 ){
            global $db;
            $sql = "insert into $table (
                $table_r_1,
                $table_r_2
            )
            values(
                '$r_1',
                '$r_2'
            )
            ";


            $result = mysqli_query($db->connection, $sql);
        }



    }
?>