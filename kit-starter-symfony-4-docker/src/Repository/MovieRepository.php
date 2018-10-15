<?php

namespace App\Repository;

use App\Entity\Movie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class MovieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Movie::class);
    }

    /**
     * @param int $movieId
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneWithActors(int $movieId)
    {
        $query = $this->createQueryBuilder('m')
            ->select('m, a')
            ->leftJoin('m.actors', 'a')
            ->where('m.id = :id')
            ->setParameter('id', $movieId)
            ->getQuery();

        return $query->getOneOrNullResult();
    }
}