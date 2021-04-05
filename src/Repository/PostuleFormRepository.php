<?php

namespace App\Repository;

use App\Entity\PostuleForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PostuleForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostuleForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostuleForm[]    findAll()
 * @method PostuleForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostuleFormRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostuleForm::class);
    }

    // /**
    //  * @return PostuleForm[] Returns an array of PostuleForm objects
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
    public function findOneBySomeField($value): ?PostuleForm
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
