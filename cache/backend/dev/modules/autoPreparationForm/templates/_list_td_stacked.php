<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($preparation_form->getId(), 'preparation_form_edit', $preparation_form), '%%name%%' => $preparation_form->getName(), '%%created_at%%' => false !== strtotime($preparation_form->getCreatedAt()) ? format_date($preparation_form->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($preparation_form->getUpdatedAt()) ? format_date($preparation_form->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
