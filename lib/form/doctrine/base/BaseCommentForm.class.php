<?php

/**
 * Comment form base class.
 *
 * @method Comment getObject() Returns the current form's model object
 *
 * @package    www
 * @subpackage form
 * @author     Dziamid Zayankouski
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'username' => new sfWidgetFormInputText(),
      'file_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'add_empty' => true)),
      'root_id'  => new sfWidgetFormInputText(),
      'message'  => new sfWidgetFormTextarea(),
      'lft'      => new sfWidgetFormInputText(),
      'rgt'      => new sfWidgetFormInputText(),
      'level'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'username' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'file_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('File'), 'required' => false)),
      'root_id'  => new sfValidatorInteger(array('required' => false)),
      'message'  => new sfValidatorString(array('max_length' => 1020, 'required' => false)),
      'lft'      => new sfValidatorInteger(array('required' => false)),
      'rgt'      => new sfValidatorInteger(array('required' => false)),
      'level'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }

}
