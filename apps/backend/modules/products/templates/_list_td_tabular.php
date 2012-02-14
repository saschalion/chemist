<td class="sf_admin_text sf_admin_list_td_purchase_name">
  <?php if ($products->getPurchaseName()) echo link_to($products->getPurchaseName(), 'products_edit', $products) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_preparation_form_id">
  <?php echo $products->getPreparationForm() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $products->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code">
  <?php echo $products->getCode() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_action_substance">
  <?php echo $products->getActionSubstance() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_code">
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
<td class="sf_admin_foreignkey sf_admin_list_td_producer_id">
  <?php echo $products->getProducerId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($products->getCreatedAt()) ? format_date($products->getCreatedAt(), 'dd.MM.yyyy') : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo $products->getAvailable(); ?>
</td>