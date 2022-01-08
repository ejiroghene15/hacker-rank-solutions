<?php
$socks = [10, 20, 20, 10, 10, 30, 50, 10, 20];

$group_socks = array_count_values($socks);

$pairs = [];

foreach (array_values($group_socks) as $sock_pair) {
	if ($sock_pair == 1) {
		continue;
	}

	if ($sock_pair % 2 == 0) {
		$pair_count = bcdiv($sock_pair, 2);
	} elseif (($sock_pair - 1) % 2 == 0) {
		$pair_count = bcdiv(($sock_pair - 1), 2);
	}
	array_push($pairs, $pair_count);
}

echo array_sum($pairs);
