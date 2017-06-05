<?php

//Including the requird config file for making database connections 
include 'INCLUDES/config.php';

// Storing the details eneterd by the user into variables
$user_Name = $_POST['user_Name'];
$user_Email = $_POST['user_Email'];
$user_Number = $_POST['user_Number'];
$booking_Date = $_POST['booking_Date'];
$booking_Time = $_POST['booking_Time'];
$person_Number = nl2br($_POST['person_Number']);

// Setting the mail parameters
$body = nl2br("Name:.$user_Name.\n subject:$user_Number.\n Booking Date: .$booking_Date.\n Booking Time:$booking_Time.\n Number Of Person: .$person_Number");//Body of the message
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan_Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


 //To check if any field is empty
if(empty($user_Name) or empty($user_Email) or empty($user_Number) or empty($booking_Date)or empty($booking_Time) or empty($person_Number)){
      echo 'There are errors in your form. Please check.';
}else{
      //Queries to store the uer data into database 

      $sql = "INSERT INTO booktabledata (b_date,b_time,b_name,b_number,b_email,b_person) VALUES ('$booking_Date','$booking_Time','$user_Name','$user_Number','$user_Email','$person_Number')";
      $result = mysqli_query($con,$sql);      

      //To check if the query and connection were successful or not

      if($result){
            //Callin the mail function and checking if the mail is succefully sent or not
            if(!mail("bhuvansingh206@gmail.com","New query received",$body,$headers)){
                  echo 'The messgae was not send. Please try again.';
            }else {
                  echo "success";
            }           
      }else {
             echo 'The messgae was not send. Please try again.' .mysqli_error($con);
      }
}