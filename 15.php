<?php 
$tenfile = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($tenfilez); 
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>