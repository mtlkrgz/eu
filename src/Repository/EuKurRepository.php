<?php

namespace App\Repository;

use App\Entity\EuKur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EuKur|null find($id, $lockMode = null, $lockVersion = null)
 * @method EuKur|null findOneBy(array $criteria, array $orderBy = null)
 * @method EuKur[]    findAll()
 * @method EuKur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EuKurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EuKur::class);
    }

    // /**
    //  * @return EuKur[] Returns an array of EuKur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EuKur
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
