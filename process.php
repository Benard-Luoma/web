<?php 
$mysqli= new mysqli('localhost','root','', '','','','','','','','','','','',)
or die(mysqlierror($mysqli));

if (isset($_POST['submit']))(
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['Lastname'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone#'];
    $Address=$_POST['Address'];
    $City=$_POST['City'];
    $Country=$_POST['Country'];
    $state=$_POST['state'];
    $QuestinsComment=$_POST['Questins/Comments'];
    $Arrivaldate=$_POST['Arrivaldate'];
    $DOB=$_POST['DOB'];
    $Gender=$_POST['Gender'];
    $Departuredate=$_POST['Departuredate'];
    $dbname='newstaff';
if (!empty($Firstname)||!empty($Lastname)||!empty($Email)||!empty($Phone)||!empty($Address)||!empty($City)||!empty($Country)||!empty($state)||!empty($QuestinsCommment)||!empty($Arrivaldate)||!empty($DOB)||!empty($Gender)||!empty($Departuredate))
    
$mysqli->query("INSERT INTO appointmentform (Firstname,Lastname,Email,Phone,Address,City,Country,state,QuestinsCommment,Arrivaldate,DOB,Gender,Departuredate)VALUES( $Firstname,$Lastname,$Email,$Phone,$Address,$City,$Country,$state,$QuestinsCommment,$Arrivaldate,$DOB,$Gender,$Departuredate)")
    or die($mysqli->error);
)

?>