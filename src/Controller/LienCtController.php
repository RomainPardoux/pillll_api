<?php

namespace App\Controller;

use App\Entity\LienCt;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LienCtController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/lienCts/{codeDossierHas}",
     *     name = "lienCt_show",
     * )
     * @Rest\View
     */
    public function getLienCtAction(LienCt $lienCt)
    {
        return $lienCt;
    }
}