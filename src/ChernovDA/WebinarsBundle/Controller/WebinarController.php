<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 03.09.2015
 * Time: 15:51
 */

namespace ChernovDA\WebinarsBundle\Controller;

use ChernovDA\WebinarsBundle\Entity\users;
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
        $em = $this->getDoctrine()->getManager();

        $webinar = $em->getRepository('ChernovDAWebinarsBundle:webinars')
            ->findAll();

        $speakers = $em->getRepository('ChernovDAWebinarsBundle:speakers')
            ->findAll();

        $users = $em->getRepository('ChernovDAWebinarsBundle:users')
            ->findAll();

        if (!$webinar)
            throw $this->createNotFoundException(
                'No webinars exist'
            );

        return $this->render(
            'webinars/webinars.html.twig', array(
                "webinars" => $webinar,
                "speakers" => $speakers,
                "users" => $users
            )
        );
    }

    /**
     * @Route("/new/webinar/{title}/{date_beg}/{time_beg}/{description}")
     */
    public function newWebinarAction($title, $date_beg, $time_beg, $description) {

        $webinars = new webinars();
        $webinars->setTitle($title)
            ->setDescription($description)
            ->setDateBeg($date_beg)
            ->setTimeBeg($time_beg);
        $em = $this->getDoctrine()->getManager();
        $em->persist($webinars);
        $em->flush();

        return $this->render(
          'webinars/create_webinar.html.twig',
            array("title" => $webinars,
                  "description" => $description,
                  "date_beg" => $date_beg,
                  "time_beg" => $time_beg)
        );
    }

    /**
     * @Route("/new/reguser/{email}/{password}/{avatar}/{fio}/{organisation}/{position}")
     */
    public function newReguserAction($email, $password, $avatar, $fio, $organisation, $position) {
        $regusers = new users();
        $regusers->setAvatar($avatar)
                 ->setEmail($email)
                 ->setPassword($password)
                 ->setPosition($position)
                 ->setFio($fio)
                 ->setWork($organisation);
        $em = $this->getDoctrine()->getManager();
        $em->persist($regusers);
        $em->flush();

        return $this->render(
            'webinars/user_profile.html.twig',
            array('user' => $regusers)
        );
    }

    /**
     * @Route("/.admin")
     */
    public function adminAction() {
        $em = $this->getDoctrine()->getManager();

        $webinar = $em->getRepository('ChernovDAWebinarsBundle:webinars')
            ->findAll();

        $speakers = $em->getRepository('ChernovDAWebinarsBundle:speakers')
            ->findAll();

        $users = $em->getRepository('ChernovDAWebinarsBundle:users')
            ->findAll();

        if (!$webinar)
            throw $this->createNotFoundException(
                'No webinars exist'
            );

        return $this->render(
            'webinars/page_admin.html.twig', array(
                "webinars" => $webinar,
                "speakers" => $speakers,
                "users" => $users
            )
        );
    }

    /**
     * @Route("/.editor")
     */
    public function editorAction() {
        $em = $this->getDoctrine()->getManager();

        $webinar = $em->getRepository('ChernovDAWebinarsBundle:webinars')
            ->findAll();

        $speakers = $em->getRepository('ChernovDAWebinarsBundle:speakers')
            ->findAll();

        $users = $em->getRepository('ChernovDAWebinarsBundle:users')
            ->findAll();

        if (!$webinar)
            throw $this->createNotFoundException(
                'No webinars exist'
            );

        return $this->render(
            'webinars/page_editor.html.twig', array(
                "webinars" => $webinar,
                "speakers" => $speakers,
                "users" => $users
            )
        );
    }

}