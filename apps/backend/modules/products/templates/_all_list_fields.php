<?php if($products->getCode()) echo $products->getCode() . ',' ?>
<?php if($products->getPurchaseName()) echo link_to($products->getPurchaseName(), 'products_edit', $products) . ',' ?>
 <?php echo $products->getPreparationForm() ?>
 <?php echo $products->getType() ?>