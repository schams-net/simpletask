<?php
namespace SchamsNet\Simpletask\Task;

/**
 * Demo scheduler task
 *
 * @author Michael Schams <schams.net>
 * @package simpletask
 */
class DemoTask extends \TYPO3\CMS\Scheduler\Task\AbstractTask {

	/**
	 * Public method, called by scheduler.
	 *
	 * @return boolean TRUE on success
	 */
	public function execute() {
		file_put_contents('/tmp/simpletask.txt', time() . PHP_EOL);
		return TRUE;
	}
}