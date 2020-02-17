<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EuKur;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        $KurRepository =  $this->getDoctrine()->getRepository(EuKur::class);
        $KurRow = $KurRepository->find(1);

        return $this->render('index.html.twig', [
            'return' => $KurRow,
        ]);
    }
}
