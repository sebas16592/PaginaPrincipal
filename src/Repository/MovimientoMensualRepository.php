<?php

namespace App\Repository;

use App\Entity\MovimientoMensual;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MovimientoMensual|null find($id, $lockMode = null, $lockVersion = null)
 * @method MovimientoMensual|null findOneBy(array $criteria, array $orderBy = null)
 * @method MovimientoMensual[]    findAll()
 * @method MovimientoMensual[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovimientoMensualRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MovimientoMensual::class);
    }

    // /**
    //  * @return MovimientoMensual[] Returns an array of MovimientoMensual objects
    //  */
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
    public function findOneBySomeField($value): ?MovimientoMensual
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
