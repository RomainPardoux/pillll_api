<?php

namespace App\Repository;

use App\Entity\Generique;

class GeneriqueRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('g')
            ->select('g')
            ->where('g.specialiteIdCodeCis LIKE ?1')
            ->orderBy('g.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}