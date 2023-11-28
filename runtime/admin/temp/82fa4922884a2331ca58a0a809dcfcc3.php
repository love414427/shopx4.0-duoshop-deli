<?php /*a:1:{s:71:"/www/wwwroot/deli.shop.cn/app/admin/view/default/goods/module/info.html";i:1699863362;}*/ ?>
<!-- 商品基础信息 -->
<?php if(!empty($module_data)): ?>
    <div class="am-nbfc">
        <?php if(!empty($module_data['images'])): ?>
            <a href="<?php echo htmlentities($module_data['goods_url']); ?>" target="_blank">
                <img src="<?php echo htmlentities($module_data['images']); ?>" class="am-img-thumbnail am-radius am-margin-right-sm am-fl" width="35" height="35" />
            </a>
        <?php endif; ?>
        <a href="<?php echo htmlentities($module_data['goods_url']); ?>" target="_blank" <?php if(!empty($module_data['title_color'])): ?> style="color:<?php echo htmlentities($module_data['title_color']); ?>;" <?php endif; ?> class="am-nowrap-initial"><?php echo htmlentities($module_data['title']); ?></a>
        <?php if(!empty($module_data['simple_desc'])): ?>
            <p class="am-text-danger am-nowrap-initial"><?php echo htmlentities($module_data['simple_desc']); ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>