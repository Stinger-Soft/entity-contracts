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

use DateTimeInterface;

/**
 * Interface to define timestampable entities
 */
interface TimestampableInterface {

	/**
	 * Returns createdAt value.
	 *
	 * @return DateTimeInterface|null
	 */
	public function getCreatedAt(): ?DateTimeInterface;

	/**
	 * Returns updatedAt value.
	 *
	 * @return DateTimeInterface|null
	 */
	public function getUpdatedAt(): ?DateTimeInterface;

	/**
	 *
	 * @param DateTimeInterface|null $createdAt
	 */
	public function setCreatedAt(?DateTimeInterface $createdAt);

	/**
	 *
	 * @param DateTimeInterface|null $updatedAt
	 */
	public function setUpdatedAt(?DateTimeInterface $updatedAt);
}