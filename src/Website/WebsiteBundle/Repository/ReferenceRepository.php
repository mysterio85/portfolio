<?php

namespace Website\WebsiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ReferenceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReferenceRepository extends EntityRepository
{
	/*
	 * Methode pour recuperer toutes les references
	 */
	public  function getAllReferences(){
		$qb=$this->createQueryBuilder('r')
				->select('r')
				->getQuery()
				->getResult();
		return $qb;
	}
}