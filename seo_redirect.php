<?php
$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/delivery-payment/'){ 
    header("HTTP/1.1 301 Moved Permanently");
    header ("Location: /delivery/"); 
    exit(); 
}
// /delivery-payment/ - старая страница
// /delivery/ - новая страница
// данный файл подключить в init.php
?>
