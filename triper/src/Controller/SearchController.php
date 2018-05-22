<?php

namespace App\Controller;

use App\Entity\Country;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    /**
     * @Route("/search/api/v1", name="search")
     */
    // RAJOUTER methods={"GET"}
    public function index(Request $request)
    {
        $countryRepo = $this->getDoctrine()->getRepository(Country::class);
        //$tempAvg = $request->get('tempAvg');
        $tempAvg = 12;
        $coutries = $countryRepo->search();
        return $this->json([
            "status"=>"ok",
            "message"=>"envoi reussi",
            "data" => $coutries
        ]);
    }
}
