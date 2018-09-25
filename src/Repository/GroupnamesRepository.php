<?php

namespace App\Repository;

use App\Entity\Groupnames;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Groupnames|null find($id, $lockMode = null, $lockVersion = null)
 * @method Groupnames|null findOneBy(array $criteria, array $orderBy = null)
 * @method Groupnames[]    findAll()
 * @method Groupnames[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupnamesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Groupnames::class);
    }

//    /**
//     * @return Groupnames[] Returns an array of Groupnames objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Groupnames
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
