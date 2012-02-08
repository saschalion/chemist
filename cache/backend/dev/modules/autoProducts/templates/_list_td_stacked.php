<td colspan="9">
  <?php echo __('%%id%% - %%type%% - %%company%% - %%category%% - %%logo%% - %%url%% - %%description%% - %%among%% - %%token%%', array('%%id%%' => link_to($products->getId(), 'products_edit', $products), '%%type%%' => $products->getType(), '%%company%%' => $products->getCompany(), '%%category%%' => $products->getCategory(), '%%logo%%' => $products->getLogo(), '%%url%%' => $products->getUrl(), '%%description%%' => $products->getDescription(), '%%among%%' => $products->getAmong(), '%%token%%' => $products->getToken()), 'messages') ?>
</td>
