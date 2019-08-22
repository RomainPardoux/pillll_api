<?php

namespace App\Controller;

use App\Entity\InfoImportante;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\InfosImportantes;

class InfoImportanteController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/api/infosImportantes/{id}",
     *     name = "info_Importante_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getInfoImportanteAction(InfoImportante $infoImportante)
    {
        return $infoImportante;
    }


    /**
     * @Rest\Get("/api/infosImportantes", name="info_importante_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The info importante to search for."
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
    public function listInfoImportanteAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:InfoImportante')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new InfosImportantes($pager);
    }
}
