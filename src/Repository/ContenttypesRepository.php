<?php

namespace App\Repository;

use App\Entity\Contenttypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contenttypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contenttypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contenttypes[]    findAll()
 * @method Contenttypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContenttypesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contenttypes::class);
    }

//    /**
//     * @return Contenttypes[] Returns an array of Contenttypes objects
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
    public function findOneBySomeField($value): ?Contenttypes
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
