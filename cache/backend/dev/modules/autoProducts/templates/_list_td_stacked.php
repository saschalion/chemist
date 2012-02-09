<td colspan="5">
  <?php echo __('%%id%% - %%purchase_name%% - %%preparation_form_id%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($products->getId(), 'products_edit', $products), '%%purchase_name%%' => $products->getPurchaseName(), '%%preparation_form_id%%' => $products->getPreparationFormId(), '%%created_at%%' => false !== strtotime($products->getCreatedAt()) ? format_date($products->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($products->getUpdatedAt()) ? format_date($products->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
