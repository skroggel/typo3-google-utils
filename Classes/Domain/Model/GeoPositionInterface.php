<?php
declare(strict_types=1);
namespace Madj2k\GadgetoGoogle\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class GeoPositionInterface
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Steffen Kroggel <developer@steffenkroggel.de>
 * @package Madj2k_GadetoGoogle
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
interface GeoPositionInterface
{

    /**
     * Returns the longitude
     *
     * @return float $longitude
     */
    public function getLongitude(): float;


    /**
     * Sets the longitude
     *
     * @param float $longitude
     * @return void
     */
    public function setLongitude(float $longitude): void;


    /**
     * Returns the latitude
     *
     * @return float $latitude
     */
    public function getLatitude(): float;


    /**
     * Sets the latitude
     *
     * @param float $latitude
     * @return void
     */
    public function setLatitude(float $latitude): void;


    /**
     * Returns the distance
     *
     * @return float $distance
     */
    public function getDistance(): float;


    /**
     * Sets the distance
     *
     * @param float $distance
     * @return void
     */
    public function setDistance(float $distance): void;


}
