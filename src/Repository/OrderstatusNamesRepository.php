<?php

namespace App\Repository;

use App\Entity\OrderstatusNames;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrderstatusNames|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderstatusNames|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderstatusNames[]    findAll()
 * @method OrderstatusNames[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderstatusNamesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrderstatusNames::class);
    }

//    /**
//     * @return OrderstatusNames[] Returns an array of OrderstatusNames objects
//     */
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
    public function findOneBySomeField($value): ?OrderstatusNames
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
