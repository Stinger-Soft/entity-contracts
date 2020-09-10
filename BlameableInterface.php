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

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Interface for blameable entities
 */
interface BlameableInterface {

	/**
	 *
	 * @param string|UserInterface the user representation
	 */
	public function setCreatedBy($user): void;

	/**
	 *
	 * @param string|UserInterface the user representation
	 */
	public function setUpdatedBy($user): void;

	/**
	 *
	 * @param string|UserInterface the user representation
	 */
	public function setDeletedBy($user): void;

	/**
	 *
	 * @return string|UserInterface the user who created entity
	 */
	public function getCreatedBy();

	/**
	 *
	 * @return string|UserInterface the user who last updated entity
	 */
	public function getUpdatedBy();

	/**
	 *
	 * @return string|UserInterface the user who deleted this entity
	 */
	public function getDeletedBy();

	/**
	 * @return bool
	 */
	public function isBlameable(): bool;
}