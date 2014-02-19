<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerTickevent
 */

namespace DragonJsonServerTickevent\Service;

/**
 * Serviceklasse zur Verwaltung von Tickevents
 */
class Tickevent
{
	use \DragonJsonServer\ServiceManagerTrait;
	use \DragonJsonServer\EventManagerTrait;
	
    /**
	 * Triggert ein Tickevent an alle Listener
	 * @return Tickevent
	 */
	public function tickevent()
	{
		$this->getEventManager()->trigger(
			(new \DragonJsonServerTickevent\Event\Tickevent())
				->setTarget($this)
		);
		return $this;
	}
}
