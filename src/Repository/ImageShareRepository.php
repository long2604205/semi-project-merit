<?php

namespace App\Repository;

use App\Entity\ImageShare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageShare>
 *
 * @method ImageShare|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageShare|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageShare[]    findAll()
 * @method ImageShare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageShareRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageShare::class);
    }

    public function save(ImageShare $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ImageShare $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //    /**
    //     * @return ImageShare[] Returns an array of ImageShare objects
    //     */
    // public function findByExampleField($value): array
    // {
    //     return $this->createQueryBuilder('i')
    //         ->andWhere('i.exampleField = :val')
    //         ->setParameter('val', $value)
    //         ->orderBy('i.id', 'ASC')
    //         ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult();
    // }

    public function findByActorId($value): array
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.actor = :actor')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }

    //    public function findOneBySomeField($value): ?ImageShare
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
