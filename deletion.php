<?php 

include "config.php"; 
echo $_GET["id"];
if(isset($_GET['id']))
{

    $id = $_GET['id'];

    $sql1 = " DELETE FROM  `user details` WHERE `id` = '$id' ";

     $result1 = $conn->query($sql1);

     if ($result1 == TRUE) 
     {

        echo " Record deleted successfully.";

    }
    else
    {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
else {
    echo "<br>can't delete yet now";
}

?>