<?php

namespace Client\PlanningBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Client\PlanningBundle\Entity\Groups")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $group;


    public function __construct()
    {
        parent::__construct();
    }


}