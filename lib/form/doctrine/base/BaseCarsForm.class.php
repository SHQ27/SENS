<?php

/**
 * Cars form base class.
 *
 * @method Cars getObject() Returns the current form's model object
 *
 * @package    SENS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCarsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'brand'      => new sfWidgetFormInputText(),
      'model'      => new sfWidgetFormInputText(),
      'submodel'   => new sfWidgetFormInputText(),
      'year'       => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'brand'      => new sfValidatorString(array('max_length' => 255)),
      'model'      => new sfValidatorString(array('max_length' => 255)),
      'submodel'   => new sfValidatorString(array('max_length' => 255)),
      'year'       => new sfValidatorDateTime(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('cars[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cars';
  }

}
