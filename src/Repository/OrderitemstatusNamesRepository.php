<?php

namespace App\Repository;

use App\Entity\OrderitemstatusNames;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrderitemstatusNames|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderitemstatusNames|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderitemstatusNames[]    findAll()
 * @method OrderitemstatusNames[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderitemstatusNamesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrderitemstatusNames::class);
    }

//    /**
//     * @return OrderitemstatusNames[] Returns an array of OrderitemstatusNames objects
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
    public function findOneBySomeField($value): ?OrderitemstatusNames
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
