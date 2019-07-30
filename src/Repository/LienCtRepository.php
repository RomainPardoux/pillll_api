<?php

namespace App\Repository;

use App\Entity\LienCt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LienCt|null find($id, $lockMode = null, $lockVersion = null)
 * @method LienCt|null findOneBy(array $criteria, array $orderBy = null)
 * @method LienCt[]    findAll()
 * @method LienCt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LienCtRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LienCt::class);
    }

    // /**
    //  * @return LienCt[] Returns an array of LienCt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LienCt
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
