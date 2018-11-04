<?php

namespace App\Repository;

use App\Entity\SMB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SMB|null find($id, $lockMode = null, $lockVersion = null)
 * @method SMB|null findOneBy(array $criteria, array $orderBy = null)
 * @method SMB[]    findAll()
 * @method SMB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SMBRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SMB::class);
    }

//    /**
//     * @return SMB[] Returns an array of SMB objects
//     */
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
    public function findOneBySomeField($value): ?SMB
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
