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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    

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
$sql="INSERT INTO `personal_details`(`ID`, `First_name`, `Second_name`, `Email`, `Phone_number`, `Birthday`, `Gender`, `County`, `sub_location`) 
VALUES ('$id','$fname','$sname','$email','$phonenumber','$birthday','$gender','$county','$slocation')";

//$sql ="INSERT INTO ``(`ID`, `firstname`, `othername`, `surname`, `phonenumber`, `email`, `IDNumber`, `currentlevel`, `cert`, `campus`, `program`, `modeofstudy`) 
//VALUES (null,'$fname','$othersname','$surname',$phonenumber,'$email',$id,'$education','$cert','$campus','$programme','$mode_of_study')";
//insert the record 
$query=mysqli_query($conn,$sql);
if ($query===false) {
echo "Error".mysqli_error($conn);
}
elseif  ($query===true){
 //sign up for the userlogin
 $sql2="INSERT INTO `login`(`email`, `pass`) VALUES ('$email','$id')";
 $query2=mysqli_query($conn,$sql2);
 if ($query2===true)
 {
    $dataQuery = "SELECT * FROM personal_details WHERE ID ='$id'";
    $data = mysqli_query($conn,$dataQuery);
   
    $result = mysqli_fetch_assoc($data);

    ?>

<div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                <div class="card" style="width: 28rem;">
                    <h2 class="text-center text-success card-header">Your Personal Details</h2>
                <div class="card-body">
                    <p><strong>Name: </strong><?=$result['First_name']." ".$result['Second_name']; ?></p>
                    <p><strong>Email: </strong><?=$result['Email'];?></p>
                    <p><strong>Phone Number: </strong><?=$result['Phone_number'];?></p>
                    <p><strong>ID: </strong><?=$result['ID'];?></p>
                    <p><strong>County: </strong><?=$result['County'];?></p>
                    <p><strong>Sub Location: </strong><?=$result['sub_location'];?></p>
                    <p><strong>Birthday: </strong><?=$result['Birthday'];?></p>
                    <p><strong>Gender: </strong><?=$result['Gender'];?></p>
                  
                </div>
                <div class="card-footer text-center">
                <a href="edit.php?id=<?=$result['ID'];?>" class="btn btn-primary btn-sm">Edit</a>
                </div>
                
                </div>
                </div>
                
                <div class="col-md-3">

                </div>
            </div>
    </div>



    <?php

   // var_dump($result);
    
 } else {
    header("location: error.html");
 }
 
  
}
?>


<?php

$dataQuery = "SELECT * FROM personal_details WHERE ID ='$id'";
$data = mysqli_query($conn,$dataQuery);

$result = mysqli_fetch_assoc($data);

?>

</body>
</html>