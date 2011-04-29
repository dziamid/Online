<?php

/**
 * Comment filter form base class.
 *
 * @package    www
 * @subpackage filter
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCommentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormFilterInput(),
      'file_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => true)),
      'root_id'  => new sfWidgetFormFilterInput(),
      'message'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lft'      => new sfWidgetFormFilterInput(),
      'rgt'      => new sfWidgetFormFilterInput(),
      'level'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorPass(array('required' => false)),
      'file_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('File'), 'column' => 'id')),
      'root_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'message'  => new sfValidatorPass(array('required' => false)),
      'lft'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('comment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'username' => 'Text',
      'file_id'  => 'ForeignKey',
      'root_id'  => 'Number',
      'message'  => 'Text',
      'lft'      => 'Number',
      'rgt'      => 'Number',
      'level'    => 'Number',
    );
  }
}
