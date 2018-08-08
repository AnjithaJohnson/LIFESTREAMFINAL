<?php
require('../textlocal.class.php');

$textlocal = new Textlocal(false,false, 'BIQUMilYdl4-cHeNgYIE03vFTPrTEqm1QPNFGTJMh5');

$numbers = array(353876941878);
$sender = 'Textlocal';
$message = 'got message?';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>
