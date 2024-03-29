<?php
 
namespace App\Patches\Factory;

class Store
{
	private $db;

	public function __construct()
	{
		$this->db = new \Think\Model();
	}

	public function run()
	{
		$this->preProcessing();
		$exists_log = $this->existsLog();
		$exists_patch = $this->existsPatch();
		$diff = (empty($exists_log) ? $exists_patch : array_diff($exists_patch, $exists_log));
		$this->upgrade($diff);
	}

	private function preProcessing()
	{
		$sql = "CREATE TABLE IF NOT EXISTS `__PREFIX__touch_upgrade` (\r\n`id`  int UNSIGNED NOT NULL AUTO_INCREMENT ,\r\n`upgrade`  varchar(255) NOT NULL ,\r\n`time`  datetime NOT NULL ,\r\nPRIMARY KEY (`id`)\r\n);";
		$this->db->execute($sql);
	}

	private function existsLog()
	{
		return dao('touch_upgrade')->getField('upgrade', true);
	}

	private function existsPatch()
	{
		$rs = glob(dirname(__DIR__) . '/*');
		$list = array();

		foreach ($rs as $dir) {
			$list[] = basename($dir);
		}

		array_shift($list);
		return $list;
	}

	private function upgrade($patches = array())
	{
		foreach ($patches as $patch) {
			$this->handing($patch);
		}
	}

	private function handing($patch)
	{
		$handler = 'App\\Patches\\' . $patch . '\\' . $patch;
		$factory = new $handler();
		$factory->updateDatabaseOptionally();
		$factory->updateFiles();
		$data = array('upgrade' => $patch, 'time' => date('Y-m-d H:i:s'));
		dao('touch_upgrade')->add($data);
	}
}


?>
