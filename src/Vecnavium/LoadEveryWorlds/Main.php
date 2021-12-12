<?php

namespace Vecnavium\LoadEveryWorlds;


use pocketmine\plugin\PluginBase;
use function array_diff;
use pocketmine\world\WorldManager;
use function scandir;


class Main extends PluginBase {

    public function onLoad(): void {
		foreach(array_diff(scandir($this->getServer()->getDataPath() . "worlds"), [".."]) as $AllWorlds){
						if($this->getServer()->getWorldManager()->loadWorld($AllWorlds)){
			}
		}
	}
}
