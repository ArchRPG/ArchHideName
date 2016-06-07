<?php 
namespace ArchRPG;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Plugin;

class Checker extends PluginTask {
	public function __construct($plugin){
		$this->plugin = $plugin;
		parent::__construct($plugin); 
	}

	public function onRun($tick){
	 foreach($this->getOwner()->getServer()->getOnlinePlayers() as $p) {
$player = $p;
$this->PurePerms = $this->getOwner()->getServer()->getPluginManager()->getPlugin("PurePerms");
        $group = $this->PurePerms->getUserDataMgr($p)->getGroup($p);
        $groupname = $group->getName();
if($this->getOwner()->getServer()->getPluginManager()->getPlugin("PurePerms") === null){
$p->setNameTag("§8⬇");
}else{
	$p->setNameTag("§8⬇");
}
}
	 }
	}
