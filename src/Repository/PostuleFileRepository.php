<?php

namespace App\Repository;

use App\Entity\PostuleFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PostuleFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostuleFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostuleFile[]    findAll()
 * @method PostuleFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostuleFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostuleFile::class);
    }

    // /**
    //  * @return PostuleFile[] Returns an array of PostuleFile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PostuleFile
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
