<?php
namespace PHPSTORM_META {

	override( \Zend\ServiceManager\ServiceLocatorInterface::get(0),      // method signature //argument number is ALWAYS 0 now.
		map( [ //map of argument value -> return type
		       'foo' => \Application\Service\FooService::class,
		]));
}