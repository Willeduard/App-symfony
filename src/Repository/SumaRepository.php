<?php

namespace App\Repository;

use App\Entity\Suma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Suma|null find($id, $lockMode = null, $lockVersion = null)
 * @method Suma|null findOneBy(array $criteria, array $orderBy = null)
 * @method Suma[]    findAll()
 * @method Suma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SumaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Suma::class);
    }

    // /**
    //  * @return Suma[] Returns an array of Suma objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Suma
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
