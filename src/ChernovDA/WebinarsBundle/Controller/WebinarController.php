<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 03.09.2015
 * Time: 15:51
 */

namespace ChernovDA\WebinarsBundle\Controller;

use ChernovDA\WebinarsBundle\Entity\webinars;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class WebinarController extends Controller {

    /**
     * @Route("/")
     */

    public function webinarAction() {
        $about = "";

        return $this->render(
            'webinars/webinars.html.twig', array("about" => $about)
        );
    }
}