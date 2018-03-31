<?php

set_time_limit(0);
ini_set('display_errors', 1);
error_reporting(E_ALL);

class TestPlugin{
	
	public $bot;
	
	public function onEnable(){
		$this->getBot()->getLogger()->info("onEnable в плагине TestPlugin выполнен");
	}
	
	public function onDisable(){
		$this->getBot()->getLogger()->info("onDisable выполнен в плагине TestPlugin");
	}
	
	public function onCommand($player,$cmd,$args){
		if($cmd == "plugincommand"){
			$player->sendMessage("Ответ на команду plugincommand");
			//$this->getBot()->getTaskManager()->addDelayedTask(new CallBackTask(array($player,"sendMessage"),array("прив")),5);
		}
	}
	
	public function getBot(){
		return $this->bot;
	}
	
}
