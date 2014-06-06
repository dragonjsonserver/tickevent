<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerTickevent
 */

/**
 * @return array
 */
return [
	'dragonjsonserver' => [
	    'apiclasses' => [
	        '\DragonJsonServerTickevent\Api\TickeventAdmin' => 'TickeventAdmin',
	    ],
    ],
	'service_manager' => [
		'invokables' => [
            '\DragonJsonServerTickevent\Service\TickeventAdmin' => '\DragonJsonServerTickevent\Service\TickeventAdmin',
		],
	],
];
