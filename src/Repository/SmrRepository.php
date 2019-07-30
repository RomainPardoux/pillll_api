<?php

namespace App\Repository;

use App\Entity\Smr;

class SmrRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('s')
            ->select('s')
            ->where('s.specialiteIdCodeCis LIKE ?1')
            ->orderBy('s.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}