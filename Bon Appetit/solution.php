<?php
// * Bill for meals ate
$bill = [3, 10, 2, 9];

// * Indexed item skipped by Anna
$k = 1;

// * Bill charged by Brian for annas portion
$b = 12;

#1 Remove item skipped by anna from the bill
unset($bill[$k]);

#2 Sum the remainder of the bill and divide between both parties to get what they both should equally pay
$divided_bill = array_sum($bill) / 2;

if ($b > $divided_bill) {
	$overcharge = $b - $divided_bill;
	print($overcharge);
} else {
	print("Bon Appetit");
}
