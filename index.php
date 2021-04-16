<?php 
    $ip = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $file = "visitors.html";
    $file = fopen($file, "a");
    $data = "<pre><b>User IP</b>: $ip <b>User Request Method</b>: $requestMethod <b> Browser</b>: $browser <br> </pre>";
    fwrite($file, $data);
    fclose($file);
    
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
?>