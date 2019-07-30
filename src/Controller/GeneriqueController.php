<?php

namespace App\Controller;

use App\Entity\Generique;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\Generiques;

class GeneriqueController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/generiques/{id}",
     *     name = "generique_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getGeneriqueAction(Generique $generique)
    {
        return $generique;
    }

        /**
     * @Rest\Get("/generiques", name="generique_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The generique to search for."
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
    public function listGeneriqueAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:Generique')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new Generiques($pager);
    }
    

}