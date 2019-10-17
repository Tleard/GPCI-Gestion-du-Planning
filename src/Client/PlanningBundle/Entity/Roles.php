<?php

namespace Client\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="Client\PlanningBundle\Repository\RolesRepository")
 */
class Roles
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
     * @var bool
     *
     * @ORM\Column(name="delete_right", type="boolean")
     * @ORM\JoinColumn(nullable=true)
     *
     */
    private $deleteRight;

    /**
     * @var bool
     *
     * @ORM\Column(name="modify_right", type="boolean")
     * @ORM\JoinColumn(nullable=true)
     */
    private $modifyRight;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Roles
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set deleteRight.
     *
     * @param bool $deleteRight
     *
     * @return Roles
     */
    public function setDeleteRight($deleteRight)
    {
        $this->deleteRight = $deleteRight;

        return $this;
    }

    /**
     * Get deleteRight.
     *
     * @return bool
     */
    public function getDeleteRight()
    {
        return $this->deleteRight;
    }

    /**
     * Set modifyRight.
     *
     * @param bool $modifyRight
     *
     * @return Roles
     */
    public function setModifyRight($modifyRight)
    {
        $this->modifyRight = $modifyRight;

        return $this;
    }

    /**
     * Get modifyRight.
     *
     * @return bool
     */
    public function getModifyRight()
    {
        return $this->modifyRight;
    }
}
