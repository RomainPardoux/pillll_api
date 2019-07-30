<?php

namespace App\Repository;

use App\Entity\TitulaireSpecialite;

class TitulaireSpecialiteRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('t')
            ->select('t')
            ->where('t.specialiteIdCodeCis LIKE ?1')
            ->orderBy('t.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}