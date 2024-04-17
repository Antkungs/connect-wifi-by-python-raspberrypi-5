<?php
// Check if both SSID and password are submitted
if(isset($_POST['ssid']) && isset($_POST['password'])) {
    $ssid = $_POST['ssid'];
    $password = $_POST['password'];

    // Write SSID and password to file
    $file = fopen("wificonfig_.txt", "w");
    if($file) {
        fwrite($file, $ssid . "\n");
        fwrite($file, $password);
        fclose($file);
        echo "SSID and password saved successfully.";
    } else {
        echo "Failed to open file for writing.";
    }
} else {
    echo "Both SSID and password are required.";
}
?>
