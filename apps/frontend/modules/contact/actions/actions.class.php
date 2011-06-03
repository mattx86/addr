<?php

/**
 * contact actions.
 *
 * @package    addr
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
 /**
  * Lists the contacts.
  *
  * @param sfRequest $request A request object
  */
  public function executeList(sfWebRequest $request)
  {
    $this->contacts = Doctrine_Core::getTable('Contact')
      ->createQuery('c')
      ->execute();
  }

 /**
  * Shows the requested contact.
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->contact = $this->getRoute()->getObject();
    $this->notes = Doctrine_Core::getTable('Note')
      ->createQuery('n')
      ->where('contact_id = ?', $this->contact->getId())
      ->execute();
  }

 /**
  * Edits the requested contact.
  *
  * @param sfRequest $request A request object
  */  
  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new ContactForm($this->getRoute()->getObject());
  }
  
  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new ContactForm($this->getRoute()->getObject());
  }
  
  public function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
    );
    
    if ($form->isValid())
    {
      $contact = $form->save();
      
      $this->redirect('contact_show', $contact);
    }
  }
}
