<?php

namespace Client\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weeks
 *
 * @ORM\Table(name="weeks")
 * @ORM\Entity(repositoryClass="Client\PlanningBundle\Repository\WeeksRepository")
 */
class Weeks
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
     * @ORM\Column(name="year", type="datetime")
     */
    private $year;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="vacancy", type="boolean", nullable=true)
     */
    private $vacancy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set year.
     *
     * @param \DateTime $year
     *
     * @return Weeks
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year.
     *
     * @return \DateTime
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set vacancy.
     *
     * @param bool|null $vacancy
     *
     * @return Weeks
     */
    public function setVacancy($vacancy = null)
    {
        $this->vacancy = $vacancy;

        return $this;
    }

    /**
     * Get vacancy.
     *
     * @return bool|null
     */
    public function getVacancy()
    {
        return $this->vacancy;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Weeks
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
}
