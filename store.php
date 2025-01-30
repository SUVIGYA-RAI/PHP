<?php
$con=mysqli_connect('localhost: 3307','root','');
if(!$con)
{
    echo "Not Connected";
}
if(!mysqli_select_db($con, 'k23tb'))
{
    echo "Database not selected";
}
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$sql="INSERT INTO user(Name,Email,Password)
VALUES ('$Name', '$Email', '$Password')";
if(mysqli_query($con,$sql)){
    echo "data inserted successfully";
}

// 1.connection building betweeen code and server 
// 2.verificatiion of connection 
// 3.select Database
// 4.fetch data from form 
// 5.inserting sql data into table
// 6.verification of query successful

?>