<?php

namespace App\Repository;

use App\Entity\Candidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Candidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidat[]    findAll()
 * @method Candidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidat::class);
    }

    // /**
    //  * @return Candidat[] Returns an array of Candidat objects
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
    public function findOneBySomeField($value): ?Candidat
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function countBy($value){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQueryBuilder()
                ->select('count(postule.identifiant) as nmbPostule, offre.intitule as libelleOffre')
                ->from('App\Entity\Candidat', 'candidat')
                ->innerJoin('App\Entity\Postule', 'postule', 'WITH', 'candidat.identifiant = postule.identifiantcandidat')
                ->innerJoin('App\Entity\Offre', 'offre', 'WITH', 'postule.identifiantoffre = offre.identifiant')
                ->andWhere('candidat.login = :val')
                ->groupBy('offre.intitule')
                ->setParameter('val', $value)
                ->getQuery();
        return $query->getResult();
    }
}
