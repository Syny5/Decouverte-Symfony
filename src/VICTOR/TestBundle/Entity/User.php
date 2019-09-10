<?php

namespace VICTOR\TestBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * User
 */
class User
{
    /**
     * @var int
     * 
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *  
     * @ORM\Column(name="lastName", type="string", length=255)
     * @Assert\Length(max=255)
     * @Assert\Type("string")
     */
    private $lastName;

    /**
     * @var string
     * 
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\Length(max=255)
     * @Assert\Type("string")
     */
    private $firstName;

    /**
     * @var DateTime
     * 
     * @ORM\Column(name="createDate", type="datetime")
     */
    private $createDate;

    /**
     * @var string
     * 
     * @ORM\Column(name="mail", type="string", length=255)
     * @Assert\Length(max=255)
     * @Assert\Type("string")
     */
    private $mail;

    /**
     * @var string
     * 
     * @ORM\Column(name="motivation", type="string", length=255)
     * @Assert\Length(max=255)
     * @Assert\Type("string")
     */
    private $motivation;

    /**
     * @var int
     * 
     * @ORM\Column(name="palme",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $palme;

    public function __construct(){
        $this->createDate = new \Datetime();
    }
    
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
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set createDate.
     *
     * @param DateTime $createDate
     *
     * @return User
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate.
     *
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set mail.
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set motivation.
     *
     * @param string $motivation
     *
     * @return User
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get motivation.
     *
     * @return string
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set palme.
     *
     * @param int $palme
     *
     * @return User
     */
    public function setPalme($palme)
    {
        $this->palme = $palme;

        return $this;
    }

    /**
     * Get palme.
     *
     * @return int
     */
    public function getPalme()
    {
        return $this->palme;
    }
}
