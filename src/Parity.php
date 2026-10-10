<?php

declare(strict_types=1);

namespace NhanAZ\isEvenOrOdd;

final class Parity {

	public static function describe(string $number): ?string {
		if (preg_match('/^-?[0-9]+$/D', $number) !== 1) {
			return null;
		}

		$lastDigit = (int) substr($number, -1);
		return $number . ($lastDigit % 2 === 0 ? " is even" : " is odd");
	}
}
