<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($preparation_form->getId(), 'preparation_form_edit', $preparation_form) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $preparation_form->getName() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($preparation_form->getCreatedAt()) ? format_date($preparation_form->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($preparation_form->getUpdatedAt()) ? format_date($preparation_form->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
