<?php

namespace AcmeRegisterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Register
 */
class Register
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $phNo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Register
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Register
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phNo
     *
     * @param integer $phNo
     * @return Register
     */
    public function setPhNo($phNo)
    {
        $this->phNo = $phNo;

        return $this;
    }

    /**
     * Get phNo
     *
     * @return integer 
     */
    public function getPhNo()
    {
        return $this->phNo;
    }
}
