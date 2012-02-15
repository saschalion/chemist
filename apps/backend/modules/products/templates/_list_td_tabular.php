<td>
  <?php if ($products->getPurchaseName()) echo link_to($products->getPurchaseName(), 'products_edit', $products) ?>
</td>
<td>
  <?php echo $products->getPreparationForm() ?>
</td>
<td>
  <?php echo $products->getType() ?>
</td>
<td>
  <?php echo $products->getCode() ?>
</td>
<td>
  <?php echo $products->getActionSubstance() ?>
</td>
<td>
    <?php if ($products->getApproachUsage()): ?>
    <a href="#" class="highslide-two">
        Показать
    </a>
    <div id="my-content">
        <div class="popup-content">
            <?php echo $products->getApproachUsage() ?>
        </div>
        <span class="close">Закрыть</span>
    </div>
    <?php endif; ?>
</td>
<td>
  <?php echo $products->getProducerId() ?>
</td>
<td>
  <?php echo false !== strtotime($products->getCreatedAt()) ? format_date($products->getCreatedAt(), 'dd.MM.yyyy') : '&nbsp;' ?>
</td>
<td>
  <?php echo $products->getAvailable(); ?>
</td>
<td>
  <?php echo $products->getCharge(); ?>
</td>