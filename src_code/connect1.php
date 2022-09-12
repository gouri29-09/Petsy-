
<?php


$conn= mysqli_connect("localhost","root","","petsi",3306);

if(!$conn)
{
    echo"connection not established";
}

else
{
    echo"connection  established";
}


mysqli_close($conn);


?>