<?php

require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://antishounaksystem.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'qZbpQ3WCWRmXu6jH8XJZQxVze6hZNo6FTACevLEe';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);