<html>
    <title>Admin cancer_records</title>
    
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
<h1>Chongwe Distric Hospital Cancer Records</h1><br>

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
    p{
        color:white;
        background-image:url("img/c/11.jpg");
        background-repeat:no-repeat fixed center;
        width:799px;
        height:250px;
        overflow:hidden;
       font-size:18px;
        border-radius:45px;
        
    }

    input{
      
        color:black;
        border-radius:15px;
      
    }
    h1{
        color:white;
    }
    select{
    
        color:black;
        border-radius:15px;
     
    }
   td{
       text-align:center;
       background-color:gray;
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
				<td width="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t1"  type="text" placeholder="Enter Name" require>
               
                
                <label>City</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t2" type="text" placeholder="Enter City">
               
                <br><label>phone</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t3" type="phone"placeholder="Enter Phone#">
                        
<label>Email</label>
				<td>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t4" type="email" placeholder="Enter Email">
              
              <br>
                <label>Address</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t5" type="text" placeholder="Enter Address">
        
                 
                <label>ward</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t6" type="number" placeholder=" Ward#">
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Bed</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t7" type="text" placeholder="Bed">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<label>Condition</label>
<td>&nbsp;&nbsp;:</td>
<select name="t8" id="Arrival-Year">
<option value="Conditions"></option>
<option value="">No Preference</option>
          <option value="Adrenal Carcinoma">Adrenal Carcinoma</option>
                <option value="Anal cancer">Anal cancer</option>									
                  <option value="Appendiceal (Appendix) cancer">Appendiceal (Appendix) cancer</option>
                  <option value="Basal Cell Carcinoma">Basal Cell Carcinoma</option>
                  <option value="Bladder cancer">Bladder cancer</option>
                  <option value="Brain cancer">Brain cancer</option>
                  <option value="Breast cancer">Breast cancer</option>
                  <option value="Cervical cancer">Cervical cancer</option>
                  <option value="Cholangiocarcinoma (Bile Duct cancer)">Cholangiocarcinoma (Bile Duct cancer)</option>
                  <option value="Colon cancer">Colon cancer</option>
                  <option value="Colorectal cancer">Colorectal cancer</option>
                  <option value="Ductal Carcinoma In Situ">Ductal Carcinoma In Situ</option>
                  <option value="Endometrial (Uterine) cancer">Endometrial (Uterine) cancer</option>
                   <option value="Esophageal cancer">Esophageal cancer</option>
                  <option value="Gallbladder cancer">Gallbladder cancer</option>
                  <option value="Gastrointestinal Carcinoid Tumor">Gastrointestinal Carcinoid Tumor</option>
                  <option value="GIST (Gastrointestinal Stromal Tumor)">GIST (Gastrointestinal Stromal Tumor)</option>
  </select>

  <br><br><br>
  
  <label>Date of Birth</label>
				<td>:</td>
				<input name="t9" type="Date" style="height:20px;border-radius:7px">
             
<label>Datein</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t10" type="Date" style="height:20px;border-radius:7px">
                <br>  <label>Time_in</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t11" type="time" style="height:20px;border-radius:7px">
                
                <label>Date Out</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t12" type="date" style="height:20px;border-radius:7px">
              <br>  <label>Time_out</label>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
				<input name="t13" type="time" style="height:20px;border-radius:7px">
<br>
<br>
				<input type="submit" name="submit1" value="insert" style="text-align:center;"/>
                <input type="submit" name="submit2"value="Delete" />
                <input type="submit" name="submit3"value="display" />
				<input type="reset" name="submit5" value="Reset"/>

    
</div>


<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into cancer value('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]')"); 
}

if(isset($_POST["submit2"]))
{
    mysqli_query($link,"delete from cancer where name='$_POST[t1]'"); 
}

if(isset($_POST["submit3"]))
{
    $res=mysqli_query($link,"select * from cancer"); 
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>"; echo "Name"; echo"</th>";
    echo "<th>"; echo "City"; echo"</th>";
    echo "<th>"; echo "Phone"; echo"</th>";
    echo "<th>"; echo "Email"; echo"</th>";
    echo "<th>"; echo "Address"; echo"</th>";
    echo "<th>"; echo "Ward"; echo"</th>";
    echo "<th>"; echo "Bed_Number"; echo"</th>";
    echo "<th>"; echo "PCondition"; echo"</th>";
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
        echo "<td>"; echo $row["PCondition"]; echo"</td>";
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
