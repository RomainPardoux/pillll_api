<?php

namespace App\Controller;

use App\Entity\Composition;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\Compositions;

class CompositionController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/compositions/{id}",
     *     name = "composition_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getCompositionAction(Composition $composition)
    {
        return $composition;
    }

    /**
     * @Rest\Get("/compositions", name="composition_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The composition to search for."
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
    public function listCompositionAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:Composition')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new Compositions($pager);
    }
    

}
