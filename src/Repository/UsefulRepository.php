<?php

namespace App\Repository;

use App\Entity\Useful;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Useful|null find($id, $lockMode = null, $lockVersion = null)
 * @method Useful|null findOneBy(array $criteria, array $orderBy = null)
 * @method Useful[]    findAll()
 * @method Useful[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsefulRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Useful::class);
    }

//    /**
//     * @return Useful[] Returns an array of Useful objects
//     */
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
    public function findOneBySomeField($value): ?Useful
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
