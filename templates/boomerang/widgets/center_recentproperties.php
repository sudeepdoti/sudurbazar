<?php
/*
Widget-title: Results properties grid
Widget-preview-image: /assets/img/widgets_preview/center_recentproperties.jpg
 */
?>

<div class="results_conteiner">
<div class="section-title-wr pg-opt style-title">
    <h2 class="section-title left section-title-min paddingleftnone"><span><?php _l('Results'); ?> : <?php echo $total_rows; ?></span> <span class="customfilter">Ad Filter <i class="caret"></i></span></h2>
</div>
<!-- PAGINATION & FILTERS -->
<div class="wp-block default product-list-filters light-gray" style="padding:10px 15px">
    <div class="form-horizontal pull-left hidden-xs">
        <a style="" class="view-type active" ref="grid" href="#"><img src="assets/img/glyphicons/glyphicons_156_show_thumbnails.png" /></a>
        <a style="" class="view-type" ref="list" href="#"><img src="assets/img/glyphicons/glyphicons_157_show_thumbnails_with_lines.png" /></a>
    </div>
    <div class="filter sort-filter pull-right">
        <label><?php _l('OrderBy'); ?></label>
        <select class="selectpicker-small" style="margin-right:0;">
            <option value="id ASC" <?php _che($order_dateASC_selected); ?>><?php _l('DateASC'); ?></option>
            <option value="id DESC" <?php _che($order_dateDESC_selected); ?>><?php _l('DateDESC'); ?></option>
            <option value="price ASC" <?php _che($order_priceASC_selected); ?>><?php _l('PriceASC'); ?></option>
            <option value="price DESC" <?php _che($order_priceDESC_selected); ?>><?php _l('PriceDESC'); ?></option>
        </select>
    </div>
</div>

{has_no_results}
    <div class="result-answer">
        <div class="alert alert-success">
            {lang_Noestates}
        </div>
    </div>
{/has_no_results}

<!-- PROPERTY LISTING -->
<?php foreach($results as $key=>$item): ?>
<?php
    if($key==0)echo '<div class="row">';
?>
    <?php _generate_results_item(array('key'=>$key, 'item'=>$item)); ?>
<?php
    if( ($key+1)%2==0 )
    {
        echo '</div><div class="row">';
    }
    if( ($key+1)==count($results) ) echo '</div>';
    endforeach;
?>
<!-- PAGINATION & FILTERS -->
<div class="row-fluid clearfix text-center">
    <div class="pagination properties wp-block default product-list-filters light-gray">
       <?php echo $pagination_links; ?>
    </div>
</div>
</div>