<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;



class PolzovatelRepository extends EntityRepository
{

public function findOneByIdJoinedToMonitor($polzovatelId)
{
    $query = $em->createQuery(
       'SELECT p, c FROM AppBundle:Polzovatel p
        JOIN p.monitor c
        WHERE p.id_monitor = :id'
    )->setParameter('id', $polzovatelId);

    try {
        return $query->getSingleResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
}
}