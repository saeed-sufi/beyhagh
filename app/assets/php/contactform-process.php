<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "نام الزامی است ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "ایمیل الزامی است ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "پیام الزامی است ";
} else {
    $message = $_POST["message"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "yourname@domain.com";
$Subject = "پیام جدید ارسالی از سایت ";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "موفق";
}else{
    if($errorMSG == ""){
        echo "ارسال ناموفق بود... ";
    } else {
        echo $errorMSG;
    }
}
?>