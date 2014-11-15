<?php
// Set your return content type
header('Content-type: application/xml');

// Website url to open
$uri = $_GET['src'];
 
// Get RSS as Read only
$page = fopen($uri, "r");
 
// If there is something, read and return
if ($page) {
    while (!feof($page)) {
        $buffer = fgets($page, 4096);
        echo $buffer;
    }
    fclose($page);
}
?>