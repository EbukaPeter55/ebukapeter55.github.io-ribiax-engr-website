<?php
if(isset($_POST['submit'])):
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(empty($name)):
    echo "<div class='alert alert-danger'>Enter Your name!</div>";
    elseif(empty($phone)):
        echo "<div class='alert alert-danger'>Enter Your Phone Number</div>";
        elseif(empty($email)):
            echo "<div class='alert alert-danger'>Enter Your Email</div>";
            elseif(!preg_match('/^[0-9]*$/', $phone)):
                echo "<div class='alert alert-danger'>Enter a valid phone number</div>";
            elseif(empty($message)):
                echo "<div class='alert alert-danger'>Enter Your message</div>";
            else:
$to = "";//domain email
$subject = "Contact us";
$from = "";
$message  = "<!DOCTYPE html>
<html>
<body style='background:#EDF0F3;padding:10px;'>
<div style='background:#012e5b;color:#FFFFFF;padding:5px;'>
<h3><a href='#' style='text-decoration:none;color:red;'>Ribax Engineering Limited</h3>
</div>				
<div style='background:#FFFFFF;color:black;padding:40px;'>
<p style='font-size:15px;color:grey;'>
name :$name<br/><hr/>
email :$email<br/><hr/>
phone number:$phone<br/><hr/>
$message<br/><hr/>
</p>
</div>
<div style='text-align:center;'>
</div>
</body>
</html>
";
$header = "From:$from\r\n";
$header .= "Cc:$from\r\n";
$header .= "MIME-Version:1.0\r\n";
$header .= "Content-type:text/html\r\n";

$retval = mail($to,$subject,$message,$header);
if($retval):
echo "<div class='alert alert-success'>Your Message Has Been Sent Succesfully, Thank You For Reaching Out to Us</div>";
else:
echo "<div class='alert alert-danger'>Message Not Delivered</div>";
endif;
endif;
endif;
?>