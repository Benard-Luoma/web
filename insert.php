<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
    if ( !empty($password)){
    }}
$dbhost = "localhost:8088";
$dbusername = "root";
$dbpassword = "";
$dbname = "test1";

    //creat connection
    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    mysqli_connect("localhost:8088","root","");
    mysqli_select_db("test1");
    $result=mysqli_query("select * from users where username = '$username'and password='$password'")
    or die("failed query database" .mysqli_error());
    $row = mysql_fertch_array($result);
    
if(myqsli_connect_error()){
    die('connect error ('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
    $sql =  "INSERT into test1 (username, password) values('$username','$password')";
 if ($conn-> query ($sql)){
     echo "new record is inserted successfully";
 }
}
   

?>
