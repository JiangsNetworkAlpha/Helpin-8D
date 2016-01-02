<?php

namespace ifteam\SnowHalation;

use pocketmine\scheduler\PluginTask;
use pocketmine\level\Position;

class destructSnowLayerTask extends PluginTask {
	public $position;
	function __construct(SnowHalation $owner, Position $position) {
		parent::__construct ( $owner );
		$this->position = $position;
	}
	public function onRun($currentTick) {
		/**
		 *
		 * @var $owner Snow
		 */
		$owner = $this->getOwner ();
		$owner->destructSnowLayer ( $this->position );
	}
}
?>
