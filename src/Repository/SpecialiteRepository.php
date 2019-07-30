<?php

namespace App\Repository;

use App\Entity\Specialite;

class SpecialiteRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('s')
            ->select('s')
            ->where('s.denomination LIKE ?1')
            ->orderBy('s.denomination', $order)
            ->setParameter(1, '%'.$term.'%');
        
        return $this->paginate($qb, $limit, $offset);

    }
}
