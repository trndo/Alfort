<?php

namespace App\Repository;

use App\Entity\ADR;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ADR|null find($id, $lockMode = null, $lockVersion = null)
 * @method ADR|null findOneBy(array $criteria, array $orderBy = null)
 * @method ADR[]    findAll()
 * @method ADR[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ADRRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ADR::class);
    }

//    /**
//     * @return ADR[] Returns an array of ADR objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ADR
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
