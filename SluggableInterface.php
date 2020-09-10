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
 * Interface to define sluggable entities
 */
interface SluggableInterface {

	/**
	 * Returns an array of the fields used to generate the slug.
	 *
	 * @return string[]
	 */
	public function getSluggableFields(): array;

	/**
	 * Generates and set a new Slug value
	 */
	public function generateSlug(): void;


	/**
	 * @return string The slug value
	 */
	public function getSlug(): string;
}