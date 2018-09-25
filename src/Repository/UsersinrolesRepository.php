<?php

namespace App\Repository;

use App\Entity\Usersinroles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Usersinroles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usersinroles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usersinroles[]    findAll()
 * @method Usersinroles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersinrolesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usersinroles::class);
    }

//    /**
//     * @return Usersinroles[] Returns an array of Usersinroles objects
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
    public function findOneBySomeField($value): ?Usersinroles
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
