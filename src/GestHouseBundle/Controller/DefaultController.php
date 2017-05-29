<?php

namespace GestHouseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('GestHouseBundle:Default:index.html.twig');
    }

    /**
     * @Route("/bedrooms" , name="bedrooms")
     */
    public function listBedroomAction()
    {
        return $this->render('GestHouseBundle:Default:bedroom_list.html.twig');
    }

    /**
     * @Route("/activities", name="activities")
     */
    public function listActivitiesAction()
    {
        return $this->render('GestHouseBundle:Default:activities.html.twig');
    }

    /**
     * @Route("/activities/town", name="town")
     */
    public function listTownAction()
    {
        return $this->render('GestHouseBundle:Default:town_activities.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('GestHouseBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/bedrooms/bedroom", name="bedroom")
     */
    public function bedroomAction()
    {
        return $this->render('GestHouseBundle:Default:bedroom.html.twig');
    }



}
