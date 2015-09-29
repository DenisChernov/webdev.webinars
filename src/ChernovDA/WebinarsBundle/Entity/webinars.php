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
     * @ORM\Column(type="string")
     */
    protected $date_beg;

    /**
     * @ORM\Column(type="string")
     */
    protected $time_beg;

    /**
     * @ORM\Column(type="string", options={"default" = "00:00"})
     */
    protected $time_beg_commercial = "00:00";

    /**
     * @ORM\Column(type="text")
     */
    protected $schedule_commercial;

    /**
     * @ORM\Column(type="string", options={"default" = "00:00"})
     */
    protected $time_beg_budget = "00:00";

    /**
     * @ORM\Column(type="text")
     */
    protected $schedule_budget;

    /**
     * @ORM\Column(type="string", options={"default" = "Пока не указано"})
     */
    protected $whereis;

    /**
     * @ORM\Column(type="string");
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected $registerStatus;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $pic;

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

    /**
     * Set registerStatus
     *
     * @param integer $registerStatus
     * @return webinars
     */
    public function setRegisterStatus($registerStatus)
    {
        $this->registerStatus = $registerStatus;

        return $this;
    }

    /**
     * Get registerStatus
     *
     * @return integer 
     */
    public function getRegisterStatus()
    {
        return $this->registerStatus;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return webinars
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
     * Set time_beg_commercial
     *
     * @param string $timeBegCommercial
     * @return webinars
     */
    public function setTimeBegCommercial($timeBegCommercial)
    {
        $this->time_beg_commercial = $timeBegCommercial;

        return $this;
    }

    /**
     * Get time_beg_commercial
     *
     * @return string 
     */
    public function getTimeBegCommercial()
    {
        return $this->time_beg_commercial;
    }

    /**
     * Set time_beg_budget
     *
     * @param string $timeBegBudget
     * @return webinars
     */
    public function setTimeBegBudget($timeBegBudget)
    {
        $this->time_beg_budget = $timeBegBudget;

        return $this;
    }

    /**
     * Get time_beg_budget
     *
     * @return string 
     */
    public function getTimeBegBudget()
    {
        return $this->time_beg_budget;
    }

    /**
     * Set whereis
     *
     * @param string $whereis
     * @return webinars
     */
    public function setWhereis($whereis)
    {
        $this->whereis = $whereis;

        return $this;
    }

    /**
     * Get whereis
     *
     * @return string 
     */
    public function getWhereis()
    {
        return $this->whereis;
    }

    /**
     * Set schedule_commercial
     *
     * @param string $scheduleCommercial
     * @return webinars
     */
    public function setScheduleCommercial($scheduleCommercial)
    {
        $this->schedule_commercial = $scheduleCommercial;

        return $this;
    }

    /**
     * Get schedule_commercial
     *
     * @return string 
     */
    public function getScheduleCommercial()
    {
        return $this->schedule_commercial;
    }

    /**
     * Set schedule_budget
     *
     * @param string $scheduleBudget
     * @return webinars
     */
    public function setScheduleBudget($scheduleBudget)
    {
        $this->schedule_budget = $scheduleBudget;

        return $this;
    }

    /**
     * Get schedule_budget
     *
     * @return string 
     */
    public function getScheduleBudget()
    {
        return $this->schedule_budget;
    }
}
