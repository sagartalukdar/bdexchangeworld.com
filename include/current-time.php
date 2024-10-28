<?php
date_default_timezone_set('Asia/Kolkata'); // Set the timezone to India

$current_time = date('h:i A'); // Get the current time in 12-hour format with AM/PM (hh:ii A)

// Define the start and end times in 12-hour format with AM/PM
$start_time = '08:00 AM';
$end_time = '09:00 PM';

// Convert current time to timestamp for comparison
$current_timestamp = strtotime($current_time);
$start_timestamp = strtotime($start_time);
$end_timestamp = strtotime($end_time);

// Check if current time is between start and end times
$is_online = ($current_timestamp >= $start_timestamp && $current_timestamp <= $end_timestamp);

// Return true or false based on the comparison
// return $is_online;


?>
