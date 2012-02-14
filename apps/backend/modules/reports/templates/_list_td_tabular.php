<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($reports->getId(), 'reports_edit', $reports) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $reports->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $reports->getAmong() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_product_id">
  <?php echo $reports->getProducts()->getPurchaseName() ?>
</td>
