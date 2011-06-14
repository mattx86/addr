<?php

/**
 * note actions.
 *
 * @package    addr
 * @subpackage note
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class noteActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->note = $this->getRoute()->getObject();
  }
  
 /**
  * Edits the requested note.
  *
  * @param sfRequest $request A request object
  */  
  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new NoteForm($this->getRoute()->getObject());
  }
  
 /**
  * Updates the requested note.
  *
  * @param sfRequest $request A request object
  */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new NoteForm($this->getRoute()->getObject());
    $this->form->processForm($request, $this);
    $this->setTemplate('edit');
  }
}
