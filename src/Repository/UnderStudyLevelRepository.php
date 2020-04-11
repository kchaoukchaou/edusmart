<?php

namespace App\Repository;

use App\Entity\UnderStudyLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UnderStudyLevel|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnderStudyLevel|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnderStudyLevel[]    findAll()
 * @method UnderStudyLevel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnderStudyLevelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnderStudyLevel::class);
    }

    // /**
    //  * @return UnderStudyLevel[] Returns an array of UnderStudyLevel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnderStudyLevel
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
