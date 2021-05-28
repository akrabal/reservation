<?php

namespace App\Repository;

use App\Entity\Gare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gare|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gare|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gare[]    findAll()
 * @method Gare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GareRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gare::class);
    }

    // /**
    //  * @return Gare[] Returns an array of Gare objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gare
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
