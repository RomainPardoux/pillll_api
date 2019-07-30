<?php

namespace App\Repository;

use App\Entity\Composition;

class CompositionRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('c')
            ->select('c')
            ->where('c.specialiteIdCodeCis LIKE ?1')
            ->orderBy('c.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}