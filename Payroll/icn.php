<?php 
include 'conn.php';

if(isset($_POST['Upload'])){
  $pdf = $_FILES['filename']['name'];
  $pdf_loc = $_FILES['filename']['tmp_name'];
  $pdf_folder="Save_File/";

  if(
    move_uploaded_file($pdf_loc,$pdf_folder.$pdf)
  ){
    ?>
    <script>alert('File successfully Uploaded.')</script>
    <?php
  }else{
    ?>
    <script>alert('OOPS ! Something went Wrong.')</script>
    <?php
  }
}
?>

<html>
    <head>
<title>Income Tax Form</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  

    </head>
    <style>
    
    .button3 {
    
    border: none;
    color: black;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }
  
  
  .button3:hover {
    background-color: #007bff;
    color: white;
  }
  
       .btn {

border: none;
color: white;

font-size: 16px;
cursor: pointer;

}

/* Darker background on mouse-over */
.btn:hover {
background-color: RoyalBlue;
}
  
.navbar {
    overflow: hidden;
    background-color:  #000080;
    align-self: right;
  }
  
  .navbar a {
    float: center;
    font-size: 16px;  
    text-align: center;
    text-decoration: none;
    align-content: center;
  }
  body {
    font-family: Arial, Helvetica, sans-serif;
  
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
    background-color: #cce6ff;
    align-self: center;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color:  #ccccff;
    min-width: 160px;
    box-shadow: #ccccff;
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color:  black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #cce6ff;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  
  h1 {
  font-family: Arial;
  color:White;
  font-weight: lighter;
  text-align:left ;
  }
  
  .header {
    overflow: hidden;
    background-color: #343a40;
    
    
  }
  
  .header a {
    float: center;
    color: white;
    text-align: center;
    padding: 10px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 10px;
    border-radius: 4px;
     font-family: Arial;
  }
  
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
    font-family: Arial;
  }
  
  
  
  .header a.active {
    background-color: #ff0066;
    color: white;
  }
  
  .header-right {
    float: center;
  }
  
  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
    
    .header-right {
      float: none;
    }
  }
  hr{
  border: 0.1px solid blue;
  }
  
    body{
  background-color:#ffffff;
    margin: 0;  
    padding: px;
    text-align: center;
  }
    
  
  
  h2 {
    font-size: 20px;
    font-family: Arial;
    text-align:left ;
    font-weight: lighter;
    
  }
  h5{
  
  font-family: Arial;
  color:white;
  
  }
  button{
      color:#000080;
  }
  
  
  .div2 {
    width: 30%;
    height: auto;  
    padding: 30px;
    border: 2px solid red;
    margin:  auto;
    text-align:left;
  
  
    
  }
  
  .div3 {
    width: 500px;
    height: auto;  
    padding: 30px;
    border: 2px solid green;
    margin: auto;
    background-color: #ffffff;
    text-align:left;
  
    
  }
  
  
  
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
    
     border: 1px solid black;
  }
  
  td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
   border: 1px solid black;
  }
  
  
  
      img {
      margin-left: 2px;
      border:2px solid black;
     
      width: 70%;
      }
      b {
      color:red}
  
     
  .counters {
      background: #0f479a;
      color: #fff;
      padding: 40px 20px;
      border-top: 3px lightskyblue solid;
      font-family:arial;
      font-weight: bold;
  }
  
  .counters .container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 30px;
      text-align: center;
  }
  
  .counters i {
      color: lightskyblue;
      margin-bottom: 5px;
  }
  
  .counters .counter {
      font-size: 100px;
      margin: 10px 0;
      font-family:arial;
      font-weight: bold;
  }
  
  @media (max-width: 700px) {
      .counters .container {
          grid-template-columns: repeat(2, 1fr);
      }
  
      .counters .container > div:nth-of-type(1),
      .counters .container > div:nth-of-type(2) {
          border-bottom: 1px lightskyblue solid;
          padding-bottom: 20px;
      }
  }
  .btn4 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
  margin-right: auto;
  margin-left: auto;
}

/* Darker background on mouse-over */
.btn4:hover {
  background-color: RoyalBlue;
}
  
        </style>
    <body>
<div class="header">
    <a href="index.html" style="background-color: transparent;"><button class="btn" style="color: white; font-size: 20px; float: left; margin: 10px;"><i class="fa fa-home"></i>Home</button></a>
    <h3  style="color: white;   margin-right: 8px; text-decoration: bold;"><center>Income Tax Form Filling</center></h3>
</div>

        
          <br>


          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <center><h3>Download Income Tax Form</h3>
<!-- Auto width -->
<a href="Income_Tax_Form.pdf" Download><button class="btn4"><i class="fa fa-download"></i> Download</button></a></center>
<br>
<br>

          <br>
<center><h5>After Downloading and Filling the form, Submit the PDF file below :</h5></center>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="form-group row">
    <div class="offset-4 col-8">
<form action="icn.php" method="post" enctype="multipart/form-data">
  <h5><input type="file" id="filename" name="filename" > <button name="Upload" type="submit" class="btn4">Submit</button></h5>
  
      
      </form>
    </div>
  </div>
   
  
</form>

            
    </body>
    
</html>