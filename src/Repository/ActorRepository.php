<?php

namespace App\Repository;

use App\Entity\Actor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Actor>
 *
 * @method Actor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actor[]    findAll()
 * @method Actor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actor::class);
    }

    public function save(Actor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Actor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findOneRandom()
    {
        $em = $this->getEntityManager();
        $max = $em->createQuery('
            SELECT MAX(q.id) FROM App\Entity\Actor q
            ')
            ->getSingleScalarResult();
        return $em->createQuery('
            SELECT q FROM App\Entity\Actor q 
            WHERE q.id >= :rand
            ORDER BY q.id ASC
            ')
            ->setParameter('rand', rand(0, $max))
            ->setMaxResults(1)
            ->getSingleResult();
    }
    // public function findAllRandom()
    // {
    //     $em = $this->getEntityManager();

    //     $max = $em->createQuery('
    //     SELECT MAX(a.id) FROM App\Entity\Actor a
    //     ')
    //         ->getSingleScalarResult();

    //     return $em->createQuery('
    //     SELECT a FROM App\Entity\Actor a 
    //     WHERE a.id >= :rand
    //     ')
    //         ->setParameter('rand', rand(0, $max))
    //         ->setMaxResults(10)
    //         ->getResult();
    // }
    public function findAllRandom()
    {
        $em = $this->getEntityManager();

        $max = $em->createQuery('
            SELECT MAX(a.id) FROM App\Entity\Actor a
            ')
            ->getSingleScalarResult();

        $randomIds = [];
        while (count($randomIds) < $max + 1) {
            $randomId = rand(0, $max);
            if (!in_array($randomId, $randomIds)) {
                $randomIds[] = $randomId;
            }
        }

        return $em->createQuery('
            SELECT a FROM App\Entity\Actor a 
            WHERE a.id IN (:randomIds) 
            ORDER BY a.id ASC
            ')
            ->setParameter('randomIds', $randomIds)
            ->setMaxResults(10)
            ->getResult();
    }

    //Search Actor follow name
    public function findAllByName($name)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.name LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //Search Actor follow name
    public function findAllByCountry($countryName)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.country = :countryName')
            ->setParameter('countryName', $countryName)
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult();
    }




    //    /**
    //     * @return Actor[] Returns an array of Actor objects
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

    //    public function findOneBySomeField($value): ?Actor
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
