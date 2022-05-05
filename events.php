<?php
    
    $to = 'reachus@nuhcan.org';
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $Phone = $_POST["Phone"];
    $email= $_POST["email"];
    $occupation= $_POST["occupation"];
    $address= $_POST["address"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>Dear Admin, you have a new registred audience from the Upcoming Events site</td></tr>
        <tr><td>The Details are as followed:</td></tr>
        <tr><td> </td></tr>
        <tr><td>First Name: '.$firstname.'</td></tr>
        <tr><td>Last Name:'.$lastname.'</td></tr>
        <tr><td>Phone Number: '.$Phone.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Occupation: '.$occupation.'</td></tr>
        <tr><td>Address: '.$address.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'You have registered Successfully, please come with a vaild ID Card (Driver licence, passport, Work ID, etc)';
    }else{
        echo 'Registeration failed';
    }

?>

