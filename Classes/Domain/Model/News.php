<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/jwnewsevent.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Jwnewsevent\Domain\Model;

/**
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class News
{
    /**
     * @var bool
     */
    protected $isEvent = false;

    /**
     * @var \DateTime
     */
    protected $eventStart;

    /**
     * @var \DateTime
     */
    protected $eventEnd;

    /**
     * @var string
     */
    protected $location = '';

    /**
     * @var string
     */
    protected $organizer = '';

    /**
     * @return bool $isEvent
     */
    public function getIsEvent(): bool
    {
        return $this->isEvent;
    }

    /**
     * @param bool $isEvent
     */
    public function setIsEvent(bool $isEvent): void
    {
        $this->isEvent = (bool)$isEvent;
    }

    /**
     * @return \DateTime|null $eventStart
     */
    public function getEventStart(): ?\DateTime
    {
        return $this->eventStart;
    }

    /**
     * @param \DateTime $eventStart
     */
    public function setEventStart(\DateTime $eventStart): void
    {
        $this->eventStart = $eventStart;
    }

    /**
     * @return \DateTime|null $eventEnd
     */
    public function getEventEnd(): ?\DateTime
    {
        return $this->eventEnd;
    }

    /**
     * @param \DateTime $eventEnd
     */
    public function setEventEnd(\DateTime $eventEnd): void
    {
        $this->eventEnd = $eventEnd;
    }

    /**
     * @return string $location
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return string $organizer
     */
    public function getOrganizer(): string
    {
        return $this->organizer;
    }

    /**
     * @param string $organizer
     */
    public function setOrganizer(string $organizer): void
    {
        $this->organizer = $organizer;
    }
}
