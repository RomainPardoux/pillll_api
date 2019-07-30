<?php

namespace App\Repository;

use App\Entity\Presentation;

class PresentationRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('p')
            ->select('p')
            ->where('p.specialiteIdCodeCis LIKE ?1')
            ->orderBy('p.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}