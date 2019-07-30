<?php

namespace App\Repository;

use App\Entity\Asmr;

class AsmrRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('a')
            ->select('a')
            ->where('a.specialiteIdCodeCis LIKE ?1')
            ->orderBy('a.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}