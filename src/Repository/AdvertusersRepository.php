<?php

namespace App\Repository;

use App\Entity\Advertusers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Advertusers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Advertusers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Advertusers[]    findAll()
 * @method Advertusers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdvertusersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Advertusers::class);
    }

//    /**
//     * @return Advertusers[] Returns an array of Advertusers objects
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
    public function findOneBySomeField($value): ?Advertusers
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
