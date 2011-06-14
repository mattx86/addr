<?php use_stylesheet('main') ?>
<h1 id="note_details_header">Note</h1>
<table id="note_details">
  <tr>
    <th><?php echo $note->getTitle() ?></th>
  </tr>
  <tr>
    <td><?php echo $note->getContent() ?></td>
  </tr>
</table>
<div class="form-actions">
  <a href="<?php echo url_for('@note_edit'.
    '?contact_id='.$sf_params->get('contact_id').
    '&id='.$sf_params->get('id')) ?>">Edit</a>
</div>