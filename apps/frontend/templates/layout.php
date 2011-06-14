<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php if ($sf_params->get('module').'_'.$sf_params->get('action') != 'contact_list'): ?>
      <a href="<?php echo url_for('contact_list') ?>">Go to Contact List</a>
    <?php endif ?>
    <?php if ($sf_params->get('module').'_'.$sf_params->get('action') == 'note_show'): ?>
      | <a href="<?php echo url_for('@contact_show?id='.$sf_params->get('contact_id')) ?>">Go back to Contact</a>
    <?php endif ?>
    <br /><br />
    <div id="content_container">
      <?php echo $sf_content ?>
    </div>
  </body>
</html>
