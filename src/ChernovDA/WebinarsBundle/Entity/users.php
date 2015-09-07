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
     * ORM\Column(type="string")
     */
    protected $fio;

    /**
     * ORM\Column(type="string")
     */
    protected $work;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;

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
}
