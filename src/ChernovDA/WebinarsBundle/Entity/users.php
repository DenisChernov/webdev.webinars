<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 07.09.2015
 * Time: 13:59
 * app/console doctrine:generate:entities ChernovDA/WebinarsBundle/Entity/users
 * app/console doctrine:schema:update --force
 */

namespace ChernovDA\WebinarsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class users
 * @package ChernovDA\WebinarsBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="regUsers")
 */
class users
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $avatar;

    /**
     * @ORM\Column(type="string")
     */
    protected $fio;

    /**
     * @ORM\Column(type="string")
     */
    protected $work;

    /**
     * @ORM\Column(type="string")
     */
    protected $position;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $onCommercial;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $onBudget;

    /**
     * @ORM\Column(type="string", options={"default" = " "})
     */
    protected $phone = " ";

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
     * Set avatar
     *
     * @param string $avatar
     * @return users
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return users
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return users
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
     * Set password
     *
     * @param string $password
     * @return users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fio
     *
     * @param string $fio
     * @return users
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string 
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set work
     *
     * @param string $work
     * @return users
     */
    public function setWork($work)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return string 
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set onCommercial
     *
     * @param boolean $onCommercial
     * @return users
     */
    public function setOnCommercial($onCommercial)
    {
        $this->onCommercial = $onCommercial;

        return $this;
    }

    /**
     * Get onCommercial
     *
     * @return boolean 
     */
    public function getOnCommercial()
    {
        return $this->onCommercial;
    }

    /**
     * Set onBudget
     *
     * @param boolean $onBudget
     * @return users
     */
    public function setOnBudget($onBudget)
    {
        $this->onBudget = $onBudget;

        return $this;
    }

    /**
     * Get onBudget
     *
     * @return boolean 
     */
    public function getOnBudget()
    {
        return $this->onBudget;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
