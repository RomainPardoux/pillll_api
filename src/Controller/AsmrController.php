<?php

namespace App\Controller;

use App\Entity\Asmr;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\Asmrs;

class AsmrController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/asmrs/{id}",
     *     name = "asmr_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getAsmrAction(Asmr $asmr)
    {
        return $asmr;
    }

    /**
     * @Rest\Get("/asmrs", name="asmr_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The asmr to search for."
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
    public function listAsmrAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:Asmr')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new Asmrs($pager);
    }

}
