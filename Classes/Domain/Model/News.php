<?php
namespace JWeiland\Jwnewsevent\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Stefan Froemken <projects@jweiland.net>, jweiland.net
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class News
{
    /**
     * isEvent
     *
     * @var bool
     */
    protected $isEvent = false;

    /**
     * eventStart
     *
     * @var \DateTime
     */
    protected $eventStart = null;

    /**
     * eventEnd
     *
     * @var \DateTime
     */
    protected $eventEnd = null;

    /**
     * location
     *
     * @var string
     */
    protected $location = '';

    /**
     * organizer
     *
     * @var string
     */
    protected $organizer = '';

    /**
     * Returns the isEvent
     *
     * @return bool $isEvent
     */
    public function getIsEvent()
    {
        return $this->isEvent;
    }

    /**
     * Sets the isEvent
     *
     * @param bool $isEvent
     * @return void
     */
    public function setIsEvent($isEvent)
    {
        $this->isEvent = (bool)$isEvent;
    }

    /**
     * Returns the eventStart
     *
     * @return \DateTime $eventStart
     */
    public function getEventStart()
    {
        return $this->eventStart;
    }

    /**
     * Sets the eventStart
     *
     * @param \DateTime $eventStart
     * @return void
     */
    public function setEventStart($eventStart)
    {
        $this->eventStart = $eventStart;
    }

    /**
     * Returns the eventEnd
     *
     * @return \DateTime $eventEnd
     */
    public function getEventEnd()
    {
        return $this->eventEnd;
    }

    /**
     * Sets the eventEnd
     *
     * @param \DateTime $eventEnd
     * @return void
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;
    }

    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = (string)$location;
    }

    /**
     * Returns the organizer
     *
     * @return string $organizer
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Sets the organizer
     *
     * @param string $organizer
     * @return void
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = (string)$organizer;
    }
}