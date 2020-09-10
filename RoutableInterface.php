<?php
declare(strict_types=1);

/*
 * This file is part of the Stinger Soft Entity Contracts.
 *
 * (c) Oliver Kotte <oliver.kotte@stinger-soft.net>
 * (c) Florian Meyer <florian.meyer@stinger-soft.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StingerSoft\Contracts\Entity;

/**
 * Interface for routable entities.
 * That means that the entity knows where (the route) it's representation is located
 */
interface RoutableInterface {

	/**
	 * Returns the name of the route
	 *
	 * @return string|null the name of the route
	 */
	public function getRoute(): ?string;

	/**
	 * Return the parameters for the route
	 *
	 * @return array the parameters of the route
	 *
	 */
	public function getRouteParams(): array;
}