<?php

namespace App\Controller;

use App\Entity\Specialite;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\Specialites;

class SpecialiteController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/specialites/{idCodeCis}",
     *     name = "specialite_show",
     *     requirements = {"idCodeCis"="\d+"}
     * )
     * @Rest\View
     */
    public function getSpecialiteAction(Specialite $specialite)
    {
        return $specialite;
    }

    /**
     * @Rest\Get("/specialites", name="specialite_list")
     * @Rest\QueryParam(
     *     name="denomination",
     *     description="The denomination to search for."
     * )
     * @Rest\QueryParam(
     *     name="order",
     *     requirements="asc|desc",
     *     default="asc",
     *     description="Sort order (asc or desc)"
     * )
     * @Rest\QueryParam(
     *     name="limit",
     *     requirements="\d+",
     *     default="15",
     *     description="Max number of movies per page."
     * )
     * @Rest\QueryParam(
     *     name="offset",
     *     requirements="\d+",
     *     default="1",
     *     description="The pagination offset"
     * )
     * @Rest\View()
     */
    public function listSpecialiteAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:Specialite')->search(
            $paramFetcher->get('denomination'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new Specialites($pager);
    }
    
}
