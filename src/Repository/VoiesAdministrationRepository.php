<?php

namespace App\Repository;

use App\Entity\VoiesAdministration;

class VoiesAdministrationRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('v')
            ->select('v')
            ->where('v.specialiteIdCodeCis LIKE ?1')
            ->orderBy('v.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}