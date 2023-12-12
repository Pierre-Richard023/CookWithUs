<?php

namespace App\Repository;

use App\Entity\DishTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DishTypes>
 *
 * @method DishTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method DishTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method DishTypes[]    findAll()
 * @method DishTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DishTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DishTypes::class);
    }

//    /**
//     * @return DishTypes[] Returns an array of DishTypes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DishTypes
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
