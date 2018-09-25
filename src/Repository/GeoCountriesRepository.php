<?php

namespace App\Repository;

use App\Entity\GeoCountries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GeoCountries|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeoCountries|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeoCountries[]    findAll()
 * @method GeoCountries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeoCountriesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GeoCountries::class);
    }

//    /**
//     * @return GeoCountries[] Returns an array of GeoCountries objects
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
    public function findOneBySomeField($value): ?GeoCountries
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
