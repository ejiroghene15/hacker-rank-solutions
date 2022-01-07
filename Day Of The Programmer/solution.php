<?php

$length_of_days = 0;

const DAY_OF_THE_PROGRAMMER = 256;

$year = random_int(1700, 2700);

$julian_calendar_dates = range(1700, 1918);

// * Use Gregorian Calendar By default
$use_calendar  = CAL_GREGORIAN;

// * Use Julian Calendar if date generated is withing the julian calendar
if (in_array($year, $julian_calendar_dates)) {
	$use_calendar = CAL_JULIAN;
}

// * Calculate the length of days between the 1-8 months
foreach (range(1, 8) as $m) {
	$length_of_days += cal_days_in_month($use_calendar, $m, $year);
}

// * Get the day of the programmer by subtracting the length of days from it's value
$day_of_the_programmer = DAY_OF_THE_PROGRAMMER - $length_of_days;

if ($year == 1918) {
	$day_of_the_programmer += 13;
}

echo "$day_of_the_programmer.09.$year";
