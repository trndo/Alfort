<?php

namespace App\Repository;

use App\Entity\Adr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Adr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adr[]    findAll()
 * @method Adr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdrRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Adr::class);
    }

//    /**
//     * @return Adr[] Returns an array of Adr objects
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
    public function findOneBySomeField($value): ?Adr
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
