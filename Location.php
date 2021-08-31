<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index.html</title>
<ul>
                     
  <!-- navigation -->                   
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  float:right;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
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

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  opacity: .6;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
  opacity:.8;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<center><div class="navbar">
        <a href="home.html">Home</a>
         <div class="dropdown">
          <button class="dropbtn">Pharmacy
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="Drugs.html">Drugs</a>
            <a href="lab.html">Labolitary</a>
           
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Patient 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="std.html">Statistics of death</a>
            <a href="appointment form.html">Patients Appointment form</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Services offered
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="cancer.html">cancer treatment</a>
            <a href="malaria.html">Malaria treatment</a>
            <a href="brain.html">Brian treatment</a>
            <a href="labor.html">labor</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Doctors 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="doc.php">Find Doctor</a>
            <a href="Mfs.html">Members of staff</a>
            <a href="chatroom.html">chatroom</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">About us 
            <i class="fa fa-fw fa-envelope"></i>
        
          </button>
          <div class="dropdown-content">
            <a href="Location.php">Location</a>
           
          </div>
        </div>
        <a href="logins.html"><i class="fa fa-fw fa-user"></i> Login</a>
      </div>
    </div>
  </center>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

// Comma separated list of images to rotate 
var imgs = new Array('img/1.jpg','img/2.jpg','img/3.jpg','img/4.jpg');
// delay in milliseconds between image swaps 1000 = 1 second 
var delay = 5000;
var counter = 0;

function preloadImgs(){
  for(var i=0;i<imgs.length;i++){
    MM_preloadImages(imgs[i]);
  }
}

