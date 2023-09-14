<?php

namespace App\Repository;

use App\Entity\AfternoonSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AfternoonSchedule>
 *
 * @method AfternoonSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method AfternoonSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method AfternoonSchedule[]    findAll()
 * @method AfternoonSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AfternoonScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AfternoonSchedule::class);
    }

//    /**
//     * @return AfternoonSchedule[] Returns an array of AfternoonSchedule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AfternoonSchedule
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
