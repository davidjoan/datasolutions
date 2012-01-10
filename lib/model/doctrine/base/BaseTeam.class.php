<?php

/**
 * BaseTeam
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $rank
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $url
 * @property string $active
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method integer getRank()        Returns the current record's "rank" value
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getDescription() Returns the current record's "description" value
 * @method string  getImage()       Returns the current record's "image" value
 * @method string  getUrl()         Returns the current record's "url" value
 * @method string  getActive()      Returns the current record's "active" value
 * @method Team    setId()          Sets the current record's "id" value
 * @method Team    setRank()        Sets the current record's "rank" value
 * @method Team    setName()        Sets the current record's "name" value
 * @method Team    setDescription() Sets the current record's "description" value
 * @method Team    setImage()       Sets the current record's "image" value
 * @method Team    setUrl()         Sets the current record's "url" value
 * @method Team    setActive()      Sets the current record's "active" value
 * 
 * @package    datasol
 * @subpackage model
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTeam extends DoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('t_team');
        $this->hasColumn('id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('rank', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('name', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'notnull' => true,
             ));
        $this->hasColumn('description', 'string', 5000, array(
             'type' => 'string',
             'length' => 5000,
             'notnull' => true,
             ));
        $this->hasColumn('image', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'notnull' => false,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('active', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => 1,
             'notnull' => true,
             'default' => 0,
             ));


        $this->index('i_active', array(
             'fields' => 
             array(
              0 => 'active',
             ),
             ));
        $this->index('i_url', array(
             'fields' => 
             array(
              0 => 'url',
             ),
             ));
        $this->option('symfony', array(
             'filter' => false,
             'form' => true,
             ));
        $this->option('boolean_columns', array(
             0 => 'active',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggableext0 = new Doctrine_Template_SluggableExt(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $thumbnailable0 = new Doctrine_Template_Thumbnailable(array(
             'fields' => 
             array(
              0 => 'image',
             ),
             ));
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'description',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggableext0);
        $this->actAs($thumbnailable0);
        $this->actAs($i18n0);
    }
}