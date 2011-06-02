<?php use_stylesheet('main') ?>
<style type="text/css">
th {
  text-align: right;
  padding-right: 5px;
}
</style>
<h1>Contact</h1>
<table width="350">
  <tr>
    <th>Name</th>
    <td><?php echo $contact->getName() ?></td>
  </tr>
  <tr>
    <th>Nickname</th>
    <td><?php echo $contact->getNick() ?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?php echo ($contact->getAddr1()) ? $contact->getAddr1() : '&nbsp;' ?></td>
  </tr>
  <tr>
    <th></th>
    <td><?php echo ($contact->getAddr2()) ? $contact->getAddr2() : '&nbsp;' ?></td>
  </tr>
  <tr>
    <th>City</th>
    <td><?php echo $contact->getCity() ?></td>
  </tr>
  <tr>
    <th>State</th>
    <td><?php echo $contact->getState() ?></td>
  </tr>
  <tr>
    <th>Zip</th>
    <td><?php echo $contact->getZip() ?></td>
  </tr>
  <tr>
    <th>Primary E-mail</th>
    <td><?php echo ($contact->getEmail1()) ? mail_to($contact->getEmail1()) : '' ?></td>
  </tr>
  <tr>
    <th>Secondary E-mail</th>
    <td><?php echo $contact->getEmail2() ?></td>
  </tr>
</table>

<h2>Contact Notes</h2>
<table width="350">
  <?php foreach ($notes as $note): ?>
  <tr>
    <td>
      <?php echo '<a href="'.url_for('note_show', array('contact_id' => $contact->getId(), 'id' => $note->getId())).'">'.$note->title.'</a>' ?>
    </td>
  </tr>
  <?php endforeach ?>
</table>  