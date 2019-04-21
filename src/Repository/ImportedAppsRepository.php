<?php

namespace App\Repository;

use App\Entity\ImportedApps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ImportedApps|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImportedApps|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImportedApps[]    findAll()
 * @method ImportedApps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImportedAppsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ImportedApps::class);
    }

    // /**
    //  * @return ImportedApps[] Returns an array of ImportedApps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImportedApps
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
