<?php

namespace App\Repository;

use App\Entity\Offreresearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Offreresearch|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offreresearch|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offreresearch[]    findAll()
 * @method Offreresearch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreresearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offreresearch::class);
    }

    // /**
    //  * @return Offreresearch[] Returns an array of Offreresearch objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Offreresearch
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

}
