<?php
/*
 * This file is part of the SimpleRouting package.
 *
 * (c) Stein Janssen <birdmage@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Szenis\Interfaces;

/**
 * Router interface
 */
interface RouterInterface
{
	/**
	 * Add a route to the router
	 *
	 * @param string $url
	 *
	 * @param array  $arguments
	 */
	public function add($url, $arguments);

	/**
	 * Get all routes
	 *
	 * @return array
	 */
	public function getAll();

	/**
	 * Get routes by method
	 *
	 * @param  string $method
	 *
	 * @return array
	 */
	public function getByMethod($method);
}