<?php use_helper('addr') ?>
<h1 id="contact_list_header">Contacts</h1>
<table id="contact_list">
  <tr>
    <th width="75%">Name</th>
    <th width="25%">Nickname</th>
  </tr>
<?php foreach ($contacts as $contact): ?>
  <?php toggle(1, 2, $stripe) ?>
  <tr class="stripe-<?php echo $stripe ?>">
    <td><?php echo ($contact->getName()) ? '<a href="'.url_for('contact/show?id='.$contact->getId()).'">'.$contact->getName().'</a>' : 'N/A' ?></td>
    <td><?php echo ($contact->getNick()) ? $contact->getNick() : '--' ?></td>
  </tr>
<?php endforeach ?>
</table>