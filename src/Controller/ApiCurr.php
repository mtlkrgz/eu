<?php

namespace App\Controller;

use App\Entity\EuKur;
use App\Service\CurrService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiCurr extends AbstractController
{
    /**
     * @Route("/api"),
     * @return Response
     * */
    public function index()
    {

        $JsonArray = array("Provider1", "Provider2","Provider3");
        $currService = new CurrService();
        $httpClient = HttpClient::create();
        foreach ($JsonArray as $item) {

            $className = 'App\Provider\\' . $item;



            $Provider = $currService->provider(new $className());


                $response = file_get_contents($Provider->getJsonUrl());;
                $response = json_decode($response, true);


            if (count($response) == 1) {
                $array_keys = array_keys($response);
                $response = $response[$array_keys[0]];
            }

            foreach ($response as $value){
                if($value[$Provider->getSymbol()] == $Provider->getDolar()){
                    $DolarArr[]=$value[$Provider->getAmount()];
                }elseif($value[$Provider->getSymbol()] == $Provider->getEuro()){
                    $EuroArr[]=$value[$Provider->getAmount()];
                }elseif($value[$Provider->getSymbol()] == $Provider->getSterlin()){
                    $SterlinArr[]=$value[$Provider->getAmount()];
                }
            }

            $entitymenager = $this->getDoctrine()->getManager();
            $KurRepository =  $entitymenager->getRepository(EuKur::class);
            $KurRow = $KurRepository->find(1);


            if($KurRow){
                $KurRow
                    ->setSterlin(min($SterlinArr))
                    ->setEuro(min($EuroArr))
                    ->setDolar(min($DolarArr));

                $entitymenager->persist($KurRow);
                $entitymenager->flush();
            }else{
                $KurCreate = new EuKur();
                $KurCreate
                    ->setSterlin(min($SterlinArr))
                    ->setEuro(min($EuroArr))
                    ->setDolar(min($DolarArr));
                $entitymenager->persist($KurCreate);
                $entitymenager->flush();
            }





        }

            return new JsonResponse("OK'dir");
    }

}
