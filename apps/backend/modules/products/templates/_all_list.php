<div class="sf_admin_list">
  <?php if (!$pager->getNbResults()): ?>
    <p><?php echo __('No result', array(), 'sf_admin') ?></p>
  <?php else: ?>
    <?php include_partial('products/all_list_th_tabular', array('sort' => $sort)) ?>
    <ul class="all-products-list">
        <?php foreach ($pager->getResults() as $i => $products): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <li class="<?php echo $odd ?>">            
            <?php include_partial('products/all_list_fields', array('products' => $products)) ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php if ($pager->haveToPaginate()): ?>
      <?php include_partial('products/pagination', array('pager' => $pager)) ?>
    <?php endif; ?>

    <?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
    <?php if ($pager->haveToPaginate()): ?>
      <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
    <?php endif; ?>
  <?php endif; ?>
</div>
<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>
