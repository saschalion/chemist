<?php use_helper('I18N', 'Date') ?>
<?php include_partial('products/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Products', array(), 'messages') ?></h1>

  <?php include_partial('products/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('products/form_header', array('products' => $products, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('products/form', array('products' => $products, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('products/form_footer', array('products' => $products, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
