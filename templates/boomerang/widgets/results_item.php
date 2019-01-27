<?php
$col_sm = '6';
if(isset($columns) && $columns == 3)
{
    $col_sm = '4';
}
//print_r($item)."<br/>";
?>

<div class="col-md-<?php echo $col_sm;?>">
    <div class="wp-block property grid">
        <!--<div class="wp-block-title">
            <h3><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['address']); ?></a></h3>
        </div>-->
        <div class="wp-block-body wp-block-property">
            <div class="wp-block-img">
                <img src="<?php echo _simg($item['thumbnail_url'], '380x200'); ?>" alt="<?php echo _ch($item['option_10']); ?>" class="hidden-xs">
                <img src="<?php echo _simg($item['thumbnail_url'], '380x300'); ?>" alt="<?php echo _ch($item['option_10']); ?>" class="visible-xs">
                <a href="<?php echo $item['url']; ?>"></a>
                <?php if(!empty($item['option_38'])):?>
                <div class="badget"><img src="<?php echo _ch($item['badget']); ?>" alt="<?php echo _ch($item['option_38']); ?>"/></div>
                <?php endif; ?>
                
                <?php if(!empty($item['option_4'])):?>
                <div class="purpose-badget noUi-background fea_<?php echo _ch($item['is_featured']); ?>"><?php echo _ch($item['option_4']); ?></div>
                <?php endif; ?>
                
                <?php if(!empty($item['option_54'])):?>
                <!--<div class="ownership-badget noUi-background fea_<?php echo _ch($item['is_featured']); ?>"><?php echo _ch($item['option_54']); ?></div>-->
                <?php endif;?>
                
                <?php if(($item['is_featured'])):?>
                <img class="featured-icon" alt="Featured" src="assets/img/featured-icon.png" />
                <?php endif;?>
            </div>
            <div class="wp-block-content clearfix">
            	<h2 class="content-title"><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['option_10']); ?></a></h2>
            	<span class="published-date"><?php $date1 = $item['date']; 
							//echo $date1;
							$date = new DateTime($date1);
							echo $date->format('Y-m-d');				
							?></span> &nbsp; | &nbsp;
                            <span class="ads-id">Ad ID: <strong><?php echo $item['id']; ?></strong></span> &nbsp; | &nbsp; <?php if(!empty($item['option_86'])):?>
                            <span class="conditions"><strong></strong> <?php echo _ch($item['option_86']); ?></span>
                            
                            <?php endif;?>
                            <!--<span class="pull-right-list"><strong>Seller: </strong> <a href="#">Sudeep Shrestha</a></span>-->
                
                <h3 class="h5"><i class="fa fa-map-marker"></i> <a href="<?php echo $item['url']; ?>"><?php echo _ch($item['address']); ?></a></h3>
                <p class="description"><?php echo _ch($item['option_chlimit_8']); ?></p>
                
                <span class="pull-left">
                    <span class="price">
                    <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
                    <?php 
                        if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                        if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37
                    ?>
                    <?php else: ?>
                    -
                    <?php endif; ?>
                    </span> 
                </span>
                <span class="pull-right">
                	<span class="counter-views">Total views: <?php echo $item['counter_views']; ?></span>
                    <!--<span class="capacity">
                        <?php if (!empty($item['option_20'])):?>
                            <?php for ($i=0; $i<(int)$item['option_20']; $i++): ?>
                                <i class="fa fa-user"></i>
                            <?php endfor;?>
                        <?php endif;?>
                    </span>-->
                </span>
            </div>
        </div>
        <div class="wp-block-footer">
            <ul class="aux-info row-fluid">
                <?php
                    $custom_elements = _get_custom_items();
                    $i=0;
                    if(count($custom_elements) > 0):
                    foreach($custom_elements as $key=>$elem):

                    if(!empty($item['option_'.$elem->f_id]) && $i++<3)
                    if($elem->type == 'DROPDOWN' || $elem->type == 'INPUTBOX'):
                     ?>
                <li class="col-md-4 text-center1"><i class="fa <?php _che($elem->f_class); ?>"></i><small><?php echo _ch($item['option_'.$elem->f_id], '-'); ?> <?php echo _ch(${"options_suffix_$elem->f_id"}, ''); ?> <span style="<?php _che($elem->f_style); ?>"><?php echo _ch(${"options_name_$elem->f_id"}, '-'); ?></span></small></li>
                     <?php 
                    elseif($elem->type == 'CHECKBOX'):
                     ?>
                <li class="col-md-4 text-center"><i class="fa <?php _che($elem->f_class); ?>"></i><small> <strong class="<?php echo (!empty($item['option_'.$elem->f_id])) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></strong> <?php echo _ch(${"options_name_$elem->f_id"}, '-'); ?></small></li>
                     <?php 
                    endif;                    
                    endforeach;  
                    else:
                ?>
                <li class="col-md-4 text-center"><i class="fa fa-building"></i><small><?php echo _ch($item['option_57'], '-'); ?> <?php echo _ch($options_suffix_57, '-'); ?></small></li>
                <li class="col-md-4 text-center"><i class="fa fa-tint"></i> <small><?php echo _ch($item['option_19'], '-'); ?> <?php echo _ch($options_name_19, '-'); ?></small></li>
                <li class="col-md-4 text-center"><i class="fa fa-car"></i> <small> <strong class="<?php echo (!empty($item['option_32'])) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></strong> <?php echo _ch($options_name_32, '-'); ?></small></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
