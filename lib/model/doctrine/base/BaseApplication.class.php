<?php

/**
 * BaseApplication
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $rank
 * @property string $name
 * @property string $description
 * @property string $meta_description
 * @property string $image
 * @property string $url
 * @property string $active
 * 
 * @method integer     getId()               Returns the current record's "id" value
 * @method integer     getRank()             Returns the current record's "rank" value
 * @method string      getName()             Returns the current record's "name" value
 * @method string      getDescription()      Returns the current record's "description" value
 * @method string      getMetaDescription()  Returns the current record's "meta_description" value
 * @method string      getImage()            Returns the current record's "image" value
 * @method string      getUrl()              Returns the current record's "url" value
 * @method string      getActive()           Returns the current record's "active" value
 * @method Application setId()               Sets the current record's "id" value
 * @method Application setRank()             Sets the current record's "rank" value
 * @method Application setName()             Sets the current record's "name" value
 * @method Application setDescription()      Sets the current record's "description" value
 * @method Application setMetaDescription()  Sets the current record's "meta_description" value
 * @method Application setImage()            Sets the current record's "image" value
 * @method Application setUrl()              Sets the current record's "url" value
 * @method Application setActive()           Sets the current record's "active" value
 * 
 * @package    datasol
 * @subpackage model
 * @author     David Joan Tataje Mendoza <dtataje@datasolutions.pe>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseApplication extends DoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('t_application');
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
        $this->hasColumn('meta_description', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             'notnull' => false,
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
        $thumbnailable0 = new Doctrine_Template_Thumbnailable(array(
             'fields' => 
             array(
              0 => 'image',
             ),
             ));
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'description',
              2 => 'meta_description',
             ),
             ));
        $sluggableext1 = new Doctrine_Template_SluggableExt(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             'uniqueBy' => 
             array(
              0 => 'lang',
              1 => 'name',
             ),
             ));
        $i18n0->addChild($sluggableext1);
        $this->actAs($timestampable0);
        $this->actAs($thumbnailable0);
        $this->actAs($i18n0);
    }
}