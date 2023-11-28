<?php /*a:1:{s:79:"/www/wwwroot/deli.shop.cn/app/admin/view/default/lib/module/goods_category.html";i:1699863362;}*/ ?>
<!-- 商品分类 -->
<?php if(!empty($module_data['data']) && !empty($module_data['form_name_key'])): ?>
    <select class="am-radius chosen-select" multiple name="<?php echo htmlentities($module_data['form_name_key']); ?>" data-placeholder="<?php echo MyLang('form_goods_category_placeholder'); ?>">
        <?php foreach($module_data['data'] as $v): ?>
            <option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($module_data['params']) and !empty($module_data['params'][$module_data['form_name_key']]) and is_array($module_data['params'][$module_data['form_name_key']]) and in_array($v['id'], $module_data['params'][$module_data['form_name_key']])): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
            <?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
                    <option style="padding-left: 15px;" value="<?php echo htmlentities($vs['id']); ?>" <?php if(!empty($module_data['params']) and !empty($module_data['params'][$module_data['form_name_key']]) and is_array($module_data['params'][$module_data['form_name_key']]) and in_array($vs['id'], $module_data['params'][$module_data['form_name_key']])): ?>selected<?php endif; ?>><?php if(empty($vs['items'])): ?>├<?php else: ?>└<?php endif; ?>² <?php echo htmlentities($vs['name']); ?></option>
                    <?php if(!empty($vs['items'])): foreach($vs['items'] as $kss=>$vss): ?>
                            <option style="padding-left: 30px;" value="<?php echo htmlentities($vss['id']); ?>" <?php if(!empty($module_data['params']) and !empty($module_data['params'][$module_data['form_name_key']]) and is_array($module_data['params'][$module_data['form_name_key']]) and in_array($vss['id'], $module_data['params'][$module_data['form_name_key']])): ?>selected<?php endif; ?>><?php if($kss == count($vs['items'])-1): ?>└<?php else: ?>├<?php endif; ?>³ <?php echo htmlentities($vss['name']); ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
<?php endif; ?>