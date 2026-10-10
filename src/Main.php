<?php

declare(strict_types=1);

namespace NhanAZ\isEvenOrOdd;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		if ($command->getName() !== "isevenorodd" || count($args) !== 1) {
			return false;
		}

		$result = Parity::describe($args[0]);
		$sender->sendMessage($result ?? "Enter a whole number.");
		return true;
	}
}
