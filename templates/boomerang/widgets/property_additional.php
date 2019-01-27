<div class="panel panel-default other-details">
                                                <?php
                                                /* check if some value defined in category */
                                                function is_defined_category ($array = NULL) {
                                                    if($array === NULL) return false;
                                                    $flag = false;
                                                    foreach ($array as $v) {
                                                        if(!empty($v['is_checkbox'])) {
                                                            $flag = true;
                                                            break;
                                                        } elseif(!empty($v['is_text'])) {
                                                            $flag = true;
                                                            break;
                                                        } elseif(!empty($v['is_tree'])) {
                                                            $flag = true;
                                                            break;
                                                        } elseif(!empty($v['is_pedigree'])) {
                                                            $flag = true;
                                                            break;
                                                        }
                                                    }
                                                    return $flag;
                                                }
                                                ?>
                                                
                                                <?php if(isset($category_options_111) && $category_options_count_111>0 && !empty($category_options_111) && is_defined_category($category_options_111)): ?>
                                                <div class="panel-heading"><h2 class="page-header2">{options_name_111}</h2></div>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_111}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_111}
                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>
                                                <?php if(isset($category_options_100) && $category_options_count_100>0 && !empty($category_options_100) && is_defined_category($category_options_100)): ?>
                                                <div class="panel-heading"><h2 class="page-header2">{options_name_100}</h2>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_100}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_100}
                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>
                                                <?php if(isset($category_options_105) && $category_options_count_105>0 && !empty($category_options_105) && is_defined_category($category_options_105)): ?>
                                                <div class="panel-heading"><h2 class="page-header2">{options_name_105}</h2>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_105}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_105}
                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>
                                                
                                                <?php if(false): ?>
                                                <div class="section-title-wr">
                                                    <h3 class="section-title left">Additional details</h3>
                                                </div>
                                                <table class="table table-bordered table-striped table-hover table-responsive">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Property Size:</strong> 2300 Sq Ft</td>
                                                            <td><strong>Lot size:</strong> 5000 Sq Ft</td>
                                                            <td><strong>Price:</strong> $23000</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Rooms:</strong> 5</td>
                                                            <td><strong>Bedrooms:</strong> 4</td>
                                                            <td><strong>Bathrooms:</strong> 2</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Garages:</strong> 2</td>
                                                            <td><strong>Roofing:</strong> New</td>
                                                            <td><strong>Structure Type:</strong> Bricks</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Year built:</strong> 1991</td>
                                                            <td><strong>Available from:</strong> 1 August 2014</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php endif;?>
                                                

                                                <?php if(isset($category_options_21) && $category_options_count_21>0): ?>
                                                <div class="panel-heading"><h2 class="page-header">{options_name_21}</h2></div>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_21}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_21}

                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>

                                                <?php if(isset($category_options_52) && $category_options_count_52>0): ?>
                                                <h3 class="page-header">{options_name_52}</h3>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_52}
                                                        {is_checkbox}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>&nbsp;&nbsp;{option_name}&nbsp;&nbsp;{icon}
                                                        </li>
                                                        {/is_checkbox}
                                                        {/category_options_52}
                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>

                                                <?php if(isset($category_options_43) && $category_options_count_43>0): ?>
                                                <h3 class="page-header">{options_name_43}</h3>
                                                <div class="property-amenities clearfix">
                                                    <ul>
                                                        {category_options_43}
                                                        {is_text}
                                                        <li class="col-xs-6 col-sm-3">
                                                        <i class="fa fa-check ok"></i>{icon} {option_name}:&nbsp;&nbsp;{option_prefix}{option_value}{option_suffix}
                                                        </li>
                                                        {/is_text}
                                                        {/category_options_43}

                                                    </ul>
                                                </div><!-- /.property-amenities -->
                                                <?php endif; ?>
                                                
                                                
                                                <?php
                                                /* Show new categories */
                                                
                                                $CI = &get_instance();
                                                $CI->load->model('option_m');
                                                $categories = $CI->option_m->get_by(array('type'=>'CATEGORY'));
                                                /* skip categories */
                                                $already_exists_categories = array(1,66,21,52,43,9,42);
                                                foreach ($categories as $key => $value):
                                                    if(in_array($value->id, $already_exists_categories)) continue;
                                                    $category_id = $value->id;
                                                    ?>
                                                    <?php if(isset(${"category_options_$category_id"}) && ${"category_options_count_$category_id"}>0): ?>
                                                    <div class="panel-heading"><h2 class="page-header"><?php echo ${"options_name_$category_id"} ?></h2></div>
                                                    <div class="property-amenities clearfix property-table">
                                                        <ul>
                                                            <?php foreach(${"category_options_$category_id"} as $key=>$row): ?>
                                                            <?php if(!empty($row['option_value'])): ?>
                                                                <?php if(count($row['is_text']) > 0): ?>
                                                                <li class="col-xs-6 col-sm-6">
                                                                    <span class="label-left"><?php _che($row['icon'], ''); ?> <?php _che($row['option_name']); ?>:&nbsp;&nbsp;<?php echo _che($row['option_prefix']); ?></span> <span class="value-right"><?php echo _che($row['option_value']); ?> <?php echo _che($row['option_suffix']); ?>
                                                                </span></li>
                                                                <?php elseif(count($row['is_checkbox']) > 0): ?>
                                                                <li class="col-xs-6 col-sm-6">
                                                                    <?php _che($row['option_name']); ?>&nbsp;&nbsp;<?php _che($row['icon'], ''); ?>
                                                                </li>
                                                                <?php elseif(count($row['is_dropdown']) > 0): ?>
                                                                <li class="col-xs-6 col-sm-6">
                                                                    <span class="label-left"><?php _che($row['icon'], ''); ?> <?php _che($row['option_name']); ?>:&nbsp;&nbsp;<?php echo _che($row['option_prefix']); ?></span> <span class="value-right"><?php echo _che($row['option_value']); ?> <?php echo _che($row['option_suffix']); ?></span>
                                                                </li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div><!-- /.property-amenities -->
                                                    <?php endif; ?>
                                                <?php endforeach; 
                                                /* END Show new categories */
                                                ?>
                                                </div>