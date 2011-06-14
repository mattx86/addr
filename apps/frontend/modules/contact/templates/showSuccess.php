<?php use_helper('addr') ?>
<h1 id="contact_header">Contact</h1>
<table id="contact_details">
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>Name:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo $contact->getName() ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>Nickname:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo $contact->getNick() ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>Address:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo ($contact->getAddr1()) ? $contact->getAddr1() : '&nbsp;' ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th></th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo ($contact->getAddr2()) ? $contact->getAddr2() : '&nbsp;' ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>City:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo $contact->getCity() ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>State:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo $contact->getState() ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>Zip:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo $contact->getZip() ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>Primary E-mail:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo ($contact->getEmail1()) ? mail_to($contact->getEmail1()) : '' ?></td>
  </tr>
  <?php toggle(1, 2, $stripe) ?>
  <tr>
    <th>Secondary E-mail:</th>
    <td class="stripe-<?php echo $stripe ?>"><?php echo ($contact->getEmail2()) ? mail_to($contact->getEmail2()) : '' ?></td>
  </tr>
</table>
<div class="form-actions"><?php echo '<a href="'.url_for('contact/edit?id='.$contact->getId()).'">Edit</a>' ?></div>

<br /><br />

<h2 id="contact_notes_header">Contact Notes</h2>
<table id="contact_notes_list">
  <?php foreach ($notes as $note): ?>
  <tr>
    <td>
      <?php echo '<a href="'.url_for('note_show', array('contact_id' => $contact->getId(), 'id' => $note->getId())).'">'.$note->title.'</a>' ?>
    </td>
  </tr>
  <?php endforeach ?>
</table>  