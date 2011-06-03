<?php

/**
 * Contact form.
 *
 * @package    addr
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactForm extends BaseContactForm
{
  public function configure()
  {
    // remove widgets for the following fields:
    unset($this['created_at'], $this['updated_at']);
    
    // change some validators
    $this->validatorSchema['email1'] = new sfValidatorAnd(array(
      $this->validatorSchema['email1'],
      new sfValidatorEmail()
    ));
    
    $this->validatorSchema['email2'] = new sfValidatorAnd(array(
      $this->validatorSchema['email2'],
      new sfValidatorEmail()
    ));
    
    // change some labels
    $this->widgetSchema->setLabel('addr1', 'Address');
  }
}
