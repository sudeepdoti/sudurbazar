
<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?>
</head>
<body class="body-wrap <?php _widget('custom_paletteclass'); ?>">

<?php _widget('slidebar'); ?>
<!-- MAIN WRAPPER -->
<div class="wrapper">
    <?php _widget('custom_palette');?>
    
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
        <div class="nav-container bg-blue">
        <?php _widget('header_mainmenu');?>
        </div>

    </header>   
    </div>

    <!-- MAIN CONTENT -->
    <?php //_widget('top_work');?>
    
        <?php _widget('top_slidersearchvisual_horizontal');?>
        
    <?php if (!$this->uri->segment(1)) : ?> 
     <section class="slice bg-white bb main-container">
        <div class="wp-section">
            <div id="content-block" class="container">
                <div class="row">
                	<div class="col-md-3">
                        <div class="sidebar">
                            <?php //_widget('right_customfilter');?>  
                            <?php _widget('right_categoriesmenu');?>  
                            <?php _widget('right_customfilter');?>
                            <?php //_widget('right_facebooklike');?>
                            <?php //_widget('right_adssmall');?>  
                            <?php //_widget('right_recentproperties');?>  
                            
                        </div>
                    </div>
                    <div class="col-md-9">
                    	
                    	<?php //_widget('center_recentproperties');?>  
                        <?php _widget('center_featuredproperties');?>
                        <?php //_widget('center_latestproperties');?>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php else : ?>
    <section class="slice bg-white bb">
        <div class="wp-section">
            <div id="content-block" class="container">
                <div class="row">
                	<div class="col-md-3">
                        <div class="sidebar">
                            
                            <?php _widget('right_categoriesmenu_active');?>  
                            <?php _widget('right_customfilter');?>  
                            <?php //_widget('right_facebooklike');?>
                            <?php //_widget('right_adssmall');?>  
                            <?php //_widget('right_recentproperties');?>  
                            
                        </div>
                    </div>
                    <div class="col-md-9">
                    	
                    	<?php _widget('center_recentproperties');?>  
                        <?php //_widget('center_featuredproperties');?>
                        <?php //_widget('center_latestproperties');?>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php //_widget('bottom_defaultcontent');?>
    <?php //_widget('bottom_parallax');?>
    
    <?php //_widget('bottom_agents2');?>
    <?php //_widget('bottom_clientsreviews');?>
    <?php //_widget('bottom_stats');?>
    <?php //_widget('bottom_partners');?>

    <!-- FOOTER -->
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
</div>

<?php _widget('custom_javascript');?>
<script>

    $('document').ready(function(){
        $('.treefield-item .tf-item-dist-other #more_category').on('click', function(){
            $(this).closest('.treefield-item').find('.tf-item-childs').slideToggle('fast');
            $('.treefield-item').not($(this).closest('.treefield-item')).find('.tf-item-childs').slideUp('fast')
        })
    })

</script>

<script>
	$('document').ready(function(){
		$(function() {
			//----- OPEN
			$('[data-popup-open]').on('click', function(e)  {
				var targeted_popup_class = jQuery(this).attr('data-popup-open');
				$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
		
				e.preventDefault();
			});
		
			//----- CLOSE
			$('[data-popup-close]').on('click', function(e)  {
				var targeted_popup_class = jQuery(this).attr('data-popup-close');
				$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		
				e.preventDefault();
			});
		});
    })
</script>
</body>
</html>