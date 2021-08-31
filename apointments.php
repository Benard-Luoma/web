
<?php

$link=mysqli_connect("localhost","root","","signin");
?>
<html>
  
<form name="appointment form.html" method="POST" action="apointments.php">
  
  <div style="width: 400px;">
  </div>
  <div style="padding-bottom: 18px;font-size : 30px;margin-left:200;margin-top:70; color:gold">MBALA REGISTRATION</div>
  <div style="display: flex; padding-bottom: 23px;width : 450px;top: 69px;"></div>
  <br>
  </div><div style="padding-bottom: 18px;color:black">App_date<span style="color: red;"> *</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date"  name="t1" style="width : 200px;" placeholder="Enter App_date"class="form-control" required/>
  </div>
  <hr>
  
  
  <div style="padding-bottom: 18px; color:black;">App_Time<span style="color: red;"> *</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="time"  name="t2"  style="width : 200px;"placeholder="Enter App_time" class="form-control"/>
    <br>
  </div>
  <hr>
  
  
  <div style="padding-bottom: 18px; color:black;">Patient_Name<span style="color: red;"> *</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text"  name="t3" style="width : 200px;"placeholder="Enter Name" class="form-control"/>
  </div>
  <hr>
  
  
  <div style="padding-bottom: 18px;color:black">Phone<span style="color: red;"> *</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="number"  name="t4" style="width : 200px;" placeholder="Enter Phone No#"class="form-control"/>
  </div>
  <hr>
  
  
  </div><div style="padding-bottom: 18px;color:black">Email<span style="color: red;"> *</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email"  name="t5" style="width : 200px;" placeholder="Enter email"class="form-control"/>
    </div>
    <hr>
    
  
    <div style="padding-bottom: 18px; color:black;">Hospital<span style="color: red;"> *</span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  name="t6" style="width : 200px;"placeholder="Enter Hospital" class="form-control"/>
    </div>
    <hr>
    
  
  </div><div style="padding-bottom: 18px;color:black">Check_up_request<span style="color: red;"> *</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="data_7" name="t7" style="width : 200px;" placeholder="Enter check_up request"class="form-control"/>
    </div>
    <hr>
    
  
    <div style="padding-bottom: 18px; color:black;">State<span style="color: red;"> *</span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="data_8" name="t8" style="width : 200px;"placeholder="Enter state" class="time"/>
    </div>
  
  <hr>
  <input type="submit" name="submit1" value="insert" style="text-align:center;"/>
                <input type="submit" name="submit2"value="Delete" />
                <input type="submit" name="submit3"value="display" />
				<input type="reset" name="submit5" value="Reset"/>

    
</div>


<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert INTO appointment value('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]')"); 
}

if(isset($_POST["submit2"]))
{
    mysqli_query($link,"delete from appointment where name='$_POST[t1]'"); 
}

if(isset($_POST["submit3"]))
{
    $res=mysqli_query($link,"select * from appointment"); 
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>"; echo "app_date"; echo"</th>";
    echo "<th>"; echo "app_time"; echo"</th>";
    echo "<th>"; echo "patient_name"; echo"</th>";
    echo "<th>"; echo "phone"; echo"</th>";
    echo "<th>"; echo "email"; echo"</th>";
    echo "<th>"; echo "hospital"; echo"</th>";
    echo "<th>"; echo "check_up_request"; echo"</th>";
    
    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["app_date"]; echo"</td>";
        echo "<td>"; echo $row["app_time"]; echo"</td>";
        echo "<td>"; echo $row["patient_name"]; echo"</td>";
        echo "<td>"; echo $row["phone"]; echo"</td>";
        echo "<td>"; echo $row["email"]; echo"</td>";
        echo "<td>"; echo $row["hospital"]; echo"</td>";
        echo "<td>"; echo $row["check_up_request"]; echo"</td>";
      
    }
}
?>
                                       
</body>
  </html>