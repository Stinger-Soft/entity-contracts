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
 * Use the entity for the createdBy, updatedBy, deletedBy fields
 */
interface BlameableUserEntityInterface extends BlameableInterface {
}