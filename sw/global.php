<?php
$message = "i am php";
function mydetails()
{   global $message;
    echo "<p>Global variable
    locally is $message
    </p>";
    $sms="i am sms";
    echo "<p>my local variable is :$sms</p>";

}
mydetails();
echo "<p>my global variables is :$message</p>";