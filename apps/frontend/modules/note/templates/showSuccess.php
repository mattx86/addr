<?php use_stylesheet('main') ?>
<table width="350">
  <tr>
    <th><?php echo $note->getTitle() ?></th>
  </tr>
  <tr>
    <td><?php echo $note->getContent() ?></td>
  </tr>
</table>