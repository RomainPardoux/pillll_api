<?php

namespace App\Controller;

use App\Entity\Presentation;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\Presentations;

class PresentationController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/presentations/{id}",
     *     name = "presentation_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getPresentationAction(Presentation $presentation)
    {
        return $presentation;
    }

    /**
     * @Rest\Get(
     *     path = "/presentations/codecip7/{codeCip7}",
     *     name = "codecip7_presentation_show",
     *     requirements = {"codeCip7"="\d+"}
     * )
     * @Rest\View
     */
    public function getPresentationWithCodeCip7Action(Presentation $presentation)
    {
        return $presentation;
    }

    /**
     * @Rest\Get(
     *     path = "/presentations/codecip13/{codeCip13}",
     *     name = "codecip13_presentation_show",
     *     requirements = {"codeCip13"="\d+"}
     * )
     * @Rest\View
     */
    public function getPresentationWithCodeCip13Action(Presentation $presentation)
    {
        return $presentation;
    }

    /**
     * @Rest\Get("/presentations", name="presentation_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The presentation to search for."
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
    public function listPresentationAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:Presentation')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new Presentations($pager);
    }

}
