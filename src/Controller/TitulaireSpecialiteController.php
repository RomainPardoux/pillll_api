<?php

namespace App\Controller;

use App\Entity\TitulaireSpecialite;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\TitulairesSpecialites;

class TitulaireSpecialiteController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/titulairesSpecialites/{id}",
     *     name = "titulaireSpecialite_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getTitulaireSpecialiteAction(TitulaireSpecialite $titulaireSpecialite)
    {
        return $titulaireSpecialite;
    }

    /**
     * @Rest\Get("/titulairesSpecialites", name="titulaire_specialite_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The titulaire specialite to search for."
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
    public function listTitulaireSpecialiteAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:TitulaireSpecialite')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new TitulairesSpecialites($pager);
    }

}
