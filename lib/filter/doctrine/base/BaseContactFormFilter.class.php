<?php

/**
 * Contact filter form base class.
 *
 * @package    addr
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContactFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(),
      'nick'       => new sfWidgetFormFilterInput(),
      'addr1'      => new sfWidgetFormFilterInput(),
      'addr2'      => new sfWidgetFormFilterInput(),
      'city'       => new sfWidgetFormFilterInput(),
      'state'      => new sfWidgetFormFilterInput(),
      'zip'        => new sfWidgetFormFilterInput(),
      'email1'     => new sfWidgetFormFilterInput(),
      'email2'     => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'nick'       => new sfValidatorPass(array('required' => false)),
      'addr1'      => new sfValidatorPass(array('required' => false)),
      'addr2'      => new sfValidatorPass(array('required' => false)),
      'city'       => new sfValidatorPass(array('required' => false)),
      'state'      => new sfValidatorPass(array('required' => false)),
      'zip'        => new sfValidatorPass(array('required' => false)),
      'email1'     => new sfValidatorPass(array('required' => false)),
      'email2'     => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('contact_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contact';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'nick'       => 'Text',
      'addr1'      => 'Text',
      'addr2'      => 'Text',
      'city'       => 'Text',
      'state'      => 'Text',
      'zip'        => 'Text',
      'email1'     => 'Text',
      'email2'     => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
