<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?>
</head>
<body class="body-wrap <?php _widget('custom_paletteclass'); ?>">

<?php _widget('slidebar'); ?>
<!-- MAIN WRAPPER -->
<div class="">
    <?php _widget('custom_palette');?>
    
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
        <?php _widget('header_mainmenu');?>
    </header>   
    </div>

    <?php _widget('top_slogan');?>
    <!-- MAIN CONTENT -->
     <section class="slice bg-white bb">
        <div class="wp-section">
            <div id="content-block" class="container">
                <div class="row">
                    <?php if(file_exists(APPPATH.'controllers/admin/expert.php')):?>
                    <div class="col-md-9">
                    <?php else:?>
                    <div class="col-md-12">  
                    <?php endif;?>
                        <div class="wp-block pg-opt">
                            <h2 class="title" id="expert">{page_title}</h2>
                        </div>
                        <div class="wp-block pg-opt box-content">
                            {page_body}
                            <?php _widget('center_imagegallery');?>
                            {has_page_documents}
                            <h2>{lang_Filerepository}</h2>
                            <ul>
                            {page_documents}
                            <li>
                                <a href="{url}">{filename}</a>
                            </li>
                            {/page_documents}
                            </ul>
                            {/has_page_documents}
                        </div>
                        <?php if(file_exists(APPPATH.'controllers/admin/expert.php')):?>
                        <div class="panel-group property_content_position" id="accordionThree">
                            <?php foreach($expert_module_all as $key=>$row):?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3<?php echo $key;?>">
                                        <?php echo $row->question; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3<?php echo $key;?>" class="panel-collapse collapse <?php echo ($key==0) ? 'in' : '' ;?>">
                                    <div class="panel-body">
                                        <?php echo $row->answer; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif;?>
                    </div>
                    <?php if(file_exists(APPPATH.'controllers/admin/expert.php')):?>
                    <div class="col-md-3">
                         <div class="sidebar">
                                <!-- Search blog -->
                            <div class="section-title-wr">
                                   <h3 class="section-title left"><span><?php _l('Search');?></span></h3>
                            </div>
                                <div class="widget">
                                <form class="form-light">
                                    <div class="input-group">
                                        <input type="text" id="search_expert" class="form-control" placeholder="<?php _l('Search');?>">
                                        <span class="input-group-btn">
                                            <button id="btn-search_expert" class="btn btn-base" type="button"><?php _l('Go');?></button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                            <!-- Categories -->
                            <div class="section-title-wr">
                                   <h3 class="section-title left"><span><?php _l('Categories');?></span></h3>
                            </div>
                            <div class="widget">
                                <ul class="categories highlight">
                                    <?php foreach($categories_expert as $id=>$category_name):?>
                                    <?php if($id != 0): ?>
                                        <li><a href="{page_current_url}?cat=<?php echo $id; ?>#expert"><?php echo $category_name; ?></a></li>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            
                            <div class="panel panel-default panel-sidebar-1"  id="form">
                                <div class="panel-heading"><h2>{lang_AskExpert}</h2></div>
                                <form method="post" class="property-form" action="{page_current_url}#form">
                                    <div class="panel-body">
                                          {validation_errors} {form_sent_message}
                                    <!-- The form name must be set so the tags identify it -->
                                    <input type="hidden" name="form" value="contact" />
                                    
                                    <div class="form-group {form_error_firstname}">
                                        <input class="form-control" id="firstname" name="firstname" type="text" placeholder="{lang_FirstLast}" value="{form_value_firstname}" />
                                    </div>
                                    <div class="form-group {form_error_email}">
                                        <input class="form-control" id="email" name="email" type="text" placeholder="{lang_Email}" value="{form_value_email}" />
                                    </div>
                                    <div class="form-group {form_error_phone}">
                                        <input class="form-control" id="phone" name="phone" type="text" placeholder="{lang_Phone}" value="{form_value_phone}" />
                                    </div>
                                    
                                    <?php if(config_item( 'captcha_disabled')===FALSE): ?>
                                    <div class="form-group {form_error_captcha}">
                                        <div class="row">
                                            <div class="col-lg-6" style="padding-top:1px;">
                                                <?php echo $captcha[ 'image']; ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="captcha form-control {form_error_captcha}" name="captcha" type="text" placeholder="{lang_Captcha}" value="" />
                                                <input class="hidden" name="captcha_hash" type="text" value="<?php echo $captcha_hash; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(config_item('recaptcha_site_key') !== FALSE): ?>
                                    <div class="control-group" >
                                        <label class="control-label captcha"></label>
                                        <div class="controls">
                                            <?php _recaptcha(true); ?>
                                       </div>
                                    </div>
                                   <?php endif; ?>
                                    <div class="form-group {form_error_question}">
                                        <textarea id="question" name="question" rows="1" class="form-control" type="text" placeholder="{lang_Question}">{form_value_question}</textarea>
                                    </div>
                                    </div> 
                                    <button  class="btn btn-lg btn-block-bm btn-alt btn-icon btn-icon-right btn-envelope" type="submit">
                                        <span>{lang_Send}</span>
                                    </button>
                                </form>
                            </div>
                        </div>  
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
</div>

<?php _widget('custom_javascript');?>
<script>
    $(document).ready(function(){
        $("#btn-search_expert").click( function() {
            if($('#search_expert').val().length > 2 || $('#search_expert').val().length == 0)
            {
                $.post('<?php echo $ajax_expert_load_url; ?>', {search: $('#search_expert').val()}, function(data){
                    $('.property_content_position').html(data.print);
                    
                    reloadElements();
                }, "json");
            }
        });

    });    
</script>
</body>
</html>