<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($products->getId(), 'products_edit', $products) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_purchase_name">
  <?php echo $products->getPurchaseName() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_preparation_form_id">
  <?php echo $products->getPreparationFormId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($products->getCreatedAt()) ? format_date($products->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($products->getUpdatedAt()) ? format_date($products->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
