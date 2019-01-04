<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<title>{page_title}</title>
<meta name="description" content="{page_description}" />
<meta name="keywords" content="{page_keywords}" />

<meta name="author" content="" />
<link rel="shortcut icon" href="<?php echo $website_favicon_url;?>" type="image/png" />

<!-- Essential styles -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic%7CRoboto:400,500,700%7CRaleway:400,500,600" rel="stylesheet">
<?php cache_file('big_css.css', 'assets/fonts/font-awesome/css/font-awesome.min.css'); ?>
<?php //cache_file('big_css.css', 'assets/css/fonts.css'); ?>
<?php cache_file('big_css.css', 'assets/libraries/bootstrap/css/bootstrap.min.css'); ?>
<?php cache_file('big_css.css', 'assets/css/bootstrap-select.css'); ?>
<?php cache_file('big_css.css', 'assets/libraries/fancybox/jquery.fancybox.css?v=2.1.5'); ?>
<?php cache_file('big_css.css', 'assets/css/bootstrap-datetimepicker.min.css'); ?>
<?php cache_file('big_css.css', NULL); ?>
<!-- Boomerang styles -->

<?php
// Define selected CSS file
if(empty($settings_css_variant))
{
    $settings_css_variant = 'assets/css/styles.css';
}
else
{
    $pos = strrpos($settings_css_variant, "assets/css/styles");
    $settings_css_variant = substr($settings_css_variant, $pos);
}

if($this->session->userdata('violet'))
    echo '<link rel="stylesheet" type="text/css" href="assets/css/styles_'.$this->session->userdata('color').'.css" media="screen" id="wpStylesheet">';
else
    echo '<link rel="stylesheet" type="text/css" href="assets/css/styles_violet.css" media="screen" id="wpStylesheet">';


if(isset($settings_design_parameters) && strrpos($settings_design_parameters, 'dark-style') !== FALSE) {
    echo '<link rel="stylesheet" type="text/css" href="assets/css/template_dark.css" media="screen" id="template_style">';
} else
    echo '<link rel="stylesheet" type="text/css" href="" media="screen" id="template_style">';

?>
<?php cache_file('big_css2.css', 'assets/css/boomerang.css'); ?>
<?php cache_file('big_css2.css', 'assets/css/custom.css'); ?>

<!-- Assets -->
<?php cache_file('big_css2.css', 'assets/libraries/owl-carousel/owl.carousel.css'); ?>
<?php cache_file('big_css2.css', 'assets/libraries/owl-carousel/owl.theme.css'); ?>
<?php cache_file('big_css2.css', 'assets/libraries/sky-forms/css/sky-forms.css'); ?>  
<!--[if lt IE 9]>
    <link rel="stylesheet" href="assets/boomerang/assets/sky-forms/css/sky-forms-ie8.css">
<![endif]-->

<?php cache_file('big_css2.css', 'assets/css/blueimp-gallery.min.css'); ?>

<?php load_map_api(config_db_item('map_version'));?>

<!-- Required JS -->
<?php cache_file('big_js.js', 'assets/js/jquery.js'); ?>

<?php if(config_db_item('map_version') !='open_street'):?>
<?php cache_file('big_js.js', 'assets/js/gmap3/gmap3.min.js'); ?>
<?php endif;?>
<!-- fileupload -->
<?php cache_file('big_css2.css', 'assets/css/jquery.fileupload-ui.css'); ?>
<?php cache_file('big_css2.css', 'assets/css/jquery.fileupload-ui-noscript.css'); ?> 

<?php cache_file('big_js.js', 'assets/js/jquery.flexslider.js'); ?>
<?php cache_file('big_js.js', 'assets/js/load-image.js'); ?>
<?php cache_file('big_js.js', 'assets/js/jquery-ui-1.10.3.custom.min.js'); ?>
<?php cache_file('big_js.js', 'assets/js/fileupload/jquery.iframe-transport.js'); ?>
<?php cache_file('big_js.js', 'assets/js/fileupload/jquery.fileupload.js'); ?>
<?php cache_file('big_js.js', 'assets/js/fileupload/jquery.fileupload-fp.js'); ?>
<?php cache_file('big_js.js', 'assets/js/fileupload/jquery.fileupload-ui.js'); ?>

<!-- end fileupload -->
<!-- cleditor -->
<?php cache_file('big_css2.css', 'assets/css/jquery.cleditor.css'); ?>
<?php cache_file('big_js.js', 'assets/js/jquery.cleditor.min.js'); ?>
<!-- END cleditor -->

<!-- jquery.cookiebar -->
<!-- url  http://www.primebox.co.uk/projects/jquery-cookiebar/ -->
<?php cache_file('big_js.js', 'assets/js/jquery.cookiebar.js'); ?>
<?php cache_file('big_css2.css', 'assets/css/jquery.cookiebar.css'); ?>
<!--end jquery.cookiebar -->
 
<!-- magnific-popup -->
<!-- url  https://plugins.jquery.com/magnific-popup/ -->
<?php if(config_item('report_property_enabled') == TRUE): ?>
<?php cache_file('big_js.js', 'assets/libraries/magnific-popup/jquery.magnific-popup.js'); ?>
<?php cache_file('big_css2.css', 'assets/libraries/magnific-popup/magnific-popup.css'); ?>
<?php endif;?>
<!--end magnific-popup -->


<?php cache_file('big_css2.css', NULL); ?>
<?php cache_file('big_js.js', NULL); ?>

{is_rtl}
<link href="assets/css/styles_rtl.css" rel="stylesheet">
{/is_rtl}

{settings_tracking}