<?php
    $col=6;
    $f_id = $field->id;
    $placeholder = _ch(${'options_name_'.$f_id});
    $direction = $field->direction;
    if($direction == 'NONE'){
        $col=12;
        $direction = '';
    }
    else
    {
        $placeholder = lang_check($direction);
        $direction=strtolower('_'.$direction);
    }
    
    $suf_pre = _ch(${'options_prefix_'.$f_id}, '')._ch(${'options_suffix_'.$f_id}, '');
    if(!empty($suf_pre))
        $suf_pre = ' ('.$suf_pre.')';
        
    $class_add = $field->class;
    if(empty($class_add))
        $class_add = ' col-sm-'.$col;
    
?>
<div class="col-sm-12 col-location <?php echo $class_add; ?>">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group form-group-lg field_select">
                <input id="search_option_smart" type="text" class="form-control noavtoWidth"   value="{search_query}" placeholder="{lang_CityorCounty}" autocomplete="off" />
            </div>
        </div>
        <!--<div class="col-md-6">
            <div class="form-group form-group-lg field_select">
                <select id="search_radius" name="search_radius"  class="form-control select_styled base no-padding">
                    <option value="0">0 km</option>
                    <option value="50">50 km</option>
                    <option value="100">100 km</option>
                    <option value="200">200 km</option>
                </select>
            </div>
        </div>-->
    </div>
</div>