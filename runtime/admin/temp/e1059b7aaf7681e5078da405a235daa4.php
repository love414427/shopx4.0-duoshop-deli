<?php /*a:1:{s:75:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/link/module/operate.html";i:1699863362;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/link/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span><?php echo MyLang('detail_title'); ?></span>
</button>
<button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block submit-edit" data-am-modal="{target: '#data-save-win'}" data-json='<?php echo json_encode($module_data); ?>'>
    <i class="am-icon-edit"></i>
    <span><?php echo MyLang('edit_title'); ?></span>
</button>
<button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/link/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids">
    <i class="am-icon-trash-o"></i>
    <span><?php echo MyLang('delete_title'); ?></span>
</button>