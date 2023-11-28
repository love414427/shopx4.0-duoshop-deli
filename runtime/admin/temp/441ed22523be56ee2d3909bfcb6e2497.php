<?php /*a:1:{s:78:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/payment/module/operate.html";i:1699863362;}*/ ?>
<!-- 操作栏 -->
<?php if($module_data['is_install'] == 0): ?>
    <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/payment/install'); ?>" data-id="<?php echo htmlentities($module_data['payment']); ?>" data-view="reload" data-msg="<?php echo MyLang('install_confirm_tips'); ?>">
        <i class="am-icon-cubes"></i>
        <span><?php echo MyLang('install_title'); ?></span>
    </button>

    <?php if(!in_array($module_data['payment'], $cannot_deleted_list)): ?>
        <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/payment/delete'); ?>" data-id="<?php echo htmlentities($module_data['payment']); ?>">
            <i class="am-icon-trash-o"></i>
            <span><?php echo MyLang('delete_title'); ?></span>
        </button>
    <?php endif; else: ?>
    <a class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block" href="<?php echo MyUrl('admin/payment/saveinfo', array('id'=>$module_data['id'])); ?>">
        <i class="am-icon-edit"></i>
        <span><?php echo MyLang('edit_title'); ?></span>
    </a>

    <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/payment/uninstall'); ?>" data-id="<?php echo htmlentities($module_data['payment']); ?>" data-view="reload" data-msg="<?php echo MyLang('uninstall_confirm_tips'); ?>">
        <i class="am-icon-remove"></i>
        <span><?php echo MyLang('uninstall_title'); ?></span>
    </button>
<?php endif; if(!empty($upgrade_info) and isset($upgrade_info[$module_data['payment']]) and isset($upgrade_info[$module_data['payment']]['version_new']) and version_compare($upgrade_info[$module_data['payment']]['version_new'], $module_data['version'], '>')): ?>
    <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block package-upgrade-event" data-type="payment" data-name="<?php echo htmlentities($module_data['name']); ?>" data-value="<?php echo htmlentities($module_data['payment']); ?>" data-json="<?php echo urlencode(json_encode($upgrade_info[$module_data['payment']])); ?>">
        <i class="am-icon-refresh"></i>
        <span><?php echo MyLang('update_title'); ?></span>
    </button>
<?php endif; ?>