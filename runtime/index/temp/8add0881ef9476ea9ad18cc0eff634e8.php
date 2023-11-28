<?php /*a:2:{s:74:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/category/data_list.html";i:1699863362;s:71:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/public/not_data.html";i:1699863362;}*/ ?>
<?php if(!empty($data) and is_array($data)): ?>
    <?php echo ModuleInclude('module/goods/list/base', [
        'goods_list'  => $data,
        'type'        => 'category',
    ]); else: ?>
        <div class="table-no am-radius">
    <img src="<?php if(!empty($module_data) and !empty($module_data['icon'])): ?><?php echo htmlentities($module_data['icon']); else: ?><?php echo htmlentities($attachment_host); ?>/static/common/images/no-data.png<?php endif; ?>" />
    <p class="am-margin-top-sm"><?php if(!empty($module_data) and !empty($module_data['msg'])): ?><?php echo htmlentities($module_data['msg']); else: ?><?php echo MyLang('no_data'); ?><?php endif; ?></p>
</div>
<?php endif; ?>