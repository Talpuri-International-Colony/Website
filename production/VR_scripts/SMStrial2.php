<?php
    include('Way2SMS-API-master\Way2SMS-API-master\way2sms-api.php');

    $ret_val = sendWay2SMS ( '9407962074' , 'rawalarpana' , '7587140624' , 'verification');   
    //sendWay2SMS ( '9000012345' , 'password' , '987654321,9876501234' , 'Hello World');   

    echo implode(" ",$ret_val);
    
?>