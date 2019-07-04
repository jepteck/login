<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
</head>
<body>
    

<div> Your record is saved successfull</div>



<?php
$db="farm database";

$conn=mysqli_connect('localhost','root','');
if (!$conn) 
{
 die("Problem connecting to the server");
} else {
    //select the db if it exists
   mysqli_select_db($conn,$db);
   }
//get input values from the form when submit button is clicked

         $fname=$_POST['fname'];
        $id=$_POST['idnum'];
        $sname=$_POST['sname'];
        $phonenumber=$_POST['pnumber'];
        $email=$_POST['your_email'];
        $birthday=$_POST['birthday'];
        $slocation=$_POST['slocation'];
        $county=$_POST['county'];
        $gender=$_POST['gender'];
        
//application details 
$sql="SELECT * FROM `personal_details`";

?>
</body>
</html>