<?php


namespace App\Controller;


use App\Entity\Device;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/devices")
 */
class DeviceController extends AbstractController
{

    /**
     * @Route("/user/{id}/add")
     */
    public function createDevice(User $user)
    {
        $device = new Device();

        $device->setBrand('Xiaomi');
        $device->setPlatform('ios');
        $user->addDevice($device);
        $this->getDoctrine()->getManager()->persist($device);
        $this->getDoctrine()->getManager()->flush();

        return new Response();
    }

}