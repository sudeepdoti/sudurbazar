<?php
/*
Widget-title: Recentproperties
Widget-preview-image: /assets/img/widgets_preview/right_recentproperties.jpg
 */
?>
<!-- RECENTLY VIEWED -->

<div class="featured-container">
 <div class="wp-block pg-opt">
  <h2 class="title">
   <?php //_l('Lastaddedproperties'); ?>
   Latest Ads
  </h2>
 </div>
 <div class="panel-body-latest">
  <div class="featured featured-horizontal">
   <div class="row">
    <?php foreach($last_estates as $item): ?>
    <div class="col-sm-4 col-md-4 col-inline">
     <div class="wp-block property grid">
      <div class="wp-block-body wp-block-property">
       <div class="wp-block-img"> <img src="<?php echo _simg($item['thumbnail_url'], '380x250'); ?>" alt="<?php _che($item['alt']); ?>"> <a href="<?php echo $item['url']; ?>"></a> </div>
       <div class="wp-block-content clearfix">
        <h4 class="content-title"><?php echo _ch($item['option_10']); ?></h4>
        <div class="wp-block-title-inner">
         <h5><a href="<?php echo $item['url']; ?>"><?php echo _ch($item['option_116']); ?></a></h5>
        </div>
        <?php if(!empty($item['option_86'])):?>
        <div class="condition-product"><strong>Condition :</strong> <?php echo _ch($item['option_86']); ?></div>
        <?php endif;?>
        <!--<p class="description"><?php echo _ch($item['option_chlimit_8']); ?></p>-->
        <span class="pull-left"> <span class="price">
        <?php if(!empty($item['option_36']) || !empty($item['option_37'])): ?>
        <?php 
                        if(!empty($item['option_36']))echo $options_prefix_36.price_format($item['option_36'], $lang_id).$options_suffix_36;
                        if(!empty($item['option_37']))echo ' '.$options_prefix_37.price_format($item['option_37'], $lang_id).$options_suffix_37
                    ?>
        <?php else: ?>
        -
        <?php endif; ?>
        </span> </span> </div>
      </div>
     </div>
    </div>
    <?php endforeach;?>
   </div>
  </div>
 </div>
</div>
