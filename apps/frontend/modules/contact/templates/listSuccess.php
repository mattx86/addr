<?php use_stylesheet('main') ?>
<table width="300">
  <tr>
    <th width="75%">Name</th>
    <th width="25%">Nickname</th>
  </tr>
<?php foreach ($contacts as $contact): ?>
  <tr>
    <td><?php echo ($contact->getName()) ? '<a href="'.url_for('contact/show?id='.$contact->getId()).'">'.$contact->getName().'</a>' : 'N/A' ?></td>
    <td><?php echo ($contact->getNick()) ? $contact->getNick() : '--' ?></td>
  </tr>
<?php endforeach ?>