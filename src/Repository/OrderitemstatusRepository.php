<?php

namespace App\Repository;

use App\Entity\Orderitemstatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Orderitemstatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orderitemstatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orderitemstatus[]    findAll()
 * @method Orderitemstatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderitemstatusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Orderitemstatus::class);
    }

//    /**
//     * @return Orderitemstatus[] Returns an array of Orderitemstatus objects
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
    public function findOneBySomeField($value): ?Orderitemstatus
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
