<?php

namespace App\Repository;

use App\Entity\GareDepart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GareDepart|null find($id, $lockMode = null, $lockVersion = null)
 * @method GareDepart|null findOneBy(array $criteria, array $orderBy = null)
 * @method GareDepart[]    findAll()
 * @method GareDepart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GareDepartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GareDepart::class);
    }

    // /**
    //  * @return GareDepart[] Returns an array of GareDepart objects
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
    public function findOneBySomeField($value): ?GareDepart
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
