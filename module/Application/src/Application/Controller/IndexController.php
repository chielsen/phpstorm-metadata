<?php

namespace Application\Controller;

use Zend\ServiceManager\Exception;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Created by PhpStorm.
 * User: mthal
 * Date: 18-4-2017
 * Time: 17:27
 */

class IndexController extends \Zend\Mvc\Controller\AbstractController {
	public function onDispatch(\Zend\Mvc\MvcEvent $e)
	{
		$this->getServiceLocator()->get('foo')->bar(); // no support

		$tester = new Tester();
		$tester->get('foo')->bar();
	}

}

class Tester implements ServiceLocatorInterface
{

	/**
	 * Retrieve a registered instance
	 *
	 * @param  string $name
	 *
	 * @throws Exception\ServiceNotFoundException
	 * @return object|array
	 */
	public function get($name)
	{
		// TODO: Implement get() method.
	}

	/**
	 * Check for a registered instance
	 *
	 * @param  string|array $name
	 *
	 * @return bool
	 */
	public function has($name)
	{
		// TODO: Implement has() method.
}}