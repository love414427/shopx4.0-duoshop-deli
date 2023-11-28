<?php /*a:1:{s:75:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/slide/module/images.html";i:1699863362;}*/ ?>
<!-- 图片信息 -->
<?php if(!empty($module_data)): ?>
    <div <?php if(!empty($module_data['bg_color'])): ?>style="background-color:<?php echo htmlentities($module_data['bg_color']); ?>;"<?php endif; ?>>
        <?php if(!empty($module_data['images_url'])): ?>
            <figure data-am-widget="figure" class="am-figure am-inline-block" data-am-figure="{pureview: 'true'}">
                <img src="<?php echo htmlentities($module_data['images_url']); ?>" class="am-radius am-block" width="100" height="60" />
            </figure>
        <?php endif; ?>
    </div>
<?php endif; ?>