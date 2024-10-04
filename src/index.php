<?php
echo phpversion();
echo '<br>';
$vincode = '1HGCM826';
checkPHPVersion($vincode);

// simple function to check if the PHP version is greater than 7.0
function checkPHPVersion($vincode = null)
{
    if (version_compare(phpversion(), '7.0', '>=')) {
        echo 'PHP version is greater than 7.0';
    } else {
        echo 'PHP version is less than 7.0';
    }
    echo '<br>';
    if ($vincode) {
        echo 'VIN code is: ' . $vincode;
    }
}