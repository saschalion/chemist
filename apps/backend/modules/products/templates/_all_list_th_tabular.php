
<th class="sf_admin_text sf_admin_list_th_purchase_name">
  
    <?php echo link_to(__('Препарат', array(), 'messages'), '@products', array('query_string' => 'sort=purchase_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
 

</th>
