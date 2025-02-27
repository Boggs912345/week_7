<?php

// Get the current day of the week
$currentDay = date('l'); // 'l' (lowercase 'L') returns the full name of the day

// For testing purposes, you can manually set the day
// $currentDay = 'Monday'; // Uncomment to test

switch ($currentDay) {
    case 'Monday':
        echo "Start of the Week";
        break;
    case 'Tuesday':
    case 'Wednesday':
    case 'Thursday':
        echo "Midweek";
        break;
    case 'Friday':
        echo "End of the work week";
        break;
    default:
        echo "Weekend";
        break;
}
