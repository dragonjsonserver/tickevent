<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerTickevent
 */

namespace DragonJsonServerTickevent\Event;

/**
 * Eventklasse für ein Tickevent
 */
class Tickevent extends \Zend\EventManager\Event
{
	/**
	 * @var string
	 */
	protected $name = 'Tickevent';
}
