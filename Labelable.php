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
 * Allows the pretty print of the classname
 */
interface Labelable {

	/**
	 * Returns the translateable label
	 *
	 * @return string
	 */
	public static function getEntityLabel(): string;

	/**
	 * Returns the translation domain for the label
	 *
	 * @return string|null
	 */
	public static function getEntityLabelTranslationDomain(): ?string;
}