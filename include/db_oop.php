
<?php

// class DB_con
// {

// function __construct()
// {

// $conn = mysqli_connect("localhost" , "root" , "" ,"ecom") or die('localhost connection problem'.mysqli_error());
// return $this->conn = $conn;
// }

// function delete($table,$id)
// {
//     global con;
// $res = mysqli_query($con, "DELETE FROM $table WHERE user_id=".$id);
// return $res;
// }


// }

?>


<?php 
    require_once('operations.php');

    class dbconfig
    {
        public $connection;

        public function __construct()
        {
            $this->db_connect();
        }
    
        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost','root','','ecom');
            if(mysqli_connect_error())
            {
                die(" Connect Failed ");
            }
        }

    }
?>