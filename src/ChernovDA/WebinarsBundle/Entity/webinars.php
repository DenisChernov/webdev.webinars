<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 03.09.2015
 * Time: 15:52
 */

namespace ChernovDA\WebinarsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class webinars
 * @package ChernovDA\WebinarsBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="webinars")
 */
class webinars {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_beg;

    /**
     * @ORM\Column(type="date")
     */
    protected $time_beg;

    /**
     * @ORM\Column(type="string");
     */
    protected $description;

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
     * Set title
     *
     * @param string $title
     * @return webinars
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date_beg
     *
     * @param \DateTime $dateBeg
     * @return webinars
     */
    public function setDateBeg($dateBeg)
    {
        $this->date_beg = $dateBeg;

        return $this;
    }

    /**
     * Get date_beg
     *
     * @return \DateTime 
     */
    public function getDateBeg()
    {
        return $this->date_beg;
    }

    /**
     * Set time_beg
     *
     * @param \DateTime $timeBeg
     * @return webinars
     */
    public function setTimeBeg($timeBeg)
    {
        $this->time_beg = $timeBeg;

        return $this;
    }

    /**
     * Get time_beg
     *
     * @return \DateTime 
     */
    public function getTimeBeg()
    {
        return $this->time_beg;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return webinars
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
