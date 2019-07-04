



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


        $fname=((isset($_POST['fname']))?$_POST['fname']:'');
        $id=((isset($_POST['idnum']))?$_POST['idnum']:'');
        $sname=((isset($_POST['sname']))?$_POST['sname']:'');
        $phonenumber=((isset($_POST['pnumber']))?$_POST['pnumber']:'');
        $email=((isset($_POST['your_email']))?$_POST['your_email']:'');
        $slocation=((isset($_POST['slocation']))?$_POST['slocation']:'');
        $county=((isset($_POST['county']))?$_POST['county']:'');
        $gender=((isset($_POST['gender']))?$_POST['gender']:'');
        $birthday=((isset($_POST['birthday']))?$_POST['birthday']:'');

        $userId = $_GET['id'];

        echo $userId;
    
        $dataQuery = "SELECT * FROM personal_details where ID ='$userId'";
        $dat = mysqli_query($conn,$dataQuery);
       
        $result = mysqli_fetch_assoc($dat);
    
        

?>




    <div class="page-wrapper  p-t-100 p-b-100 font-robo" style="background-color: rgb(132, 250, 132);">
        <div id=abc></div>
        
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Personal Details</h2>
                    <form method="POST" action="edit.php" >
                            <div class="row row-space">
                            <div class="col-2">
                        <div class="input-group">


                            <input class="input--style-1" type="text" value="<?=$result['First_name']; ?>" name="fname" required>
                        </div>
                            </div>
                            <div class="col-2">
                                    <div class="input-group">
                                            <input class="input--style-1" type="text" value="<?=$result['Second_name']; ?>" name="sname" required>
                                        </div>
                            </div>
                            </div>
                            
                            <div class="row row-space">
                                    <div class="col-2">
                                            <div class="input-group">
                                                    <input type="text" name="your_email" id="your_email" class="input--style-1" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="<?=$result['Email'];?>">
                
                                                </div>
                                    </div>
                                    <div class="col-2">
                                            <div class="input-group">
                                                    <input class="input--style-1" type="text" value="<?=$result['Phone_number'];?>" name="pnumber">
                                                </div>
                                    </div>
                                    </div>


                          
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" value="<?=$result['Birthday'];?>" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected"><?=$result['Gender'];?></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-1" type="text" value="<?=$result['ID'];?>" name="idnum">
                                    
                                    </div>
                                </div>
                                <div class="col-2">
                                        <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="county">
                                                        <option disabled="disabled" selected="selected"><?=$result['County'];?></option>
                                                        <option>Uasin Gishu</option>
                                                        <option>Nairobi</option>
                                                        <option>Nakuru</option>
                                                        <option>Kakamega</option>
                                                        <option>Nandi</option>
                                                        <option>Kericho</option>
                                                        <option>Tharaka Nithi</option>
                                                        <option>Meru</option>
                                                        <option>Nyeri</option>
                                                        <option>Bungoma</option>
                                                        <option>Embu</option>
                                                        <option>Laikibia</option>
                                                    </select>
                    
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                </div>
                            </div>

                        
                       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" value="<?=$result['sub_location'];?>" name="slocation">
                                </div>
                            </div>
                        </div>



                    
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" >Update</button>
                        </div>
                    </form>
                </div>

<?php
//application details 
$sql="UPDATE `personal_details` SET `ID`=$id,`First_name`=$fname,`Second_name`=$sname,
`Email`=$email,`Phone_number`=$phonenumber,`Birthday`=$birthday,`Gender`=$gender,`County`=$county,`sub_location`=$slocation WHERE `ID`=";

$query=mysqli_query($conn,$sql);


$sql2="UPDATE `login` SET `email`=$email,`pass`=$id WHERE `email`=$email";
$query2=mysqli_query($conn,$sql2);

?>

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/popup.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
