<?php

$name1=filter_input(INPUT_POST,'uname');
$pass1=filter_input(INPUT_POST,'upass');
$text1=filter_input(INPUT_POST,'utext');

$host="localhost";
$dbusername="root";
$dbpassord="";
$dbname="info";


$conn=mysqli_connect($host,$dbusername,$dbpassord,$dbname);

if($conn)
{
    $query="INSERT INTO student values('$name1','$pass1','$text1')";

    $data=mysqli_query($conn,$query);

    
}

else
{
    echo "error";

}

$conn->close();
?>
