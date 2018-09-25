<?php

namespace App\Repository;

use App\Entity\Perwhats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Perwhats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Perwhats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Perwhats[]    findAll()
 * @method Perwhats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PerwhatsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Perwhats::class);
    }

//    /**
//     * @return Perwhats[] Returns an array of Perwhats objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Perwhats
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
