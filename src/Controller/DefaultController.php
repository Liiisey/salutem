<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Entity\Doctor;
use App\Entity\OpeningHour;
use App\Entity\SocialNetwork;
use App\Form\AppointmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        //Rechercher les données en base de données
        $doctors = $this->getDoctrine()->getRepository(Doctor::class)->findAll();
        $openingHours = $this->getDoctrine()->getRepository(OpeningHour::class)->findAll();

        //Formulaire des RDV
        $appointmentForm = $this->createForm(AppointmentType::class, new Appointment(), [
            'action' => $this->generateUrl('appointment_new')
        ]);

        //Envoyer les données à la vue
        return $this->render('default/index.html.twig', [
            'doctors' => $doctors,
            'openingHours' => $openingHours,
            'appointmentForm' => $appointmentForm->createView()
        ]);
    }

    //Afficher les réseaux sociaux dans le header
    public function headerSocialNetworks() {
        $socialNetworks = $this->getDoctrine()->getRepository(SocialNetwork::class)->findAll();
        return $this->render('default/_socialnetworks.html.twig', [
            'socialNetworks' => $socialNetworks
        ]);
    }
}
