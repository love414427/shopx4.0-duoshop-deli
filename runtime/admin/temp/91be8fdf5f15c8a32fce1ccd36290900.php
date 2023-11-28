<?php /*a:1:{s:81:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/navigation/module/operate.html";i:1699863362;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block submit-edit" data-am-modal="{target: '#nav-<?php echo htmlentities($module_data['data_type']); ?>-save-win'}" data-json='<?php echo json_encode($module_data); ?>' data-tag="nav-<?php echo htmlentities($module_data['data_type']); ?>-save-win">
    <i class="am-icon-edit"></i>
    <span><?php echo MyLang('edit_title'); ?></span>
</button>
<button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/navigation/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids">
    <i class="am-icon-trash-o"></i>
    <span><?php echo MyLang('delete_title'); ?></span>
</button>