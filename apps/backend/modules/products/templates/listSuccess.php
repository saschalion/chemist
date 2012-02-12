<?php use_helper('I18N', 'Date') ?>
<?php include_partial('products/assets') ?>

<div id="sf_admin_container">
    <h1><?php echo __('Полный список', array(), 'messages') ?></h1>

    <?php include_partial('products/flashes') ?>

    <div id="sf_admin_content">
    <form action="<?php echo url_for('products_collection', array('action' => 'batch')) ?>" method="post">
        <?php include_partial('products/all_list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
       
    </form>
    </div>
</div>