<?php

/**
 * BaseFile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Comments
 * 
 * @method string              getName()     Returns the current record's "name" value
 * @method Doctrine_Collection getComments() Returns the current record's "Comments" collection
 * @method File                setName()     Sets the current record's "name" value
 * @method File                setComments() Sets the current record's "Comments" collection
 * 
 * @package    www
 * @subpackage model
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseFile extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('file');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Comment as Comments', array(
             'local' => 'id',
             'foreign' => 'file_id'));
    }
}