<?php
$responce='';
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

if( isset($_POST['submitbutton']))
{
    //1. fetch form data
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $phonenumber =$_POST['phonenumber'];
    $message =$_POST['message'];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
    contactus(firstname,lastname,email,phonenumber,message)
    VALUES('$firstname','$lastname','$email','$phonenumber','$message')");

    if($insertData)
    {
         $responce="Data Submitted Successfully";
    }
    else{
        $responce="Error Occured" .mysqli_error($conn);
    }
    
}
?>