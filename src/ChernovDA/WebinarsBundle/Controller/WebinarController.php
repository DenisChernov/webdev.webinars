<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 03.09.2015
 * Time: 15:51
 */

namespace ChernovDA\WebinarsBundle\Controller;

use ChernovDA\WebinarsBundle\Entity\speakers;
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
     * @Route("/new/webinar/{title}/{date_beg}/{time_beg}/{reg_status}/{description}")
     */
    public function newWebinarAction($title, $date_beg, $time_beg, $reg_status, $description) {

        $webinars = new webinars();
        $webinars->setTitle($title)
            ->setDescription($description)
            ->setDateBeg($date_beg)
            ->setRegisterStatus($reg_status)
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
     * @Route("/new/speaker/{fio}/{organisation}/{position}/{avatar}")
     */
    public function newSpeakerAction($fio, $organisation, $position, $avatar) {

        $speakers = new speakers();
        $speakers->setFio($fio)
                ->setPosition($position)
                ->setPic($avatar);

        $em = $this->getDoctrine()->getManager();
        $em->persist($speakers);
        $em->flush();

        return $this->render(
            'webinars/success.html.twig'
        );
    }

    /**
     * @Route("/update/webinar/{id}/{title}/{date_beg}/{time_beg}/{reg_status}/{description}/{pic}")
     */
    public function updateWebinarAction($id, $title, $date_beg, $time_beg, $reg_status, $description, $pic) {

        $em = $this->getDoctrine()->getManager();
        $webinar = $em->getRepository('ChernovDAWebinarsBundle:webinars')->find($id);
        if ($webinar) {
            $webinar->setTitle($title)
                    ->setDateBeg($date_beg)
                    ->setTimeBeg($time_beg)
                    ->setRegisterStatus($reg_status)
                    ->setPic($pic)
                    ->setDescription($description);

            $em->flush();
        }
        else {
            throw $this->createNotFoundException(
                'No webinars exist'
            );
        }

        return $this->render(
            'webinars/create_webinar.html.twig',
            array("title" => $webinar,
                "description" => $description,
                "date_beg" => $date_beg,
                "time_beg" => $time_beg)
        );
    }

    /**
     * @Route("/update/speakers/{id}/{avatar}/{fio}/{organisation}/{position}")
     */
    public function updateSpeakersAction($id, $avatar, $fio, $organisation, $position) {
        $webinar = $this->getDoctrine()->getRepository('ChernovDAWebinarsBundle:webinars')->findAll();
        $users = $this->getDoctrine()->getRepository('ChernovDAWebinarsBundle:users')->findAll();

        $em = $this->getDoctrine()->getManager();
        $speakers = $em->getRepository('ChernovDAWebinarsBundle:speakers')->find($id);
        if ($speakers) {
            $speakers->setPic($avatar)
                ->setFio($fio)
                ->setPosition($position);

            $em->flush();
        }
        else {
            throw $this->createNotFoundException(
                'No speakers exist'
            );
        }

        return $this->render(
            'webinars/page_admin.html.twig', array(
                "webinars" => $webinar,
                "speakers" => $speakers,
                "users" => $users
            )
        );
    }

    /**
     * @Route("/update/users/{id}/{avatar}/{fio}/{organisation}/{position}/{email}/{password}/{onCommercial}/{onBudget}")
     */
    public function updateUsersAction($id, $avatar, $fio, $organisation, $position, $email, $password, $onCommercial, $onBudget) {
        $webinar = $this->getDoctrine()->getRepository('ChernovDAWebinarsBundle:webinars')->findAll();
        $speakers = $this->getDoctrine()->getRepository('ChernovDAWebinarsBundle:speakers')->findAll();

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('ChernovDAWebinarsBundle:users')->find($id);
        if ($users) {
            $users->setAvatar($avatar)
                ->setFio($fio)
                ->setPosition($position)
                ->setEmail($email)
                ->setWork($organisation)
                ->setPassword($password)
                ->setOnCommercial($onCommercial)
                ->setOnBudget($onBudget);

            $em->flush();
        }
        else {
            throw $this->createNotFoundException(
                'No users exist'
            );
        }

        return $this->render(
            'webinars/page_admin.html.twig', array(
                "webinars" => $webinar,
                "speakers" => $speakers,
                "users" => $users
            )
        );
    }

    /**
     * @Route("/new/reguser/{email}/{password}/{avatar}/{fio}/{organisation}/{position}/{isCommercial}/{isBudget}/{telnumber}")
     */
    public function newReguserAction($email, $password, $avatar, $fio, $organisation, $position, $isCommercial, $isBudget, $telnumber) {
        $regusers = new users();
        $regusers->setAvatar($avatar)
                 ->setEmail($email)
                 ->setPassword($password)
                 ->setPosition($position)
                 ->setFio($fio)
                 ->setWork($organisation)
                 ->setOnCommercial($isCommercial)
                 ->setOnBudget($isBudget)
                 ->setPhone($telnumber);
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
     * @Route("/delete/webinar/{id}")
     */
    public function deleteWebinarAction($id) {
        $em = $this->getDoctrine()->getManager();

        $webinar = $em->getRepository('ChernovDAWebinarsBundle:webinars')->find($id);
        if ($webinar) {
            $em->remove($webinar);
            $em->flush();
        }

        return $this->render('webinars/success.html.twig');
    }

    /**
     * @Route("/delete/speaker/{id}")
     */
    public function deleteSpeakerAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $speaker = $em->getRepository('ChernovDAWebinarsBundle:speakers')->find($id);
        if ($speaker) {
            $em->remove($speaker);
            $em->flush();
        }

        return $this->render('webinars/success.html.twig');
    }

    /**
     * @Route("/delete/user/{id}")
     */
    public function deleteUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('ChernovDAWebinarsBundle:users')->find($id);
        if ($user) {
            $em->remove($user);
            $em->flush();
        }

        return $this->render('webinars/success.html.twig');
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


    /**
     * @Route ("/email/{fio}/{organisation}/{position}/{isCommercial}/{isBudget}/{phone}/{email}")
     */
    public function emailAction($fio, $organisation, $position, $isCommercial, $isBudget, $phone, $email) {

        $message = \Swift_Message::newInstance()
            ->setSubject('Регистрация на Семинар по 1С')
            ->setFrom('autosender@it-pole.com')
            ->setTo('seminar@it-murman.ru')
            ->setBody($this->renderView('webinars/reguser_emails.html.twig', array(
                "user" => $fio,
                "org" => $organisation,
                "position" => $position,
                "commercial_flag" => $isCommercial,
                "budget_flag" => $isBudget,
                "phone_number" => $phone,
                "email" => $email
            )),
                'text/html');

        $this->get('mailer')->send($message);

        return $this->render(
            'webinars/user_profile.html.twig', array(
            )
        );
    }
}