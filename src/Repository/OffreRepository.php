<?php

namespace App\Repository;

use App\Entity\Offre;
use App\Entity\Offreresearch;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    public function ResearchOffreByName(Offreresearch $search)
    {
        $query = $this->createQueryBuilder('o')
        ->orderBy('o.intitule', $search->getOrdre());
        if ($search->getintitule()) {
            $query = $query->andWhere('o.intitule LIKE :val')
            ->setParameter('val', '%'.$search->getintitule().'%');
        }
        if ($search->getDatedebut()) {
            $query = $query->andWhere('o.datedebut >= :date')
            ->setParameter('date', $search->getDatedebut());
        }
        if ($search->getDatefin()) {
            $diff = $search->getDatedebut()->diff($search->getDatefin());
            $more_days = $diff->d;
            $query = $query->andWhere('o.dureediffusion <= :dure')
            ->setParameter('dure', $more_days);
        }
        if ($search->getIdentifiantmetier()) {
            $query = $query->andWhere('o.identifiantmetier = :metier')
                            ->setParameter('metier', $search->getIdentifiantmetier()->getIdentifiant());
        }
        if ($search->getIdentifiantmetier()->getIdentifiantdomaine()->getIdentifiant()) {
            $query = $query->innerJoin('App\Entity\Metier','metier',Join::WITH, 'metier.identifiant=o.identifiantmetier')
                            ->innerJoin('App\Entity\Domaine','domaine',Join::WITH, 'domaine.identifiant=metier.identifiantdomaine')
                            ->andWhere('domaine.identifiant = :domaine')
                            ->setParameter('domaine', $search->getIdentifiantmetier()->getIdentifiantdomaine()->getIdentifiant())
                            ->select('o');
        }
        return $query->getQuery()
                ->getResult();
    }
}
