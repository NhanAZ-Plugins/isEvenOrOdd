<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Parity.php';

use NhanAZ\isEvenOrOdd\Parity;

$cases = [
	'0' => '0 is even',
	'1' => '1 is odd',
	'2' => '2 is even',
	'9999' => '9999 is odd',
	'10000' => '10000 is even',
	'-15' => '-15 is odd',
	'-0' => '-0 is even',
	'0002' => '0002 is even',
	'92233720368547758080' => '92233720368547758080 is even',
	'1.5' => null,
	'1e2' => null,
	'+' => null,
	'abc' => null,
	'' => null,
];

foreach ($cases as $input => $expected) {
	$actual = Parity::describe((string) $input);
	if ($actual !== $expected) {
		throw new RuntimeException("Unexpected parity for '$input': " . var_export($actual, true));
	}
}

echo 'PASS: ' . count($cases) . " parity cases\n";
