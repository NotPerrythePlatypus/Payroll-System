<?php 
include 'conn.php';
error_reporting(0);
?>


<html>
    <head>
<title>PAYSLIP</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
  
  button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
body{
  background-image: url('pay.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 50% 50%;
  background-position: center;
  
}

@media print {
  #printPageButton {
    display: none;
  }
}

        </style>
    <body>
        <div class="header" id="printPageButton">
    <a href="index.html" style="background-color: transparent;"><button class="btn" style="color: white; font-size: 20px; float: left; margin: 10px;"><i class="fa fa-home"></i>Home</button></a>
    <button onclick="document.getElementById('id01').style.display='block'" style="color: white; margin: 5px; font-size: 20px; float: right" class="btn">Generate PaySlip</button>
    <h3  style="color: white;  margin-bottom: 8px; margin-right: 8px; text-decoration: bold;"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payslip Generation</center></h3>
</div>

          

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="payslip.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://cdn1.iconfinder.com/data/icons/avatar-3/512/Manager-512.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input style="width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;" type="text" placeholder="Enter Your Employee Code" name="roll" required>

      
      <button  style="background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;" type="submit">Submit</button>
      
    </div>

    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




          <?php

$roll = $_POST['roll'];
$sql = "SELECT * FROM `hello` WHERE `EMP`= '$roll' ";



$result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
?>
<?php
                    
                    
// Create a function for converting the amount in words
function AmountInWords(float $amount)
{
   $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
   // Check if there is any number after decimal
   $amt_hundred = null;
   $count_length = strlen($num);
   $x = 0;
   $string = array();
   $change_words = array(0 => 'Zero', 1 => 'One', 2 => 'Two',
     3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
     7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
     10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
     13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
     16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
     19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
     40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
     70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $x < $count_length ) {
      $get_divider = ($x == 2) ? 10 : 100;
      $amount = floor($num % $get_divider);
      $num = floor($num / $get_divider);
      $x += $get_divider == 10 ? 1 : 2;
      if ($amount) {
       $add_plural = (($counter = count($string)) && $amount > 9) ? '' : null;
       $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
       $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
       '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
       '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
        }
   else $string[] = null;
   }
   $implode_to_Rupees = implode('', array_reverse($string));
   $get_paise = ($amount_after_decimal > 0) ? "And " . ($change_words[$amount_after_decimal / 10] . " 
   " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
   return ($implode_to_Rupees ? $implode_to_Rupees . 'Rupees ' : '') . $get_paise;
}
?>

<!-- call the function here -->
 <?php $amt_words=$row['NP2'];
  // nummeric value in variable
 
 $get_amount= AmountInWords($amt_words);
 
 
                     ?>
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center lh-1 mb-2">
                            <h4 class="fw-bold">PAYSLIP</h4> <span class="fw-normal">Payment slip for the month of March 2022</span>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Employee Code</span> <small class="ms-3"><?php echo $row['EMP']; ?></small> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Employee Name</span> <small class="ms-3"><?php echo $row['Name']; ?></small> </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Designation</span> <small class="ms-3"><?php echo $row['DES']; ?></small> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Month</span> <small class="ms-3">March</small> </div>
                                    </div>
                                </div>
                            </div>
                           
                            <table class="mt-4 table table-bordered">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col">Earnings</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Deductions</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Basic Pay</th>
                                        <td>₹ <?php echo $row['BP']; ?></td>
                                        <th scope="row">Provident Fund</th>
                                        <td>₹ <?php echo $row['PF']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">DA</th>
                                        <td>₹ <?php echo $row['DA']; ?></td>
                                        <th scope="row">Income Tax</th>
                                        <td>₹ <?php echo $row['IT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TA</th>
                                        <td>₹ <?php echo $row['TA']; ?> </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">HRA</th>
                                        <td>₹ <?php echo $row['HRA']; ?> </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                    
                                    <tr class="border-top">
                                        <th scope="row">Total Earning</th>
                                        <th>₹ <?php echo $row['TE']; ?></th>
                                        <th scope="row">Total Deductions</th>
                                        <th>₹ <?php echo $row['TD']; ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                <div class="col-md-4" style="font-size: 20px;"> <br> <span class="fw-bold">Amount Received : ₹ <?php echo $row['NP']; ?></span> </div>
                <div class="border col-md-8">
                    <div class="d-flex flex-column"> <span>In Words</span><span id="words" > <?php echo $get_amount; ?></span></div>
                </div>
                
            </div>
            <br>
<br>
                 <br>
                    <br>
                    <h2><span  style="margin-left: 84%;">(Sd/-)</span></h2>
<h2><span class="fw-bold" style="margin-left: 80%; text-decoration: underline;">E - Signature</span></h2>
      
                        <center><button onclick="window.print()" class="button3" style="user-select: auto;" id="printPageButton">Print</button></center>
                    </div>
                    
                </div>
            </div>

<?php
      }
      ?>
            
            
    </body>
    
</html>