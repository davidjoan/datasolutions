<?php

/**
 * ServiceTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ServiceTable extends DoctrineTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ServiceTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Service');
    }
    const
    STATUS_ACTIVE       = 1,
    STATUS_INACTIVE     = 0;
    
    protected static
    $status                = array
    (
    self::STATUS_ACTIVE     => 'Si'  ,
    self::STATUS_INACTIVE   => 'No',
    );
     
    public function getStatuss()
    {
    	return self::$status;
    }
    
    
    public function getNewRank()
    {
    	$q = $this->createQuery('a')
    	->addSelect('MAX(rank)');
    
    	$dato = $q->execute()->getFirst()->toArray();
    	return $dato['MAX']+1;
    }
    
    public function findOneBySlug($slug)
    {
    	$q = $this->createQuery('a')
    	->leftJoin('a.Translation t')
    	->andWhere('t.lang = ?', 'es')
    	->andWhere('t.slug = ?', $slug);
    	return $q->fetchOne();
    }
    
    
    public function getPathDir()
    {
    	return sfConfig::get('app_service_images_dir');
    }
    
    public function getImagePath()
    {
    	return sfConfig::get('app_service_images_path');
    }
    
    public function findServices()
    {
    	return $this->findQueryServices()->execute();
    }
    
    public function findQueryServices()
    {
    	$q = $this->createQuery('a')
    	->addWhere('a.active = 1')
    	->orderBy('rank asc');
    
    	return $q;
    }    
}