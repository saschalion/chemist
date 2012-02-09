<?php use_helper('I18N', 'Date') ?>
<?php include_partial('producer/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Producer', array(), 'messages') ?></h1>

  <?php include_partial('producer/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('producer/form_header', array('producer' => $producer, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('producer/form', array('producer' => $producer, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('producer/form_footer', array('producer' => $producer, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
