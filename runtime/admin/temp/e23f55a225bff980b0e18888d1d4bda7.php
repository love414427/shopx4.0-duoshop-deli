<?php /*a:1:{s:74:"/www/wwwroot/deli.shop.cn/app/admin/view/default/goods/module/operate.html";i:1699863362;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/goods/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span><?php echo MyLang('detail_title'); ?></span>
</button>
<a class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block" href="<?php echo MyUrl('admin/goods/saveinfo', array_merge($params, ['id'=>$module_data['id']])); ?>">
    <i class="am-icon-edit"></i>
    <span><?php echo MyLang('edit_title'); ?></span>
</a>
<a class="am-btn am-btn-success am-btn-xs am-radius am-btn-block" href="<?php echo MyUrl('admin/goods/saveinfo', array_merge($params, ['id'=>$module_data['id'], 'is_copy'=>1])); ?>">
    <i class="am-icon-copy"></i>
    <span><?php echo MyLang('copy_title'); ?></span>
</a>
<div class="am-dropdown am-dropdown-up am-btn am-btn-danger am-btn-xs am-radius am-btn-block" data-am-dropdown>
    <div class="am-dropdown-toggle">
        <i class="am-icon-trash-o"></i>
        <span><?php echo MyLang('delete_title'); ?></span>
    </div>
    <div class="am-dropdown-content am-radius">
        <a href="javascript:;" class="am-badge am-badge-warning am-radius submit-delete" data-url="<?php echo MyUrl('admin/goods/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids"><?php echo MyLang('goods.delete_only_goods_text'); ?></a>
        <a href="javascript:;" class="am-badge am-badge-danger am-radius am-margin-left-sm submit-delete" data-url="<?php echo MyUrl('admin/goods/delete', ['is_del_images'=>1]); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids"><?php echo MyLang('goods.delete_goods_and_images_text'); ?></a>
    </div>
</div>