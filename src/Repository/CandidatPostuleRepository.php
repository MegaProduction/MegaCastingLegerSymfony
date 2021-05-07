<?php

namespace App\Repository;

use App\Entity\CandidatPostule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CandidatPostule|null find($id, $lockMode = null, $lockVersion = null)
 * @method CandidatPostule|null findOneBy(array $criteria, array $orderBy = null)
 * @method CandidatPostule[]    findAll()
 * @method CandidatPostule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatPostuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CandidatPostule::class);
    }

    // /**
    //  * @return CandidatPostule[] Returns an array of CandidatPostule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CandidatPostule
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
