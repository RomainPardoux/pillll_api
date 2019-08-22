<?php

namespace App\Controller;

use App\Entity\VoiesAdministration;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\voiesAdministrations;

class VoiesAdministrationController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/api/voiesAdministrations/{id}",
     *     name = "voiesAdministration_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getVoiesAdministrationAction(VoiesAdministration $voiesAdministration)
    {
        return $voiesAdministration;
    }

    /**
     * @Rest\Get("/api/voiesAdministrations", name="voies_administration_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The voies administration to search for."
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
    public function listVoiesAdministrationAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:VoiesAdministration')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new VoiesAdministrations($pager);
    }

}

