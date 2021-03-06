<?php

namespace App\Repository;

use App\Entity\Topic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use function MongoDB\BSON\toPHP;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Topic|null find($id, $lockMode = null, $lockVersion = null)
 * @method Topic|null findOneBy(array $criteria, array $orderBy = null)
 * @method Topic[]    findAll()
 * @method Topic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TopicRepository extends ServiceEntityRepository
{
  public function __construct(RegistryInterface $registry)
  {
    parent::__construct($registry, Topic::class);
  }

  public function save(Topic $topic)
  {
    // TODO: 验证

    $entityManager = $this->getEntityManager();
    $entityManager->persist($topic);
    $entityManager->flush();

  }
  // /**
  //  * @return Topic[] Returns an array of Topic objects
  //  */
  /*
  public function findByExampleField($value)
  {
      return $this->createQueryBuilder('t')
          ->andWhere('t.exampleField = :val')
          ->setParameter('val', $value)
          ->orderBy('t.id', 'ASC')
          ->setMaxResults(10)
          ->getQuery()
          ->getResult()
      ;
  }
  */

  /*
  public function findOneBySomeField($value): ?Topic
  {
      return $this->createQueryBuilder('t')
          ->andWhere('t.exampleField = :val')
          ->setParameter('val', $value)
          ->getQuery()
          ->getOneOrNullResult()
      ;
  }
  */
}
