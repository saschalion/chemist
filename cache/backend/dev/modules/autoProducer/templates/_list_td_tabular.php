<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($producer->getId(), 'producer_edit', $producer) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $producer->getName() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($producer->getCreatedAt()) ? format_date($producer->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($producer->getUpdatedAt()) ? format_date($producer->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
