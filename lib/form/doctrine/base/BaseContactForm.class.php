<?php

/**
 * Contact form base class.
 *
 * @method Contact getObject() Returns the current form's model object
 *
 * @package    addr
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContactForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'nick'       => new sfWidgetFormInputText(),
      'addr1'      => new sfWidgetFormInputText(),
      'addr2'      => new sfWidgetFormInputText(),
      'city'       => new sfWidgetFormInputText(),
      'state'      => new sfWidgetFormInputText(),
      'zip'        => new sfWidgetFormInputText(),
      'email1'     => new sfWidgetFormInputText(),
      'email2'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nick'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'addr1'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'addr2'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'state'      => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'zip'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'email1'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email2'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('contact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contact';
  }

}
