<?php

namespace App\Repository;

use App\Entity\MailHeaders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailHeaders|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailHeaders|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailHeaders[]    findAll()
 * @method MailHeaders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailHeadersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailHeaders::class);
    }

//    /**
//     * @return MailHeaders[] Returns an array of MailHeaders objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MailHeaders
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
