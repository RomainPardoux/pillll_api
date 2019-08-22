<?php

namespace App\Controller;

use App\Entity\Smr;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\Smrs;

class SmrController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/api/smrs/{id}",
     *     name = "smr_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getSmrAction(Smr $smr)
    {
        return $smr;
    }

    /**
     * @Rest\Get("/api/smrs", name="smr_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The smr to search for."
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
    public function listSmrAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:Smr')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new Smrs($pager);
    }

}

