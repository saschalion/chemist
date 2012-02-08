<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($products->getId(), 'products_edit', $products) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $products->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $products->getCompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_category">
  <?php echo $products->getCategory() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_logo">
  <?php echo $products->getLogo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $products->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $products->getDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_among">
  <?php echo $products->getAmong() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_token">
  <?php echo $products->getToken() ?>
</td>
