<?php

namespace App\Repository;

use App\Entity\BooksCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BooksCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method BooksCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method BooksCategories[]    findAll()
 * @method BooksCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BooksCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BooksCategories::class);
    }

//    /**
//     * @return BooksCategories[] Returns an array of BooksCategories objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BooksCategories
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
