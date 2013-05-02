<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerTickevent
 */

require 'bootstrap.php';
$serviceManager->get('Server')->run([
	'method' => 'Tickevent.tickevent',
	'params' => ['securitytoken' => isset($_GET['securitytoken']) ? $_GET['securitytoken'] : ''],
]);
