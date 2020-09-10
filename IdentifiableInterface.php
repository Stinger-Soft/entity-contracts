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
 * Interface for simple entities with a integer PK
 */
interface IdentifiableInterface {

	/**
	 * Get the primary key of the entity
	 */
	public function getId();
}