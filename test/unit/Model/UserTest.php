<?php
require_once dirname(__FILE__).'/../../bootstrap/unit.php';

$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);
//Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');

$t = new lime_test(1);

$user          = Doctrine_Core::getTable('User')->findOneById(1);

$value_encrypt = kcCrypt::encrypt('a');
$got3          = KcCrypt::compare($value_encrypt,'a');
$expected3     = true;
$t->is($got3,$expected3 ,'::encrypt() encripta correctamente el password del usuario');