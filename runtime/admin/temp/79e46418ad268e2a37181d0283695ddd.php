<?php /*a:1:{s:81:"/www/wwwroot/v4.shop.iun.cc/app/admin/view/default/warehouse/module/position.html";i:1699863362;}*/ ?>
<!--  经纬度 -->
<?php if(isset($module_data['lng']) and isset($module_data['lat']) and $module_data['lng'] != 0 and $module_data['lat'] != 0): ?>
    <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-icon-map-marker am-padding-xs am-fr submit-map-popup" data-lng="<?php echo htmlentities($module_data['lng']); ?>" data-lat="<?php echo htmlentities($module_data['lat']); ?>"> <?php echo MyLang('view_title'); ?></button>
    <?php if(!empty($module_data['lng'])): ?>
        <p><span><?php echo MyLang('lan_title'); ?>：</span><?php echo htmlentities($module_data['lng']); ?></p>
    <?php endif; if(!empty($module_data['lat'])): ?>
        <p><span><?php echo MyLang('lat_title'); ?>：</span><?php echo htmlentities($module_data['lat']); ?></p>
    <?php endif; ?>
<?php endif; ?>