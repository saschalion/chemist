<?php use_helper('I18N', 'Date') ?>
<?php include_partial('PreparationForm/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New PreparationForm', array(), 'messages') ?></h1>

  <?php include_partial('PreparationForm/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('PreparationForm/form_header', array('preparation_form' => $preparation_form, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('PreparationForm/form', array('preparation_form' => $preparation_form, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('PreparationForm/form_footer', array('preparation_form' => $preparation_form, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
