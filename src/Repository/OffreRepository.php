<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    // /**
    //  * @return Offre[] Returns an array of Offre objects
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
    public function findOneBySomeField($value): ?Offre
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value.'%')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Retourne les 2 dernieres offres
     *  Offre[]
     */
    public function LastInsert()
    {
        return $this->createQueryBuilder('o')
                ->orderBy('o.identifiant', 'DESC')
                ->setMaxResults(2)
                ->getQuery()
                ->getResult();
    }
    /**
     * Retourne les offres ayant la valeur demande dans leur nom 
     *  Offre[]
     * 
     */
    public function ResearchOffreByName(string $value, string $order)
    {
        return $this->createQueryBuilder('o')
                ->andWhere('o.intitule LIKE :val')
                ->setParameter('val', '%'.$value.'%')
                ->orderBy('o.intitule', $order)
                ->getQuery()
                ->getResult();
    }
}
