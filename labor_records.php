<html>
    <title>Admin labor ward records</title>
 
    <center><div class="navbar">
              <a href="home.html">Home</a>
               <div class="dropdown">

              <a href="Brain_inform.php">Brain</a>
               <div class="dropdown">

               <a href="Cancer_inform.php">Cancer</a>
               <div class="dropdown">
                </div>
              </div> <a href="labor_records.php">Labor</a>
               <div class="dropdown">

               <a href="malarial_records.php">Malarial</a>
               <div class="dropdown">
                </div>
              </div>
              <br>
              
  
<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"signin");
?>
<!DOCTYPE html >
<html>
<head>
<title>Chongwe distric</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body_bg">
 <div>
<h1>Chongwe Distric Hospital Labor Records</h1><br>

<style>
.navbar {
  width:98%;
  background-color: #555;
  overflow: auto;
 
}

/* Navbar links */
.navbar a {
  float: right;
  text-align:center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 14px;
 
}


/* Current/active navbar link */
.active {
  background-color: #04AA6D;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width:600px) {
  .navbar a {
    float: none;
    display: block;
  }
}
    
    
    .dropdown .dropbtn {
      font-size: 13px;  
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: red;
      
    }
    h1{
        color:white;
        
    }
    p{
        color: black;
        background-image:url("img/l2/images (19).jpg");
        background-repeat:no-repeat fixed center;
        width:699px;
        height:250px;
        overflow:hidden;
       font-size:18px;
        border-radius:45px;
        
    }

    input{
      
        color:black;
        border-radius:15px;
      size:94px;
    }
    
   td{
       text-align:center;
       background-color:skyblue;
   }

    body{
        background-color:#6ABADEBA;
        margin:0;
        padding:0;
    }
    
    label{
        font-size:19px;
        text-align:center;
    }
    table{
        color:black;
        background-color:skyblue;
    }

    th{
        font-size:20px;
        background-color:white;
    }

</style>

<br>
<div id="frm">
   <form name="form1" method="POST" action="">
   <p>
                <label>Name</label>
				<td width="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t1"  type="text" placeholder="Enter Name" require>
               
                
                <label>City</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t2" type="text" placeholder="Enter City">
               
                <br><label>phone</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t3" type="phone"placeholder="Enter Phone#">
                        
<label>Email</label>
				<td>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t4" type="email" placeholder="Enter Email">
              
              <br>
                <label>Address</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t5" type="text" placeholder="Enter Address">
        
                 
                <label>ward</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t6" type="number" placeholder=" Ward#">
                
                <br>
                <label>Bed</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t7" type="text" placeholder="Bed">
                <label>Date of Birth</label>
				<td>&nbsp;&nbsp;:</td>
				<input name="t8" type="Date" style="height:20px;border-radius:7px">
                <br><br>
                <br>
                <label>Datein</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t9" type="Date" style="height:20px;border-radius:7px">
               <label>Time_in</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t10" type="time" style="height:20px;border-radius:7px">           
               
                <br> 
               <label>Date Out</label>
				<td>&nbsp;&nbsp;:</td>
				<input name="t11" type="date" style="height:20px;border-radius:7px">
               <label>Time_out</label>
				<td>&nbsp;&nbsp;&nbsp;:</td>
				<input name="t12" type="time" style="height:20px;border-radius:7px">
<br>
<br>
				<input type="submit" name="submit1" value="insert" style="text-align:center;"/>
                <input type="submit" name="submit2"value="Delete" />
                <input type="submit" name="submit3"value="display" />
				<input type="submit" name="submit4"value="display" />
                <input type="reset" name="submit5" value="search"/>

    
</div>

<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into labor_records value('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]')"); 
}

if(isset($_POST["submit2"]))
{
    mysqli_query($link,"delete from labor_records where name='$_POST[t1]'"); 
}
if(isset($_POST["submit4"]))
{
    mysqli_query($link,"update labor_records set name='$_POST[t2]' where name='$_POST[t1]'");
}

if(isset($_POST["submit3"]))
{
    $res=mysqli_query($link,"select * from labor_records"); 
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>"; echo "Name"; echo"</th>";
    echo "<th>"; echo "City"; echo"</th>";
    echo "<th>"; echo "Phone"; echo"</th>";
    echo "<th>"; echo "Email"; echo"</th>";
    echo "<th>"; echo "Address"; echo"</th>";
    echo "<th>"; echo "Ward"; echo"</th>";
    echo "<th>"; echo "Bed_Number"; echo"</th>";
    echo "<th>"; echo "Date_of_Birth"; echo"</th>";
    echo "<th>"; echo "Datein"; echo"</th>";
    echo "<th>"; echo "time_in"; echo"</th>";
    echo "<th>"; echo "Dateout"; echo"</th>";
    echo "<th>"; echo "time_out"; echo"</th>";
    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["Name"]; echo"</td>";
        echo "<td>"; echo $row["City"]; echo"</td>";
        echo "<td>"; echo $row["Phone"]; echo"</td>";
        echo "<td>"; echo $row["Email"]; echo"</td>";
        echo "<td>"; echo $row["Address"]; echo"</td>";
        echo "<td>"; echo $row["Ward"]; echo"</td>";
        echo "<td>"; echo $row["Bed_Number"]; echo"</td>";
        echo "<td>"; echo $row["Date_of_Birth"]; echo"</td>";
        echo "<td>"; echo $row["Datein"]; echo"</td>";
        echo "<td>"; echo $row["time_in"]; echo"</td>";
        echo "<td>"; echo $row["Dateout"]; echo"</td>";
        echo "<td>"; echo $row["time_out"]; echo"</td>";
        echo "</tr>";
    }
}

if(isset($_POST["submit5"]))
{
    $res=mysqli_query($link,"select * from labor_records where name='$_POST[t1]'"); 
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>"; echo "Name"; echo"</th>";
    echo "<th>"; echo "City"; echo"</th>";
    echo "<th>"; echo "Phone"; echo"</th>";
    echo "<th>"; echo "Email"; echo"</th>";
    echo "<th>"; echo "Address"; echo"</th>";
    echo "<th>"; echo "Ward"; echo"</th>";
    echo "<th>"; echo "Bed_Number"; echo"</th>";
    echo "<th>"; echo "Date_of_Birth"; echo"</th>";
    echo "<th>"; echo "Datein"; echo"</th>";
    echo "<th>"; echo "time_in"; echo"</th>";
    echo "<th>"; echo "Dateout"; echo"</th>";
    echo "<th>"; echo "time_out"; echo"</th>";
    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["Name"]; echo"</td>";
        echo "<td>"; echo $row["City"]; echo"</td>";
        echo "<td>"; echo $row["Phone"]; echo"</td>";
        echo "<td>"; echo $row["Email"]; echo"</td>";
        echo "<td>"; echo $row["Address"]; echo"</td>";
        echo "<td>"; echo $row["Ward"]; echo"</td>";
        echo "<td>"; echo $row["Bed_Number"]; echo"</td>";
        echo "<td>"; echo $row["Date_of_Birth"]; echo"</td>";
        echo "<td>"; echo $row["Datein"]; echo"</td>";
        echo "<td>"; echo $row["time_in"]; echo"</td>";
        echo "<td>"; echo $row["Dateout"]; echo"</td>";
        echo "<td>"; echo $row["time_out"]; echo"</td>";
        echo "</tr>";
    }
}
?>
                                       
</body>
</html>
