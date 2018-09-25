<?php

namespace App\Repository;

use App\Entity\Covertypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Covertypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Covertypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Covertypes[]    findAll()
 * @method Covertypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CovertypesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Covertypes::class);
    }

//    /**
//     * @return Covertypes[] Returns an array of Covertypes objects
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
    public function findOneBySomeField($value): ?Covertypes
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
