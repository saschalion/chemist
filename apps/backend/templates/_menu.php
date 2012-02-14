<?php $module = sfContext::getInstance()->getModuleName(); ?>
<?php $action = sfContext::getInstance()->getActionName(); ?>

<div id="menu" class="clearfix">
    <ul class="clearfix">
        <li class="<?php echo ($module == 'products' ? 'active' : '')?>">
            <?php echo link_to('Продукты', 'products/index') ?>
            <ul class="sub-menu">
                <li class="<?php echo ($module == 'products' && $action == 'list' ? 'active' : '')?>">
                    <?php echo link_to('Полный список', 'products/list') ?>
                </li>
            </ul>
        </li>
        <li class="<?php echo ($module == 'producer' ? 'active' : '')?>">
            <?php echo link_to('Производители', 'producer/index') ?>
        </li>
        <li class="<?php echo ($module == 'PreparationForm' ? 'active' : '')?>">
            <?php echo link_to('Форма препарата', 'PreparationForm/index') ?>
        </li>
        <li class="<?php echo ($module == 'reports' ? 'active' : '')?>">
            <?php echo link_to('Накладные', 'reports/index') ?>
        </li>
    </ul>
</div>