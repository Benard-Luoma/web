<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$conn = new mysqli("localhost","root","","singin") or die ("unable to connect");
$username=$_POST["useranme"];
$Password=$_POST["password"];
if($conn)
echo "connected";
?>
			   
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
             "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
         
         <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
         
         <head>
             <title>Mbala Hospital</title>
             <meta name="description" content="Demo of a Sliding Login Panel using jQuery 1.3.2" />
             <meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
           <meta http-equiv="content-type" content="text/html; charset=utf-8" />	
         
           <!-- stylesheets -->
             <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
             <link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
           
          
              http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
           [if lte IE 6]>
             <script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
           <![endif]
            
             <!-- jQuery - the core -->
           <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
           <!-- Sliding effect -->
           <script src="js/slide.js" type="text/javascript"></script>
             <script type="text/javascript">
         
         function checkfields(){
            var username=document.getElementById("username")
            var password=document.getElementById("password")
           
            if(checkusername(username,'Please enter your Username')){
               if(checkpassword(password,'Please enter your Password')){
               return true
             } 
            }
            return false
         }
         function checkusername(username,msg){
            if(username.value==""){
             alert(msg)
             username.value=""
             username.focus()
             return false;
           }
           else{return true}
         }
           
         function checkpassword(password,msg){
           if (password.value==""){
             alert(msg)
             password.value=""
             password.focus()
             return false
           }
           else{return true}
         }
         </script>
         
         </head>
         
         <body>
         <!-- Panel -->
         <div id="toppanel">
           <div id="panel">
             <div class="content clearfix">
               <div class="left">
                     
                 <p>Mbala staff</p>
                 <img src="img/l/l4.jpg" height="108" width="243" border="0" />
               </div>
               <div class="left">
                 <!-- Login Form -->
                 <form class="login form.html" action="login.php" method="POST">
                   <h1>USER LOGIN</h1>
                   <label class="brown" for="username">Username:</label>
                   <input class="field" type="text" name="username" size="23" />
                   <label class="brown" for="password">Password:</label>
                   <input class="field" type="password" name="password"  size="23" />
                         <div class="clear"></div>
                         &nbsp; <input type="submit" name="submit" value="Login" class="bt_login" />
                 </form>
               </div>
               <div class="left right">			
                  Register Form
                   <p>In Partnership with NAPSA</p><br />
                   <img src="images/napsalogo.png" height="125" width="175" border="0" align="middle" />	
               </div-->
             </div>
         </div> <!-- /login -->	
         
           <!-- The tab on top -->	
           <div class="tab">
             <ul class="login">
               <li class="left">&nbsp;</li>
               <li>Hello User!</li>
               <li class="sep">|</li>
               <li id="toggle">
                 <a id="open" class="open" href="login.php">Log In</a>
                 <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
               </li>
               <li class="right">&nbsp;</li>
             </ul> 
           </div> <!-- / top -->
           
         </div> <!--panel -->
         
             <div id="container">
             <div id="content" style="padding-top:100px;">			
               
               <p align="center"></p>
               <table width="100%" border="0" height="190%" width="100%">
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td><img src="images/zanpen.png" width="900" height="150" /></td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="3">
           </td>
           </tr>
         </table>
         
               
             </div><!-- / content -->	
           </div><!-- / container -->


<title>MBALA GENERAL HOSPITAL</title>
<body>
<style>
  label{
    
  }
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  float:center;
  position:fixed;
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
  <a href="home.php">Home</a>
   <div class="dropdown">
    <button class="dropbtn">Pharmacy
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Drugs.html">Drugs</a>
      <a href="lab.html">Labolitary</a>
      <a href="prescription.html">Prescription</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Paitent 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="std.html">Statistics of death</a>
      <a href="stp.html">Statistics of Discharged Paitent</a>
      <a href="stw.html">Statistics of Paitents in the wards</a>
      <a href="appointment form.html">Paitents Appointment form</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Services offered
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="cancer.html">cancer treatment</a>
      <a href="liver.html">Liver treatment</a>
      <a href="brain.html">Brian treatment</a>
      <a href="labor.html">labor</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Dctors 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="doc.php">Find Doctor</a>
      <a href="Mfs.html">Members of staff</a>
      <a href="#">Staff</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">About us 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Location.php">Location</a>
     
    </div>
  </div>
  <a href="logins.html">Login as Admin</a>
