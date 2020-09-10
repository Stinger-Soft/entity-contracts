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
 * Instead of deleting an entity when remove is called on the entity manager, the deletedAt field is filled with the current date
 *
 */
interface SoftDeletableInterface {

	/**
	 * Marks entity as deleted.
	 */
	public function delete(): void;

	/**
	 * Restore entity by undeleting it
	 */
	public function restore(): void;

	/**
	 * Checks whether the entity has been deleted.
	 *
	 * @return bool
	 */
	public function isDeleted(): bool;

	/**
	 * Checks whether the entity will be deleted.
	 *
	 * @param DateTimeInterface|null $at
	 * @return bool
	 */
	public function willBeDeleted(?DateTimeInterface $at = null): bool;

	/**
	 * Returns date on which entity was been deleted.
	 *
	 * @return DateTimeInterface|null
	 */
	public function getDeletedAt(): ?DateTimeInterface;

	/**
	 * Set the delete date to given date.
	 *
	 * @param DateTimeInterface|null $date
	 *
	 */
	public function setDeletedAt(?DateTimeInterface $date);
}

