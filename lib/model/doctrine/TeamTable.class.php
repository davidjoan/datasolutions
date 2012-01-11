<?php

/**
 * TeamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TeamTable extends DoctrineTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TeamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Team');
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
      ->addWhere('a.id = ?', $slug);
  return $q->fetchOne();
  }
    
    
    public function getPathDir()
    {
    	return sfConfig::get('app_team_images_dir');
    }
    
    public function getImagePath()
    {
    	return sfConfig::get('app_team_images_path');
    }
    
    public function findTeam()
    {
    	return $this->findQueryTeam()->execute();
    }
    
    public function findQueryTeam()
    {
    	$q = $this->createQuery('a')
    	->addWhere('a.active = 1')
    	->orderBy('rank asc');
    
    	return $q;
    }    
}