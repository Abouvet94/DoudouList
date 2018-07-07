<?php

namespace App\Repository;

use App\Entity\DoudouList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DoudouList|null find($id, $lockMode = null, $lockVersion = null)
 * @method DoudouList|null findOneBy(array $criteria, array $orderBy = null)
 * @method DoudouList[]    findAll()
 * @method DoudouList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoudouListRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DoudouList::class);
    }

//    /**
//     * @return DoudouList[] Returns an array of DoudouList objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DoudouList
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
