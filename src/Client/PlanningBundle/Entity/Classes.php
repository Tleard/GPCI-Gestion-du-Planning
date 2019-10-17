<?php

namespace Client\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity(repositoryClass="Client\PlanningBundle\Repository\ClassRepository")
 */
class Classes
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Client\PlanningBundle\Entity\Groups")
     * @ORM\JoinColumn(nullable=true)
     */
    private $groups;

    /**
     * @ORM\ManyToOne(targetEntity="Client\PlanningBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $supervisor;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param string $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    /**
     * @return string
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * @param string $supervisor
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    }



}
