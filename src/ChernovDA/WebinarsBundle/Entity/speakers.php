<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 04.09.2015
 * Time: 11:21
 */

namespace ChernovDA\WebinarsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class speakers
 * @package WebinarsBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="speakers")
 */
class speakers {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $pic;

    /**
     * @ORM\Column(type="string")
     */
    protected $fio;

    /**
     * @ORM\Column(type="string")
     */
    protected $position;

    /**
     * @ORM\Column(type="integer")
     */

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
     * Set pic
     *
     * @param string $pic
     * @return speakers
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set fio
     *
     * @param string $fio
     * @return speakers
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
     * Set position
     *
     * @param string $position
     * @return speakers
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
