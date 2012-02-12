<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($producer->getId(), 'producer_edit', $producer), '%%name%%' => $producer->getName(), '%%created_at%%' => false !== strtotime($producer->getCreatedAt()) ? format_date($producer->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($producer->getUpdatedAt()) ? format_date($producer->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
