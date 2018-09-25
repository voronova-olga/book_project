<?php

namespace App\Repository;

use App\Entity\Categorynames;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Categorynames|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorynames|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorynames[]    findAll()
 * @method Categorynames[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorynamesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Categorynames::class);
    }

//    /**
//     * @return Categorynames[] Returns an array of Categorynames objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Categorynames
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