</div>

<style>
.style2 {font-family: Arial, Helvetica, sans-serif}
body,td,th {
	color: #FF9900;
}
body {
	background-color:lightblue;
  width:300;
  background-size:contain;
}
.style4 {color: #000000}
.style6 {font-size: 14px; color: #000000}
.style10 {
	font-size: 12px;
	color: #CC3300;
	letter-spacing: .1em;
	line-height: 16px;
	font: 16px georgia;
	font-weight: bold;
}

.style22 {color: #FF9933; font-weight: bold; }
.style29 {color: #FF9933; font-size: 18px; }
.style35 {color: #000000; font-weight: bold; font-size: 14px; }
.style36 {color: #FF9933; font-size: 16px; }
.style37 {font-size: 16px}
.style38 {
	color: #FFCC00;
	font-size: 12px;
}
.style39 {
	color: #FF9900;
	font-size: 14;
}
.
.style43 {color: #CC3300; letter-spacing: .1em; line-height: 16px; font: 16px georgia; font-size: 12px;}
.style44 {font-size: 12px}
-->
 /* CARD CSS */
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}
button:hover, a:hover {
  opacity: 0.7;
}
button {
  border: none;
  outline: 0;
  
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;

  font-size: 18px;
}
ol{
      position:inherit;
      top:200;
      left:499;
      width:340;
      color:white;
      margin-bottom: 2px;
    }
</style>

<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
// Comma separated list of images to rotate 
var imgs = new Array('img/d/images (32).jpg','img/d/images (33).jpg','img/d/images (35).jpg','img/d/images (36).jpg','img/d/images (38).jpg','img/d/images (45).jpg','img/d/images (47).jpg','img/d/images (48).jpg');
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

//-->
</script>
</head>
<body onload="preloadImgs();randomImages();MM_preloadImages('img/d/d3.JPG')">
<table border="0"  onmouseover="MM_swapImage('slide','','img/d/d4.JPG',1)">
  <tr >
    <td colspan="4" rowspan="2" nowrap="nowrap"><p><span class="style37">&nbsp;&nbsp;</span><span class="style37">&nbsp;</span>    
        </p>
    <p><span class="style37"><span class="style39"> &nbsp;<span class="style44">&nbsp;</span></span><span class="style38">&nbsp;</span></span>        
    <p class="style37"><span class="style16"><span class="style10"> &nbsp;&nbsp;</span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
    
  </tr>
  
  <td valign="bottom" align="left" > <img src="img/images (4).JPG"  name="slide" width="569" height="268" id="slide" /><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','img/images (43).JPG',1)"><img src="img/images (9).JPG" name="Image13" width="160" height="172" border="0" id="Image13" /></a></td>
    <td width="110" height="58">&nbsp;</td>

   
<hr>
</table>
<table>
<tr>
  <td>  
  <img src="img/l/l2.jpg" alt="" width="300" height="300" border="0" />
<p class="style29" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mbala General Hostial </p>
    <p class="style29">&nbsp;&nbsp;&nbsp;&nbsp;&&nbsp;&nbsp;&nbsp; </p>
    
    <p align="justify" class="style35">In fact, it will be prudent that the Hospital computerises the system in 
    order to provide excellent medical facilities to patients particularly those who come from distant places just
     come and access health facilities and this will ultimately enable Mbala Hospital management to avoid 
     unnecessary problems faced by many health centres in Zambia. </p>

    <p align="center" class="style22">&nbsp;&nbsp;<img src="img/images (44).JPG" alt="" name="sec8" width="304" height="204" id="sec8" /></p>
    <p align="justify" class="style36"> <span class="style35">The Mbala Hospital is on the Northern part of Zambia.
     With the influence of patients from all walks of life in the Northern part of Zambia, makes the whole issue 
     of serving patients is really tedious and cumbersome let alone the procedure for patient admission to the
      other hospitals is a problem. Hence, the plan of Mbala is that the medical staff should have access to a 
      system that would allow them to admit patients from remote areas without any problem at all and thereafter
       the patient would be taken to the hospital straight in the ward as opposed to the current system of other 
       
          <hr>
          <p align="justify" class="style35">&nbsp;</p></td>
    <td width="1" bgcolor="#7C4700"><div align="justify"></div></td>
    <td width="3"><div align="justify"></div></td> <hr> <hr>
    <td colspan="2" valign="top"><img src="img/d/d4.jpg" alt="" width="400" height="300" border="0" />&nbsp;&nbsp;<img src="img/d/d5.jpg" alt="" width="400" height="300" border="0" /><br />
	<table border="0" cellspacing="0" cellpadding="0" width="309">

        <tr>
          <td width="210" height="41" class="pageName"><span class="style16"> </span></td>
      
            <div align="justify" class="style6">
              <p>Zambia is a developing country and accessing health facilities is not easy. That being the case, 
              the number of patients to attend to by the medical staff is really overwhelming. In order to provide
               better customer service, there is need to computerise hospital admission system so that records are 
               kept in a database  and ultimately help medical staff retrieve and  make sound decisions.  
 </p>
  <hr>
              <tr>
              <td width="358" height="370" valign="top" bgcolor="whitesmoke">
              
	  <div align="center" class="style16">
	    
        <div align="center">
          <table border="0" cellspacing="0" cellpadding="0" width="255" id="navigation">
            </td>
            </tr>     
               </tr>
  </tr>
  <hr>   
      

<table valign="top"align="right" style="background-color:whitesmoke" width="100%">
  <tr>
<div class="card">
  <img src="img/c/images (32).jpg" alt="John" style="width:100%; left:0;">
  <td><h1>Luoma</h1>
  <p class="title">CEO & Founder</p>
  <p>doctor</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
</div>
</div>
</div>
          </div>
</td>
        </tr>
          
            <p align="center" class="style6" valign><span class="style4 style10"><span class="style16"><img src="img/images (44).jpg" alt="" width="333" height="400" border="0" /><br>Our Guiding Principles </span></span></p>
            <p align="justify" class="style6">
Collaboration – to work collaboratively and in partnership with all our stakeholders
Impact – to maximise our impact by measuring and evaluating progress towards our strategic objectives
Communication – to use a range of methods to raise awareness and communicate effectively
Evidence – to ensure that our work reflects the best knowledge, practices and evidence
Stewardship – to identify priorities and commit resources based on realistic assessments of our capabilities
  </p>
            <p align="center" class="style40">
            <strong> </strong><img src="img/l2/images.jpg" alt="Header image" width="395" height="206" border="0" /></td>
        </tr>
    </table>	</td>
    <td width="11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width="472" valign="top"><img src="img/do.jpg" alt="" width="1" height="10" border="0" /><br />
     <table width="454" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
        <tr>
          <td colspan="3" align="center" class="sidebarHeader style16" id="sidebarHeader">things</td>
        </tr>

  
</div>



        </header>
 	
	            <div class="breaking-news" >
     	            <div class="breaking-news-font" ><p>Notice to Our Patients Regarding a Stolen Briefcase. <a data-udi="umb://document/751e6d3239ca47c89ac36857b38ca1f3" href="/about-moffitt/corporate-compliance/notice-to-our-patients-regarding-a-stolen-briefcase/" title="Notice to Our Patients Regarding a Stolen Briefcase">Learn More</a></p>	</div>
                </div>

      <div class="card">
  <img src="img/images (9).jpg" alt="John" style="width:100%">
  <h1>Luoma</h1>
  <p class="title">CEO & Founder</p>
  <p>doctor</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
    <br /> </td>
    <td width="110"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <div class="card">
  <img src="img/images (4).jpg" alt="John" style="width:100%; left:0;">
  <h1>Luoma</h1>
  <p class="title">CEO & Founder</p>
  <p>doctor</p>
  <a href="#"><i class="fa fa-dribbble"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
  <p><button>Contact</button></p>
</div>
</div>
</div>
</table>
          </table>
  <tr>     </table>
    <td width="358">&nbsp;</td>
    <td width="1"></td>
    <td width="3">&nbsp;</td>
    <td width="194">&nbsp;</td>
    <td width="260">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="472">&nbsp;</td>
    <td width="110">&nbsp;</td>
  </tr>
</table>
                                                                            
</body>
</html>
<td valign="top"width="75%">
</td>
</tr>
</table>
<center><table width="95%"cellspacing="0"cellpadding="0"border="1">
<tr><td valign="top"align="middle">
Copyright &copy;2020 Luoma Benard Katala Cheng Arifa Amulamu <br>
<center>Mbala General Hospital  <?print (date("F d,Y"));?></center>
</td></tr>
</table></center>
</html>
