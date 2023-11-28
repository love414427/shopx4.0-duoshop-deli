<?php /*a:1:{s:78:"/www/wwwroot/v4.shop.iun.cc/app/index/view/default/module/goods/grid/base.html";i:1699863362;}*/ ?>
<!-- 九宫格 -->
<?php if(!empty($module_data['goods_list']) and is_array($module_data['goods_list'])): ?>
    <div class="module-goods-container module-goods-grid-container module-goods-grid-base">
        <!-- 基础导航 -->
        <?php if(!empty($module_data['base_nav'])): ?>
            <div class="am-container">
                <div class="base-nav am-nbfc">
                    <?php if(!empty($module_data['base_nav']['title'])): ?>
                        <p class="base-nav-title am-title-left-border"><?php echo htmlentities($module_data['base_nav']['title']); ?></p>
                    <?php endif; if(!empty($module_data['base_nav']['vice_title'])): ?>
                        <p class="base-nav-desc"><?php echo htmlentities($module_data['base_nav']['vice_title']); ?></p>
                    <?php endif; if(!empty($module_data['base_nav']['keywords_arr'])): ?>
                        <div class="base-nav-keywords">
                            <?php foreach($module_data['base_nav']['keywords_arr'] as $kdv): ?>
                                <a href="<?php echo MyUrl('index/search/index', ['wd'=>StrToAscii($kdv)]); ?>" target="_blank"><?php echo htmlentities($kdv); ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; if(!empty($module_data['base_nav']['url'])): ?>
                        <span class="base-nav-more">
                            <a href="<?php echo htmlentities($module_data['base_nav']['url']); ?>" target="_blank"><?php echo MyLang('more_title'); ?> <i class="am-icon-angle-right"></i></a>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- 列表 -->
        <ul class="
            am-avg-sm-<?php if(empty($module_data['sm'])): ?>2<?php else: ?><?php echo htmlentities($module_data['sm']); ?><?php endif; ?> 
            am-avg-md-<?php if(empty($module_data['md'])): ?>3<?php else: ?><?php echo htmlentities($module_data['md']); ?><?php endif; ?> 
            am-avg-lg-<?php if(empty($module_data['lg'])): ?>5<?php else: ?><?php echo htmlentities($module_data['lg']); ?><?php endif; ?> ">
            <?php foreach($module_data['goods_list'] as $v): ?>
                <li>
                    <div class="item am-padding-bottom-xs am-radius am-shadow <?php if(isset($module_data['value_type']) and $module_data['value_type'] == 1): ?>item-type-btn<?php endif; ?>">
                        <!-- 商品信息顶部钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_module_goods_inside_top</span>
                            </div>
                        <?php endif; 
                            $hook_name = 'plugins_view_module_goods_inside_top';
                            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'goods_id'=>$v['id'], 'goods'=>$v, 'module'=>'grid-base', 'type'=>empty($module_data['type']) ? '' : $module_data['type']]);
                            if(!empty($hook_data) && is_array($hook_data))
                            {
                                foreach($hook_data as $hook)
                                {
                                    if(is_string($hook) || is_int($hook))
                                    {
                                        echo htmlspecialchars_decode($hook);
                                    }
                                }
                            }
                         ?>
                        <a href="<?php echo htmlentities($v['goods_url']); ?>" target="_blank" class="am-block goods-info">
                            <img src="<?php echo htmlentities($v['images']); ?>" alt="<?php echo htmlentities($v['title']); ?>" class="goods-images am-radius am-images-scale" />
                        </a>

                        <!-- 商品信息售价顶部钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_module_goods_inside_price_top</span>
                            </div>
                        <?php endif; 
                            $hook_name = 'plugins_view_module_goods_inside_price_top';
                            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'goods_id'=>$v['id'], 'goods'=>$v, 'module'=>'grid-base', 'type'=>empty($module_data['type']) ? '' : $module_data['type']]);
                            if(!empty($hook_data) && is_array($hook_data))
                            {
                                foreach($hook_data as $hook)
                                {
                                    if(is_string($hook) || is_int($hook))
                                    {
                                        echo htmlspecialchars_decode($hook);
                                    }
                                }
                            }
                         if(isset($module_data['value_type']) and $module_data['value_type'] == 1): ?>
                            <div class="type-btn">
                                <p class="am-text-truncate-2 goods-title am-padding-horizontal-sm">
                                    <a href="<?php echo htmlentities($v['goods_url']); ?>" target="_blank"><?php echo htmlentities($v['title']); ?></a>
                                </p>
                                <div class="item-bottom am-flex am-flex-justify-between am-gap-1 am-flex-items-end am-padding-sm">
                                    <div class="price-content">
                                        <?php if(isset($module_data['original_price_key'])): if((!isset($module_data['is_show_original_price']) or (isset($module_data['is_show_original_price']) and $module_data['is_show_original_price'] == 1)) and isset($v[$module_data['original_price_key']]) and $v[$module_data['original_price_key']] > 0): ?>
                                                <p class="original-price am-text-truncate"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($v[$module_data['original_price_key']]); ?></p>
                                            <?php endif; else: if((!isset($module_data['is_show_original_price']) or (isset($module_data['is_show_original_price']) and $module_data['is_show_original_price'] == 1)) and isset($v['min_original_price']) and $v['min_original_price'] > 0): ?>
                                                <p class="original-price am-text-truncate"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($v['min_original_price']); ?></p>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <p class="am-text-truncate price am-text-truncate am-font-weight am-text-lg am-text-left">
                                            <?php if(!isset($module_data['is_currency_symbol']) or $module_data['is_currency_symbol'] == 1): ?>
                                                <?php echo htmlentities($currency_symbol); ?>
                                            <?php endif; if(isset($module_data['price_key'])): if(isset($v[$module_data['price_key']])): ?>
                                                    <?php echo htmlentities($v[$module_data['price_key']]); ?>
                                                <?php endif; else: ?>
                                                <?php echo htmlentities($v['min_price']); ?>
                                            <?php endif; if(isset($module_data['price_unit'])): ?>
                                                <?php echo htmlentities($module_data['price_unit']); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <a class="am-btn <?php if(isset($module_data['is_disabled']) and $module_data['is_disabled'] == 1): ?>am-btn-default<?php else: ?>am-btn-primary<?php endif; ?> am-radius buy-btn" href="<?php echo htmlentities($v['goods_url']); ?>" target="_blank" <?php if(isset($module_data['is_disabled']) and $module_data['is_disabled'] == 1): ?>disabled<?php endif; ?>>
                                        <?php if(isset($module_data['button_text'])): ?>
                                            <?php echo htmlentities($module_data['button_text']); else: ?>
                                            购买
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="price-content">
                                <p class="price am-text-truncate">
                                    <strong><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($v['min_price']); ?></strong>
                                    <?php if((!isset($module_data['is_show_original_price']) or (isset($module_data['is_show_original_price']) and $module_data['is_show_original_price'] == 1)) and isset($v['min_original_price']) and $v['min_original_price'] > 0): ?>
                                        <span class="original-price am-text-truncate"><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($v['min_original_price']); ?></span>
                                    <?php endif; ?>
                                </p>
                                <p class="am-text-truncate-2-md goods-title">
                                    <a href="<?php echo htmlentities($v['goods_url']); ?>" target="_blank"><?php echo htmlentities($v['title']); ?></a>
                                </p>
                            </div>
                        <?php endif; ?>

                        <!-- 商品信息底部钩子 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_view_module_goods_inside_bottom</span>
                            </div>
                        <?php endif; 
                            $hook_name = 'plugins_view_module_goods_inside_bottom';
                            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'goods_id'=>$v['id'], 'goods'=>$v, 'module'=>'grid-base', 'type'=>empty($module_data['type']) ? '' : $module_data['type']]);
                            if(!empty($hook_data) && is_array($hook_data))
                            {
                                foreach($hook_data as $hook)
                                {
                                    if(is_string($hook) || is_int($hook))
                                    {
                                        echo htmlspecialchars_decode($hook);
                                    }
                                }
                            }
                         ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>