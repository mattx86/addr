<?php

/**
 * Project form base class.
 *
 * @package    addr
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormDoctrine extends sfFormDoctrine
{
  public function setup()
  {
  }
  
  public function processForm(sfWebRequest $request, sfActions $action)
  {
    $this->bind(
      $request->getParameter($this->getName()),
      $request->getFiles($this->getName())
    );
    
    if ($this->isValid())
    {
      $action->redirect('contact_show', $this->save());
    }
  }
}
