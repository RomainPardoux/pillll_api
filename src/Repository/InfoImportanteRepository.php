<?php

namespace App\Repository;

use App\Entity\InfoImportante;

class InfoImportanteRepository extends AbstractRepository
{
    public function search($term, $order = 'asc', $limit = 20, $offset = 0)
    {

        $qb = $this
            ->createQueryBuilder('i')
            ->select('i')
            ->where('i.specialiteIdCodeCis LIKE ?1')
            ->orderBy('i.specialiteIdCodeCis', $order)
            ->setParameter(1, $term);
        
        return $this->paginate($qb, $limit, $offset);

    }
}