function randomImages(){
  if(counter == (imgs.length)){
    counter = 0;
  }
  MM_swapImage('slide', '', imgs[counter++]);
  setTimeout('randomImages()', delay);
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">

body,td,th {
	font-size: 16px;
	color: #333333;
  top:23%;
}

.style7 {font-size: 18}
.style11 {
	font-size: 12px;
	color: #66CCFF;
}
.style2 {color:#FF7F00; font-size:22;}
.style12 {font-size: 12px;}
.style14 {color: #000000; font-size: 12px; }
.style17 {color: #FFFFFF;}
.style18 {color: #FFFFFF;}
.style21 {font-size: 10px}
.style22 {color: #FFFFFF; font-size: 10px; }
.style24 {color: #FFFFFF; font-size: 16px; }
.style28 {font-size: 16px; color: #66CCFF; }
.style29 {color: #993399}
.style31 {color: #0033CC}
.style33 {font-size: 16px; color: #00CCFF; }
.style35 {color: #FFFFFF; }

</style>
</head>
<br>
<table width="95%">
  <tr>
    <td width="95%" height="22" bgcolor="#000000"><p class="style17"><center><img src="img/images (46).JPG" align="center" width="907" height="62" /></center></p> </tr>
</table>
<table width="95%" height="100">
  <tr>
    <td width="281"  rowspan="2" align="center" valign="top" background="Index.php" bgcolor="#000000"><p class="style2">&nbsp;</p>
      <p class="style14"><a href="home.php"><br>
        Click Here to Go Back  Home
      </a></p>
      <p class="style14">&nbsp;</p>
    <p class="style14"><span class="style18">O<span class="style12">ur Charges are Quite Competitive to suit your pocket. Come and try our Services us</span></span><span class="style31"><span class="style33">. </span></span></p></td>
    <td width="304" height="21" align="center" valign="top" bgcolor="#CC9999">OUR &nbsp;&nbsp;&nbsp;&nbsp;LOCATION<span class="style7">S </span></td>
    <td width="444" rowspan="2" align="center" valign="top" bgcolor="#424242"><p class="style17"><img src="3.JPG" width="387" height="262" /></p>
    <p class="style2" >About Northern Province<p> <p align="justify" class="style17">
    <p class="style18" >The town is at the edge of the plateau covering most of Zambia,
     at an elevation of 1670 m, about 900 m higher than Lake Tanganyika, which comes within 22 km (straight-line distance).
      The escarpment above the lake is the end of the Albertine Rift, the western branch of the East Africa Rift, and the Chongwe Distric area experiences occasional earth tremors. It is also said that the tiny but picturesque Lake Chila within the town experiences inexplicable drying out, and sudden flooding from underground springs, but this may be just a legend.[7]
The second highest waterfall in Africa, Kalambo Falls lies about 40 km (by road) north west, and is formed where the Kalambo River comes over the Rift Valley escarpment.[9]
Chongwe Distric is on the old Great North Road 165 km Eastern, and at one time was the end of that road.[10] It has been paved and as of late 2008 is in poor condition, with large patches of pavement missing, and stretches have reverted to a dirt road. However, work crews were patching the road in late 2008, with one crew starting in Kasama, and the other starting from Chongwe Distric.[11] Since it is the only paved highway access to the town and district, as well as to the port of Mpulungu, its poor condition is a major barrier to development in the area. Buses run daily from Chongwe Distric to Kasama and Lusaka, the capital.
Chongwe Distric is 25 km from the border with Tanzania and connected by a dry-season road to one of only two road border crossings between the two countries. It is not much used, the road beyond the border is a dirt track impassable in the rainy season.[12]
 </p>
 <p class="style17"><img src="img/images (46).JPG" width="307" height="62" /></p>
    <p class="style18">&nbsp;</p>
    <p class="style18">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="549" align="center" valign="middle" bgcolor="#A52A2A"><table border="0" cellspacing="0" cellpadding="0" width="304">
      <tr>
        <td width="304" bgcolor="grey" class="style2"><p class="style2">About Us</P>
        <p class="style18">Officially founded in 1935, the International League of Dermatological Societies (ILDS) has been promoting skin health
 around the world for over 80 years.
Its forerunner began in 1889 as the first of many World Congresses of Dermatology.
 Today, the ILDS represents dermatology at the highest level with over 180 Member Societies from more than 80 countries, 
 we represent over 200,000 dermatologists. ILDS works closely with partners around the world including the World Health
  Organization (WHO), with whom we are in official relations, in order to improve skin health for all people around the
   world.. </p>
          <p class="style2">Our Vision and Mission</p>
          <p class="style18">To attain the best possible skin health for all people around the world.
To increase awareness, cooperation and communication within the global dermatology community to promote high quality education, clinical care, research and innovation that will improve skin health globally.

. </p>
          <p class="style2">Our Guiding Principles</p>
          <p class="style18">Collaboration – to work collaboratively and in partnership with all our stakeholders
Impact – to maximise our impact by measuring and evaluating progress towards our strategic objectives
Communication – to use a range of methods to raise awareness and communicate effectively
Evidence – to ensure that our work reflects the best knowledge, practices and evidence
Stewardship – to identify priorities and commit resources based on realistic assessments of our capabilities
</p>          
          <p class="style29">&nbsp;</p>          </td>
      </tr>
    </table>
    <p align="justify" class="style28">&nbsp;</p>
      <p align="justify" class="style11">&nbsp;</p></td>
  </tr>
</table>
<table width="95%">
  <tr>
    <td width="95%" height="22" bgcolor="#000000"><span class="style18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="style35">Date  :&nbsp; <?php print date("l dS F  Y  ");?>&nbsp;&nbsp;&nbsp;&nbsp;  |  &nbsp;&nbsp;&nbsp; Time :&nbsp;&nbsp;<?php print date(" h:i:s   A");?>&nbsp;&nbsp;</span></span></td>
  </tr>
</table>
<body onload="preloadImgs();randomImages();MM_preloadImages('2.JPG','3.JPG')">
<table width="95%" height="299">
  <tr>
    <td width="593" height="293" valign="middle" bgcolor="#00000"><span class="style21">
    <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img/1.jpg','','img/images (1).PNG',1)"><img src="img/images (1).PNG" name="serv1" width="92" height="15" border="0" id="serv1" /></a></span></td>
    <td width="390" valign="top" bordercolor="#FFFFFF" bgcolor="#9999CC"><div align="center"><img src="img/2.JPG" name="Rotator" width="790" height="249" id="Rotator" onmouseover="MM_swapImage('Rotator','','3.JPG',1)" onmouseout="MM_swapImgRestore()" />&nbsp;Our Offices are dotted beyond the Zmabian Borders </div></td>
    <td width="244" align="center" valign="top" bgcolor="#CC9999"><p class="style22"><img src="img/images (43).JPG" width="109" height="86" align="top" id="Image2" /></p>
      <p class="style22">&nbsp;</p>
      <p class="style24"> &nbsp;&nbsp;&nbsp;MCRM &nbsp;&nbsp;COURIER SERVICES </p>
      <ul class="style22">
        <li class="style12"></li>
        
      </ul>    </td>
      
  </tr>
</table>
<hr>

<hr>
<table width = "99%" border="1" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
<tr valign="top">
<td width="100%" align="center" bgcolor="#000000">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style18">Chongwe Distric general Hospital</span></td>
<td width="0%" align="right"></td>
</tr>
</table>
<table width="98%" border="1" cellpadding="0" cellspacing="0">
<tr>
  <td align="center" valign="top" bgcolor="#CCCCCC">

  Address	:PO Box 420059, Chongwe Distric. All rights reserved.<br>
<a href = "benluomacheng@gmail.com">E-mail Us Today!</a> | <a href = "Privacy.php">Your Privacy</a><br>
</tr>
</table>
                                                                            
</body>
</html>
