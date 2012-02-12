<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($products, array(  
            'params' =>   array(  ),
            'class_suffix' => 'edit',
            'label' => 'Редактировать'
        )
        )
    ?>
    <?php echo $helper->linkToDelete($products, array(
            'params' =>   array(  ),
            'confirm' => 'Вы уверены?',
            'class_suffix' => 'delete',
            'label' => 'Удалить'
            )
        )
    ?>
  </ul>
</td>
