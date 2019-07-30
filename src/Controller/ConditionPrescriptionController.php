<?php

namespace App\Controller;

use App\Entity\ConditionPrescription;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Request\ParamFetcherInterface;
use App\Representation\ConditionsPrescriptions;

class ConditionPrescriptionController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/conditionsPrescriptions/{id}",
     *     name = "conditionPrescription_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
    public function getConditionPrescriptionAction(ConditionPrescription $conditionPrescription)
    {
        return $conditionPrescription;
    }

        /**
     * @Rest\Get("/conditionsPrescriptions", name="condition_prescription_list")
     * @Rest\QueryParam(
     *     name="idCodeCis",
     *     description="The condition prescription to search for."
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
    public function listConditionPrescritionAction(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()->getRepository('App:ConditionPrescription')->search(
            $paramFetcher->get('idCodeCis'),
            $paramFetcher->get('order'),
            $paramFetcher->get('limit'),
            $paramFetcher->get('offset')
        );

        return new ConditionsPrescriptions($pager);
    }
    

}
