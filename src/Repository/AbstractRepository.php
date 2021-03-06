<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

abstract class AbstractRepository extends EntityRepository
{
    protected function paginate(QueryBuilder $qb, $limit = 20, $offset = 0)
    {
        if (!($limit >= 0 && $offset >= 0)) {
            throw new \LogicException('$limit & $offstet must be greater than 0.');
        }
        
        $pager = new Pagerfanta(new DoctrineORMAdapter($qb));
        $pager->setMaxPerPage((int) $limit);     
        $currentPage = ceil($offset / $limit);
        $pager->setCurrentPage($currentPage);
        
        return $pager;
    }
}