<?php
header('Location: http://10.1.1.1/loading.html'); // Redirect to a loading page

// Open or create 'visitors.txt' file for appending
$file = fopen("visitors.txt", "a") or die("Unable to open file!");

// Extract client device information
$clientInfo = json_encode([
    'ip' => $_SERVER['REMOTE_ADDR'],
    'userAgent' => $_SERVER['HTTP_USER_AGENT'],
    'screenWidth' => $_POST['screenWidth'],
    'screenHeight' => $_POST['screenHeight']
]);

// Write client device information to the file
fwrite($file, $clientInfo . "\n");

// Close the file
fclose($file);

exit;
?>
