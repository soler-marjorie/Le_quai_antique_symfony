<?php

namespace App\Repository;

use App\Entity\MorningSchedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MorningSchedule>
 *
 * @method MorningSchedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method MorningSchedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method MorningSchedule[]    findAll()
 * @method MorningSchedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MorningScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MorningSchedule::class);
    }

//    /**
//     * @return MorningSchedule[] Returns an array of MorningSchedule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MorningSchedule
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
