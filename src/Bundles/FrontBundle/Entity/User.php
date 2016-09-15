<?php

/**
 * Created by PhpStorm.
 * User: yesser
 * Date: 8/3/16
 * Time: 11:16 PM
 */

namespace Bundles\FrontBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @ORM\Column(type="datetime", nullable=false)
     * @Assert\Date()
     */
    protected $createdAt;

    /** @ORM\Column(type="boolean", name="terms") */
    private $terms;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        parent::__construct();
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    /**
     * @param string $email
     * @return $this|void
     */
    public function setEmail( $email ) {
        parent::setEmail( $email );
        $this->setUsername( $email );
        return $this;
    }

    /**
     * Set terms
     *
     * @param boolean $terms
     *
     * @return User
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * Get terms
     *
     * @return boolean
     */
    public function getTerms()
    {
        return $this->terms;
    }

}