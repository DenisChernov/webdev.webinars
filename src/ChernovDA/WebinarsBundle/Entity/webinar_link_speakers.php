<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 15.09.2015
 * Time: 16:19
 */

namespace ChernovDA\WebinarsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class webinar_link_speakers
 * @package WebinarsBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="webtospeakers")
 */
class webinar_link_speakers {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $idWebinar;

    /**
     * @ORM\Column(type="integer")
     */
    protected $idSpeaker;

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
     * Set idWebinar
     *
     * @param integer $idWebinar
     * @return webinar_link_speakers
     */
    public function setIdWebinar($idWebinar)
    {
        $this->idWebinar = $idWebinar;

        return $this;
    }

    /**
     * Get idWebinar
     *
     * @return integer 
     */
    public function getIdWebinar()
    {
        return $this->idWebinar;
    }

    /**
     * Set idSpeaker
     *
     * @param integer $idSpeaker
     * @return webinar_link_speakers
     */
    public function setIdSpeaker($idSpeaker)
    {
        $this->idSpeaker = $idSpeaker;

        return $this;
    }

    /**
     * Get idSpeaker
     *
     * @return integer 
     */
    public function getIdSpeaker()
    {
        return $this->idSpeaker;
    }
}
