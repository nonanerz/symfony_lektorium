<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/users")
 */
class DefaulController extends AbstractController
{

    /**
     * @Route("/create")
     */
    public function create()
    {
        $user = new User();

        $user
            ->setAge(18)
            ->setEmail('asd@ads.asd')
            ->setName('asd');

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response();
    }

}