<?php
include("db.php");
include("create_tables.php");
include("send_mail.php");

$email = $_POST['email'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$year = $_POST['year'];
$division = $_POST['division'];
$prn = $_POST['prn'];

$res = array();
$get_mail = "SELECT COUNT(id) FROM `registered_users` WHERE `email` = '$email'";
$result = mysqli_query($con,$get_mail);
$mail_count =  mysqli_fetch_row($result)[0];

if ($name === "" or $name === " ") {
    $res['type'] = 'error';
    $res['code'] = 'Name';
    $res['desc'] = 'blank';
} elseif ($email === "" or $email === " ") {
    $res['type'] = 'error';
    $res['code'] = 'E-mail';
    $res['desc'] = 'blank';
} elseif ($mail_count != '0') {
    $res['type'] = 'error';
    $res['code'] = 'email';
    $res['desc'] = 'duplicate';
}elseif ($prn === "" or $prn === " " or strlen($prn) != 9) {
    $res['type'] = 'error';
    $res['code'] = 'PRN';
    $res['desc'] = 'invalid';
} else {

    // $query = "INSERT INTO `registered_users` (`name`, `email`, `ph_number`, `msg`) VALUES ('$name', '$email', '$prn', '$year')";
    $query = "INSERT INTO `registered_users` (`name`, `email`, `dept`, `year`,`division`, `prn`) VALUES ('$name','$email','$dept','$year','$division','$prn')";
        // $con->query($query);

    try {
        // Your code that may throw an exception
        // mysqli_query($con,$query);
        $con->query($query);
    } catch (mysqli_sql_exception $e) {
        // Handle the exception
        registration_table(($con));
        $con->query($query);
    }

    //send mail here
    $res1 = send_mail($name,$email,"TechVerse - Registration Confirmation","2nd May, 2023","12:30 PM","Room No. 514, MESCOE, Pune","TechVerse Induction Event");
    if($res1){
        $res['mail'] = 'sent';
    }else{
        $res['mail'] = 'fail';
    }
    $res['type'] = 'res';
    $res['code'] = 'success';
    $res['desc'] = 'success';
    $res['email'] = $email;
}

echo json_encode($res);
