<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "#dbusername(root or admin or any)", "#password", "raspberrypi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$rowname1 = mysqli_real_escape_string($link, $_REQUEST['#rowname1']);
$rowname2 = mysqli_real_escape_string($link, $_REQUEST['#rowname2']);
$rowname3 = mysqli_real_escape_string($link, $_REQUEST['#rowname3']);
 
// attempt insert query execution
$sql = "INSERT INTO tablename (rowname1, rowname2, rowname3) VALUES ('$#rowname1', '$#rowname2', '$#rowname3')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>