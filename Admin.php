<?php
$conn = new mysqli("localhost","root","","connect") or die ("unable to connect");

if($conn)
echo "connected";
?>
<html>
    <title>Admin</title>
    <head>About this page<head>
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

               <a href="liver.html">Liver</a>
               <div class="dropdown">
                </div>
              </div>
              <style>
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
    </html>