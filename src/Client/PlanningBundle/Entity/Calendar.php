<?php

namespace Client\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="Client\PlanningBundle\Repository\CalendarRepository")
 */
class Calendar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Client\PlanningBundle\Entity\Weeks")
     * @ORM\JoinColumn(nullable=true)
     */
    private $week;

    /**
     * @ORM\ManyToOne(targetEntity="Client\PlanningBundle\Entity\Classes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $class;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Calendar
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set week.
     *
     * @param \DateTime $week
     *
     * @return Calendar
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week.
     *
     * @return \DateTime
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set class.
     *
     * @param string $class
     *
     * @return Calendar
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class.
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
