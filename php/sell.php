<?php

$con = mysqli_connect("localhost","root","","fiber_cops");
if(mysqli_connect_errno())
{
    echo"error";

}



if (isset($_POST['submit']))
{


    $buyer = $_POST['buyer'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $remark = $_POST['remark'];
	
    


    
 

             $sql = "INSERT INTO sell VALUES ('','','$buyer', '$quantity', '$price', '$remark')";
             $query = mysqli_query($con,$sql);

}


?>