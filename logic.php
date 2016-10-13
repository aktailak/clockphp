<?php
date_default_timezone_set('Asia/Almaty');
$hour = intval(date('G'));
if ($hour >= 5 && $hour < 11) {
$time_of_day = 'morning';
} elseif ($hour >= 11 && $hour < 16) {
$time_of_day = 'afternoon';
} elseif ($hour >= 16 && $hour < 20) {
$time_of_day = 'evening';
} else {
$time_of_day = 'night';
}
