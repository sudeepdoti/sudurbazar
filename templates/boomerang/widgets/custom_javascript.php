<?php 
/* function getColor template */
        if(!empty($settings_css_variant) && !preg_match('/styles.css$/', $settings_css_variant)){
           $_color= substr($settings_css_variant, strrpos($settings_css_variant, 'assets/css/styles_')+strlen('assets/css/styles_') );
           $_color= explode('.', $_color);
           $color= $_color[0].'/';
        }else {
           $color='';
        }
/* end function getColor template */
?>

<!-- Essentials -->
<?php cache_file('big_js_cus.js', 'assets/js/modernizr.custom.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/bootstrap/js/bootstrap.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/bootstrap-select.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/typeahead.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.mousewheel-3.0.6.pack.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.easing.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.metadata.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.hoverup.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.hoverdir.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.stellar.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.placeholder.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/blueimp-gallery.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/boomerang.js'); ?>

<!-- Boomerang mobile nav - Optional  -->
<?php cache_file('big_js_cus.js', 'assets/libraries/responsive-mobile-nav/js/jquery.dlmenu.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/responsive-mobile-nav/js/jquery.dlmenu.autofill.js'); ?>

<!-- Forms -->
<?php cache_file('big_js_cus.js', 'assets/libraries/ui-kit/js/jquery.powerful-placeholder.min.js'); ?> 
<?php cache_file('big_js_cus.js', 'assets/libraries/ui-kit/js/cusel.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.form.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.validate.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.maskedinput.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/sky-forms/js/jquery.modal.js'); ?>

<!-- Assets -->
<?php cache_file('big_js_cus.js', 'assets/libraries/hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/page-scroller/jquery.ui.totop.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/mixitup/jquery.mixitup.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/mixitup/jquery.mixitup.init.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/fancybox/jquery.fancybox.pack.js?v=2.1.5'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/waypoints/waypoints.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/milestone-counter/jquery.countTo.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/easy-pie-chart/js/jquery.easypiechart.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/social-buttons/js/rrssb.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/nouislider/js/jquery.nouislider.min.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/owl-carousel/owl.carousel.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/bootstrap/js/tooltip.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/libraries/bootstrap/js/popover.js'); ?>

<!-- Sripts for individual pages, depending on what plug-ins are used -->

<!-- Temp -- You can remove this once you started to work on your project -->
<?php cache_file('big_js_cus.js', 'assets/js/jquery.cookie.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/wp.switcher.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/wp.ga.js'); ?>

<?php cache_file('big_js_cus.js', 'assets/js/jquery.helpers.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.number.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/jquery.h5validate.js'); ?>
<?php cache_file('big_js_cus.js', 'assets/js/bootstrap-datetimepicker.min.js'); ?>

<!-- Boomerang App JS -->
<?php cache_file('big_js_cus.js', 'assets/js/wp.app.js'); ?>
<?php cache_file('big_js_cus.js', NULL, false); ?>
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
<![endif]-->



<!-- jquery.cookiebar -->
<!-- url  http://www.primebox.co.uk/projects/jquery-cookiebar/ -->
<?php if(config_item('cookie_warning_enabled') === TRUE): ?>
<script>
 $('document').ready(function(){
    $.cookieBar({
    //declineButton: true,
    message: "<p><?php _l('Accept cookiebar');?></p><br>",
    acceptText: "<?php _l('I Agree');?>",
    //declineText: "<?php _l('I dont agree');?>",
});
}) 

</script>
<?php endif;?>
<!--end jquery.cookiebar -->

<?php if(file_exists(APPPATH.'controllers/admin/reviews.php')): ?>
    <script src="assets/js/ratings/bootstrap-rating-input.js"></script> 
<?php endif; ?>


<script>
    
    $('document').ready(function(){
        if ( ! Modernizr.objectfit ) {
          $('.object-fit-container').each(function () {
            var $container = $(this),
                imgUrl = $container.find('img').prop('src');
            if (imgUrl) {
              $container
                .css('background-image', 'url("'+imgUrl+'")')
                .addClass('compat-object-fit');
            }  
          });
        }

    })
    
/*
 $(window).load(function(){
    if($('.resize-block .jumbotron-right').length>0){
        $('.resize-block  .jumbotron-left .carousel-inner,.resize-block .carousel-1.carousel-fixed-height .item').animate(
                                                                            {height:parseInt($('.resize-block  .jumbotron-right').outerHeight())}
                                                                            ,50);
    }
 })
 */
 /*
 * 
 * Resize arrow slider
 * 
 */
/*
$(window).load(function(){
        $(window).on('resize', function(){
               $('.resize-block  .jumbotron-left .carousel-inner,.resize-block .carousel-1.carousel-fixed-height .item').animate(
                                                                            {height:parseInt($('.resize-block  .jumbotron-right').outerHeight())}
                                                                            ,50);
        });
})
*/

/*
 * END Resize arrow slider
 */
</script>    
    
<script>



var timerMap;
var ad_galleries;
var firstSet = false;
var mapRefresh = true;
var loadOnTab = true;
var zoomOnMapSearch = 9;
var clusterConfig = null;
var markerOptions = null;
var mapDisableAutoPan = false;
var mapStyle = [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];
var rent_inc_id = '55';
var scrollWheelEnabled = false;
var myLocationEnabled = true;
var rectangleSearchEnabled = true;

var mapRefresh = true;
var map_main;
var styles;
var timerMap;
var firstSet = false;
var selectorResults = '.results_conteiner';
var markers = [];
var map = '';
<?php if(config_db_item('map_version') =='open_street'):?>
scrollWheelEnabled = true;
var clusters ='';
clusters = L.markerClusterGroup({spiderfyOnMaxZoom: true, showCoverageOnHover: false, zoomToBoundsOnClick: true});
<?php endif;?>
<?php if(config_db_item('map_version') !='open_street'):?>
var c_mapTypeId = "style1"; // google.maps.MapTypeId.ROADMAP;
var c_mapTypeIds = ["style1",
                    google.maps.MapTypeId.ROADMAP,
                    google.maps.MapTypeId.HYBRID];   
<?php endif;?>         
  // Cluster config start //
            clusterConfig = {
              radius: 60,
              // This style will be used for clusters with more than 2 markers
//              2: {
//                content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
//                width: 53,
//                height: 52
//              },
              // This style will be used for clusters with more than 5 markers
              5: {
                content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
                width: 53,
                height: 52
              },
              // This style will be used for clusters with more than 20 markers
              20: {
                content: "<div class='cluster cluster-2'>CLUSTER_COUNT</div>",
                width: 56,
                height: 55
              },
              // This style will be used for clusters with more than 50 markers
              50: {
                content: "<div class='cluster cluster-3'>CLUSTER_COUNT</div>",
                width: 66,
                height: 65
              },
              events: {
                click:function(cluster, event, object) {
                    try {
                        var same_address = true;
                        var adr = '';
                        $.each(object.data.markers, function(item) {
                            
                            if(adr == '')
                                adr = object.data.markers[item].adr;
                            
                            if(adr != object.data.markers[item].adr)
                                same_address = false;
                        });
                        
                        if(same_address)
                        {
                            cluster.main.map.panTo(object.data.latLng);
                            cluster.main.map.setZoom(19);
                        }
                        else
                        {
                            cluster.main.map.panTo(object.data.latLng);
                            cluster.main.map.setZoom(cluster.main.map.getZoom()+1);
                        }
                    }
                    catch(err) {
                        cluster.main.map.panTo(object.data.latLng);
                        cluster.main.map.setZoom(cluster.main.map.getZoom()+1);
                    }
                }
              }
            };
            // Cluster config end //
$(window).load(function() {
    /***********************************************************
     * ISOTOPE
     ***********************************************************/
   /* var isotope_works = $('.properties-items');
    isotope_works.isotope({
        'itemSelector': '.property-item'
    });

    $('.properties-filter a').click(function() {
        $(this).parent().parent().find('li').removeClass('selected');
        $(this).parent().addClass('selected');

        var selector = $(this).attr('data-filter');
        isotope_works.isotope({ filter: selector });
        return false;
    });*/
});

$(document).ready(function() {
	//'use strict';
    

  
    /***********************************************************
     * palette
     ***********************************************************/
    
    // LAYOUT COLOR/dark
    
    // Select option
    if($("#wpStylesheet").attr("href") == "assets/css/styles_dark.css"){
        $("#cmbLayoutColor").find('option[value="2"]').attr("selected",true)
    } else if ($("#wpStylesheet").attr("href") == "assets/css/styles.css"){
        $("#cmbLayoutColor").find('option[value="1"]').attr("selected",true)
    }
    
    $("#cmbLayoutColor").change(function(){
            if($("#cmbLayoutColor").val() == 2){
                $('body').addClass('dark-style');
                $("#template_style").attr("href", "assets/css/template_dark.css");
            }
            else{
                $('body').removeClass('dark-style');
                $("#template_style").attr("href", "");
            }
    });
    // end LAYOUT COLOR/dark

    // SCHEMES
    $("#cmdSchemeRed").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_red.css");
            return false;
    });
    $("#cmdSchemeViolet").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_violet.css");
            return false;
    });
    $("#cmdSchemeBlue").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_blue.css");
            return false;
    });
    $("#cmdSchemeGreen").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_green.css");
            return false;
    });
    $("#cmdSchemeYellow").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_yellow.css");
            return false;
    });
    $("#cmdSchemeOrange").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_orange.css");
            return false;
    });

    // SPECIAL SCHEMES
    $("#cmdSchemeBW").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_bw.css");
            return false;
    });
    $("#cmdSchemeDark").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_dark.css");
            return false;
    });
    $("#cmdSchemeFlat").click(function(){
            // Select option
            $("#cmdSchemeRed, #cmdSchemeViolet, #cmdSchemeBlue, #cmdSchemeGreen, #cmdSchemeYellow, #cmdSchemeOrange, #cmdSchemeBW, #cmdSchemeDark, #cmdSchemeFlat").removeClass("active");
            $(this).addClass("active");

            // Set option
            $("#wpStylesheet").attr("href", "assets/css/styles_flat.css");
            return false;
    });


//// SCHEMES SETOPTION
var scheme = $.cookie('scheme');

if($("#wpStylesheet").attr("href") == "assets/css/styles_red.css") {
	// Select option
	$("#cmdSchemeRed").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_red.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_violet.css") {
	// Select option
	$("#cmdSchemeViolet").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_violet.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_blue.css") {
	// Select option
	$("#cmdSchemeBlue").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_blue.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_green.css") {
	// Select option
	$("#cmdSchemeGreen").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_green.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_yellow.css") { 
	// Select option
	$("#cmdSchemeYellow").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_yellow.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_orange.css") {
	// Select option
	$("#cmdSchemeOrange").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_orange.css");
}

// SPECIAL SCHEMES
else if($("#wpStylesheet").attr("href") == "assets/css/styles_bw.css") {
	// Select option
	$("#cmdSchemeBW").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_bw.css");
}
else if(scheme == "dark") {
	// Select option
	$("#cmdSchemeDark").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_dark.css");
}
else if($("#wpStylesheet").attr("href") == "assets/css/styles_flat.css") {
	// Select option
	$("#cmdSchemeFlat").addClass("active");

	// Set option
	$("#wpStylesheet").attr("href", "assets/css/styles_flat.css");
}

$('#design-reset').click(function(){
    $('body').attr('class','body-wrap');
    $("#wpStylesheet").attr("href", "assets/css/styles.css");
    
})


    $('.color-switch:not(#cmbBodyBg) a').click(function (e) { 
      e.preventDefault();
      manualSearch(0,false,false,$(this).attr('color'));
      return false;
    });


    $('#design-reset').click(function (e) { 
      e.preventDefault();
      $('.color-switch a').removeClass('active');
      $('body').removeClass('dark-style');
      $("#template_style").attr("href", "");
      manualSearch(0,false,false, 'default');
      return false;
    });
    
    /***********************************************************
     * end palette
     ***********************************************************/
    
    
    
    
    
    
    /***********************************************************
     * blueimp gallery
     ***********************************************************/
    $('div.image-gallery a.post-picture-target').bind("click touchstart", function(event)
    {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        
        $('div.image-gallery a.post-picture-target').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;

            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex};
        
        blueimp.Gallery(myLinks, options);
        
        return false;
    });
    
    /***********************************************************
     * blueimp gallery2
     ***********************************************************/
    $('div.image-gallery-agents a.post-picture-target').bind("click touchstart", function(event)
    {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
        
        $(this).parent().find('a.post-picture-target').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;

            if(current == img_href)
                curIndex = i;
        });

        var options = {index: curIndex};
        
        blueimp.Gallery(myLinks, options);
        
        return false;
    });

    /***********************************************************
     * FLEXSLIDER
     ***********************************************************/
    /*$('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
    
    $('.flexslider-top').flexslider({
        animation: "slide"
    });
    */
    $(window).on('resize', function(){
        //$('#wrapper, #main-wrapper').css('display', 'block');
        //$('#wrapper, #main-wrapper').css('display', 'table');
    });
    
    //Typeahead
   /* $('#search_option_smart').typeahead({
        minLength: 1,
        source: function(query, process) {
            $.post('{typeahead_url}/smart', { q: query, limit: 8 }, function(data) {
                process(JSON.parse(data));
            });
        }
    });*/
    
    //main-wrapper

    /***********************************************************
     * CHAINED SELECT BOXES
     ***********************************************************/
    //$('#select-location').chained('#select-country');
    //$('#select-sublocation').chained('#select-location');

    /***********************************************************
     * BXSLIDER
     ***********************************************************/
	/*$('.bxslider').bxSlider({
  		minSlides: 1,
  		maxSlides: 6,
  		slideWidth: 170,
  		slideMargin: 30,
        responsive: false
	});*/

    /***********************************************************
     * ACCORDION
     ***********************************************************/
    $('.panel-heading a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });


                // Filters Start //
            
            $(".checkbox_am").click((function(){
                var option_id = $(this).attr('option_id');
                
                if($(this).prop('checked'))
                {
                    $("#search_option_"+option_id).prop('checked', true);
                }
                else
                {
                    $("#search_option_"+option_id).prop('checked', false);
                }
                //console.log(option_id);
            }));
            
            $(".input_am").focusout((function(){
                var option_id = $(this).attr('option_id');
                
                $("#search_option_"+option_id).val($(this).val());
                //console.log(option_id);
            }));
            
            $(".input_am_from").focusout((function(){
                var option_id = $(this).attr('option_id');
                $("#search_option_"+option_id+"_from").val($(this).val());
                //console.log(option_id);
            }));
            
            $(".input_am_to").focusout((function(){
                var option_id = $(this).attr('option_id');
                
                $("#search_option_"+option_id+"_to").val($(this).val());
                //console.log(option_id);
            }));
            
            <?php if(empty($_GET['search']) && empty($search_query)): ?>
            $(".checkbox_am, .search-form .advanced-form-part label.checkbox input").prop('checked', false);
            $(".input_am, .input_am_from, .input_am_to, .search-form input[type=text], .search-form select").val('');
            <?php endif; ?>
            
            $('.search-form select.selectpicker').selectpicker('render');
            
            $("button.refresh_filters").click(function () { 
                manualSearch(0);
                return false;
            });
            showCounters([]);
            // Filters End //    
            
    
        // [START] Save search //  
        
        $("#search-save").click(function(){
            manualSearch(0, '#content-block', true);
            
            return false;
        });
        
        // [END] Save search //
        //Typeahead

            $('#search_option_smart').typeahead({
                minLength: 1,
                source: function(query, process) {
                    $.post('{typeahead_url}/smart', { q: query, limit: 8 }, function(data) {
                        process(JSON.parse(data));
                    });
                }
            });
            
            $('.twitter-typeahead input:first-child').attr('style', 'position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1')
            $('#search_option_smart').attr('style', 'position: relative; vertical-align: top;')
            
            /* Search start */

            $('.menu-onmap li a').click(function () { 
              if(!$(this).parent().hasClass('list-property-button'))
              {
                  $(this).parent().parent().find('li').removeClass("active");
                  $(this).parent().addClass("active");
                  
                  if(loadOnTab) manualSearch(0);
                  return false;
              }
            });
            
            <?php if(config_item('all_results_default') !== TRUE): ?>
            if($('.menu-onmap li.active').length == 0)
            {
                if(!$('.menu-onmap li:first').hasClass('list-property-button'))
                    $('.menu-onmap li:first').addClass('active');
            }
            <?php else: ?>
            if($('.menu-onmap li.active').length == 0)
            {
                $('.menu-onmap li.all-button').addClass('active');
            }
            <?php endif; ?>
            
            $('#search-start').click(function () { 
              manualSearch(0);
              return false;
            });
			

            /* Search end */
            
            <?php $dates_list = ''; if(isset($available_dates) && file_exists(APPPATH.'controllers/admin/booking.php')): ?>
            var dates_list = [];
            <?php foreach($available_dates as $date_format => $unix_format): ?>
            <?php
                $dates_list.='"'.$date_format.'", ';
            ?>
            <?php endforeach; ?>
            <?php
                if($dates_list != '')
                    $dates_list = substr($dates_list, 0, -2);
            ?>dates_list = [<?php echo $dates_list; ?>];
            <?php endif; ?>
            
            /* Date picker */
            
                        // Calendar translation start //
            
            var translated_cal = {
    			days: ["{lang_cal_sunday}", "{lang_cal_monday}", "{lang_cal_tuesday}", "{lang_cal_wednesday}", "{lang_cal_thursday}", "{lang_cal_friday}", "{lang_cal_saturday}", "{lang_cal_sunday}"],
    			daysShort: ["{lang_cal_sun}", "{lang_cal_mon}", "{lang_cal_tue}", "{lang_cal_wed}", "{lang_cal_thu}", "{lang_cal_fri}", "{lang_cal_sat}", "{lang_cal_sun}"],
    			daysMin: ["{lang_cal_su}", "{lang_cal_mo}", "{lang_cal_tu}", "{lang_cal_we}", "{lang_cal_th}", "{lang_cal_fr}", "{lang_cal_sa}", "{lang_cal_su}"],
    			months: ["{lang_cal_january}", "{lang_cal_february}", "{lang_cal_march}", "{lang_cal_april}", "{lang_cal_may}", "{lang_cal_june}", "{lang_cal_july}", "{lang_cal_august}", "{lang_cal_september}", "{lang_cal_october}", "{lang_cal_november}", "{lang_cal_december}"],
    			monthsShort: ["{lang_cal_jan}", "{lang_cal_feb}", "{lang_cal_mar}", "{lang_cal_apr}", "{lang_cal_may}", "{lang_cal_jun}", "{lang_cal_jul}", "{lang_cal_aug}", "{lang_cal_sep}", "{lang_cal_oct}", "{lang_cal_nov}", "{lang_cal_dec}"]
    		};
            
            if(typeof(DPGlobal) != 'undefined'){
                DPGlobal.dates = translated_cal;
            }
            
            if($(selectorResults).length <= 0)
                selectorResults = '.wrap-content .container';
            
            // Calendar translation End //
            
            var nowTemp = new Date();
            
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            $('.datetimepicker_standard').datepicker().on('changeDate', function(ev) {
                $(this).datepicker('hide');
            });

            var checkin = $('#datetimepicker1').datepicker({
                onRender: function(date) {
                    
                    //console.log(date.valueOf());
                    //console.log(date.toString());
                    //console.log(now.valueOf());
                    
                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() < now.valueOf()) // Just for performance
                    {
                        return 'disabled';
                    }
                    <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                    else if(dates_list.indexOf(today_formated )>= 0)
                    {
                        return '';
                    }
                    
                    return 'disabled red';
                    <?php else: ?>
                    return '';
                    <?php endif;?>
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 7);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#datetimepicker2')[0].focus();
            }).data('datepicker');
                var checkout = $('#datetimepicker2').datepicker({
                onRender: function(date) {

                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() <= checkin.date.valueOf()) // Just for performance
                    {
                        return 'disabled';
                    }                    
                    <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                    else if(dates_list.indexOf(today_formated )>= 0)
                    {
                        return '';
                    }
                    
                    return 'disabled red';
                    <?php else: ?>
                    return '';
                    <?php endif;?>
            }
            }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datepicker');
            
        <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
            /* Search booking form */
            
            var checkin_booking = $('#booking_date_from').datepicker({
                place: function(){
                    var element = this.component ? this.component : this.element;
                    element.after(this.picker);
		},   
                onRender: function(date) {
                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() < now.valueOf())
                    {
                        return 'disabled';
                    }
                    
                    return '';
                }
            }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout_booking.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 7);
                    checkout_booking.setValue(newDate);
                }
                checkin_booking.hide();
                $('#booking_date_to')[0].focus();
            }).data('datepicker');
                var checkout_booking = $('#booking_date_to').datepicker({
                place: function(){
                    var element = this.component ? this.component : this.element;
                    element.after(this.picker);
		},   
                    
                    
                onRender: function(date) {

                    var dd = date.getDate();
                    var mm = date.getMonth()+1;//January is 0!`
                    
                    var yyyy = date.getFullYear();
                    if(dd<10){dd='0'+dd}
                    if(mm<10){mm='0'+mm}
                    var today_formated = yyyy+'-'+mm+'-'+dd;
                    
                    
                    if(date.valueOf() <= checkin_booking.date.valueOf())
                    {
                        return 'disabled';
                    }
                    
                    return '';
            }
            }).on('changeDate', function(ev) {
                checkout_booking.hide();
            }).data('datepicker');
            <?php endif;?>
            
            $('a.available.selectable').click(function(){
                $('#datetimepicker1').val($(this).attr('ref'));
                $('#datetimepicker2').val($(this).attr('ref_to'));
                $('div.property-form form input:first').focus();
                
                var nowTemp = new Date($(this).attr('ref'));
                var date_from = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                
                //console.log(date_from);
                
                checkin.setValue(date_from);
                date_from.setDate(date_from.getDate() + 7);
                checkout.setValue(date_from);
            });
            
            
            /* Date picker end */

            {has_extra_js}
            loadjQueryUpload();
            
            $(".cleditor").cleditor({
                width: "400px",
                height: "auto"
            });
            
            $('.tabbable li.rtab a').click(function () { 
                var tab_width = 0;
                var tab_width_real = 0;
                $('.tab-content').find('div.cleditorToolbar:first .cleditorGroup').each(function (i) {
                    tab_width += $(this).width();
                });
                
                tab_width_real = $('.tab-content').find('div.cleditorToolbar').width();
                var rows = parseInt(tab_width/tab_width_real+1)
                
                $('.tab-content').find('div.cleditorToolbar').height(rows*27);
                
                try {
                    $('.tab-content').find('.cleditor').refresh();
                }
                catch(err) {
                    // console.log(err.message);
                    // $(...).find(...).refresh is not a function
                }
                
            });
            
            $('.zoom-button').bind("click touchstart", function()
            {
                var myLinks = new Array();
                var current = $(this).attr('href');
                var curIndex = 0;
                
                $('.files-list-u .zoom-button').each(function (i) {
                    var img_href = $(this).attr('href');
                    myLinks[i] = img_href;
                    if(current == img_href)
                        curIndex = i;
                });
    
                options = {index: curIndex}
                
                blueimp.Gallery(myLinks, options);
                
                return false;
            });
            
            /* [Edit property] */
    
            // If alredy selected
            <?php if(config_db_item('map_version') =='open_street'):?>
            var edit_map_marker;
            var edit_map
            if($('#mapsAddress').length){
                if($('#inputGps').length && $('#inputGps').val() != '')
                {
                    savedGpsData = $('#inputGps').val().split(", ");

                    edit_map = L.map('mapsAddress', {
                        center: [parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])],
                        zoom: {settings_zoom}+1,
                    });     
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(edit_map);
                    var positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(edit_map);
                    edit_map_marker = L.marker(
                        [parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])],
                        {draggable: true}
                    ).addTo(edit_map);

                    edit_map_marker.on('dragend', function(event){
                        var marker = event.target;
                        var location = marker.getLatLng();
                        var lat = location.lat;
                        var lon = location.lng;
                        $('#inputGps').val(lat+', '+lon);
                        //retrieved the position
                      });

                    firstSet = true;
                }
                else
                {

                    edit_map = L.map('mapsAddress', {
                        center: [{settings_gps}],
                        zoom: {settings_zoom}+1,
                    });     
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(edit_map);
                    var positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(edit_map);
                    edit_map_marker = L.marker(
                        [{settings_gps}],
                        {draggable: true}
                    ).addTo(edit_map);

                    edit_map_marker.on('dragend', function(event){
                        var marker = event.target;
                        var location = marker.getLatLng();
                        var lat = location.lat;
                        var lon = location.lng;
                        $('#inputGps').val(lat+', '+lon);
                        //retrieved the position
                    });

                    firstSet = true;
                }

                $('#inputAddress').keyup(function (e) {
                clearTimeout(timerMap);
                timerMap = setTimeout(function () {
                    $.get('https://nominatim.openstreetmap.org/search?format=json&q='+$('#inputAddress').val(), function(data){
                        if(data.length && typeof data[0]) {
                            edit_map_marker.setLatLng([data[0].lat, data[0].lon]).update(); 
                            edit_map.panTo(new L.LatLng(data[0].lat, data[0].lon));
                            $('#inputGps').val(data[0].lat+', '+data[0].lon);
                        } else {
                            ShowStatus.show('<?php echo str_replace("'", "\'", lang_check('Address not found!')); ?>');
                            return;
                        }
                    });
                }, 2000);
                
            });
            }
            <?php else:?>
            if($('#inputGps').length && $('#inputGps').val() != '')
            {
                savedGpsData = $('#inputGps').val().split(", ");
                
                $("#mapsAddress").gmap3({
                    map:{
                      options:{
                        center: [parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])],
                        zoom: 14
                      }
                    },
                    marker:{
                    values:[
                      {latLng:[parseFloat(savedGpsData[0]), parseFloat(savedGpsData[1])]},
                    ],
                    options:{
                      draggable: true
                    },
                    events:{
                        dragend: function(marker){
                          if($("#inputAddress").attr("readonly"))
                          {
                            alert('<?php _l('Location change disabled'); ?>');
                            return false;
                          }
                          else
                          {
                            $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                          }
                        }
                  }}});
                
                firstSet = true;
            }
            else
            {
                $("#mapsAddress").gmap3({
                    map:{
                      options:{
                        center: [{settings_gps}],
                        zoom: 12
                      },
                    },
                marker:{
                    values:[
                      {latLng:[{settings_gps}]},
                    ],
                    options:{
                      draggable: true
                    },
                    events:{
                        dragend: function(marker){
                          if($("#inputAddress").attr("readonly"))
                          {
                            alert('<?php _l('Location change disabled'); ?>');
                            return false;
                          }
                          else
                          {
                            $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                          }
                        }
                  }}
                  });
                  
                  firstSet = true;
            }
                
            $('#inputAddress').keyup(function (e) {
                clearTimeout(timerMap);
                timerMap = setTimeout(function () {
                    
                    $("#mapsAddress").gmap3({
                      getlatlng:{
                        address:  $('#inputAddress').val(),
                        callback: function(results){
                          if ( !results ){
                            ShowStatus.show('<?php echo str_replace("'", "\'", lang_check('Address not found!')); ?>');
                            return;
                          } 
                          
                            if(firstSet){
                                $(this).gmap3({
                                    clear: {
                                      name:["marker"],
                                      last: true
                                    }
                                });
                            }
                          
                          // Add marker
                          $(this).gmap3({
                            marker:{
                              latLng:results[0].geometry.location,
                               options: {
                                  id:'searchMarker',
                                  draggable: true
                              },
                              events: {
                                dragend: function(marker){
                                  if($("#inputAddress").attr("readonly"))
                                  {
                                    alert('<?php _l('Location change disabled'); ?>');
                                    return false;
                                  }
                                  else
                                  {
                                    $('#inputGps').val(marker.getPosition().lat()+', '+marker.getPosition().lng());
                                  }
                                }
                              }
                            }
                          });
                          
                          // Center map
                          $(this).gmap3('get').setCenter( results[0].geometry.location );
                          
                          $('#inputGps').val(results[0].geometry.location.lat()+', '+results[0].geometry.location.lng());
                          
                          firstSet = true;
    
                        }
                      }
                    });
                }, 2000);
                
            });
            <?php endif;?>
            /* [/Edit property] */
            
            {/has_extra_js}

     reloadElements();

});

        function manualSearch(v_pagenum, scroll_enabled, onlysave, color)
        {
            if (typeof scroll_enabled === 'undefined') scroll_enabled = "#content-block";
            if (typeof onlysave === 'undefined') onlysave = false;
            if (typeof color === 'undefined') color = false;

            
            // Order ASC/DESC
            var v_order = $('.selectpicker-small').val();
            
            // View List/Grid
            var v_view = $('.view-type.active').attr('ref');          
            
            //Define default data values for search
            var data = {
                order: v_order,
                view: v_view,
                page_num: v_pagenum
            };
            
            if(color) {
                data['color'] = color;
            }
            
            if($('#booking_date_from').length > 0)
            {
                if($('#booking_date_from').val() != '')
                    data['v_booking_date_from'] = $('#booking_date_from').val();
            }
            
            if($('#booking_date_to').length > 0)
            {
                if($('#booking_date_to').val() != '')
                    data['v_booking_date_to'] = $('#booking_date_to').val();
            }
            
            // Purpose, "for custom tabbed selector"
            /*
            if($('#search_option_4 .active a').length > 0)
            {
                data['v_search_option_4'] = $('#search_option_4 .active a').html();
            }
            */
            
            // Improved tabbed selector code
//            $(".tabbed-selector").each(function() {
//              var selected_text = $(this).find(".active:not(.all-button) a").html();
//              data['v_'+$(this).attr('id')] = selected_text;
//            });
            
            // Add custom data values, automatically by fields inside search-form
            $('.search-form  input:not(.skip), .search-form  select:not(.skip)').each(function (i) {
                if($(this).attr('type') == 'checkbox')
                {
                    if ($(this)[0].checked)
                    {
                        data['v_'+$(this).attr('id')] = $(this).val();
                    }
                }
                else if($(this).attr('type') == 'radio')
                {   
                    if ($(this)[0].checked)
                    {
                        //console.log($(this));
                        data['v_'+$(this).attr('name')] = $(this).attr('rel');
                    }
                }
                else if($(this).hasClass('tree-input'))
                {
                    if($(this).val() != '')
                    {
                        var tre_id_split = $(this).attr('id').split('_');
                        //console.log($(this).find("option:selected").attr('value'));
                        //console.log(tre_id_split);
                        if(data['v_search_option_'+tre_id_split[2]] == undefined)
                            data['v_search_option_'+tre_id_split[2]] = '';
                        
                        data['v_search_option_'+tre_id_split[2]]+= $(this).find("option:selected").text()+' - ';
                    }
                }
                else
                {
                    data['v_'+$(this).attr('id')] = $(this).val();
                }
            });
            
            //console.log(data);
            
            // Custom tags filter Start
            if($('#tags-filters').length > 0)
            {
                var tags_html = '';
                
                // Add custom data values, automatically by fields inside search-form
                $('.search-form form input, .search-form form select').each(function (i) {
                    if($(this).attr('type') == 'checkbox')
                    {
                        if ($(this).attr('checked'))
                        {
                            data['v_'+$(this).attr('id')] = $(this).val();
                            
                            var option_name = '';
                            //var attr = $(this).attr('placeholder');
                            var attr = $(this).attr('value').substring(4);
                            if(typeof attr !== 'undefined' && attr !== false)
                            {
                                option_name = attr;
                            }
                            
                            if($(this).val() != '')
                                tags_html+='<button class="btn btn-small btn-warning filter-tag ck" rel="'+$(this).attr('id')+'" type="button"><span class="icon-remove icon-white"></span> '+option_name+'</button>&nbsp;';
                        
                        }
                    }
                    else if($(this).hasClass('tree-input'))
                    {
                        // different way
                    }
                    else
                    {
                        data['v_'+$(this).attr('id')] = $(this).val();
                        
                        var option_name = '';
                        var attr = $(this).attr('placeholder');
                        if(typeof attr !== 'undefined' && attr !== false)
                        {
                            option_name = attr+': ';
                        }
                        
                        if($(this).val() != '')
                            tags_html+='<button class="btn btn-small btn-primary filter-tag" rel="'+$(this).attr('id')+'" type="button"><span class="icon-remove icon-white"></span> '+option_name+$(this).val()+'</button>&nbsp;';
                    
                    }
                });
                
                if(typeof data['v_search_option_4'] != 'undefined')
                if(data['v_search_option_4'].length > 0)
                    tags_html+='<button class="btn btn-small btn-danger filter-tag" rel="4" type="button"><span class="icon-remove icon-white"></span> '+data['v_search_option_4']+'</button>&nbsp;';
                
                if(tags_html != '')
                {
                    $("#tags-filters").css('display', 'block');
                    
                    $("#tags-filters").html(tags_html);
                    
                    $(".filter-tag").click(function(){
                        var m_id = $(this).attr('rel').substring(14);
                        
                        if($(this).hasClass('ck'))
                        {
                            $('#'+$(this).attr('rel')).prop('checked', false);
                        }
                        else
                        {
                            $("input.id_"+m_id).val('');
                            $("input#"+$(this).attr('rel')).val('');
                            
                            $("select#"+$(this).attr('rel')).val('');
                            $("select.id_"+m_id).val('');
                            $("select#"+$(this).attr('rel')+".selectpicker").selectpicker('render');
                            $("select.id_"+m_id+".selectpicker").selectpicker('render');
                        }
                        
                        $(this).remove();
                        
                        
                        if($(this).attr('rel') == '4')
                        {
                            $('#search_option_4 .active').removeClass('active');
                        }
                        
                        if($(this).hasClass('ck'))
                        {
                            $("input.checkbox_am[option_id='"+m_id+"']").prop('checked', false);
                        }
                        
                        manualSearch(0);
                    });
                }
                else
                {
                    $("#tags-filters").css('display', 'none');
                }
            }
            // Custom tags filter End
            
            $("#ajax-indicator-1").show();
            
            if(onlysave == true)
            {
                $.post("{api_private_url}/save_search/{lang_code}", data, 
                       function(data){
                    //console.log(data);
                    //console.log(data.message);
                    
                    ShowStatus.show(data.message);
                                    
                    $("#ajax-indicator-1").hide();
                });
                
                return;
            }
            
            <?php if(config_item('enable_ajax_url') == true): ?>
            if(support_history_api() == true)
            {
                if(data.page_num)
                    data.page_num = data.page_num.replace("#content", "");
                    
            	var json_string=JSON.stringify(data);
                json_string = json_string.replace("&amp;", "%26"); 
                
                history.pushState(data, '', '{page_current_url}?search='+json_string);
            }
            <?php endif; ?>
                
             /* color_path */
                if(data['color']=='default'){
                    var _color ='default';
                } else if( data['color']) {
                    var _color = data['color']+'/';
                } else {
                    
                    var _color = '';
                    if($('.color-switch a').hasClass('active')){
                        _color = $('.color-switch a.active').attr('color')+'/';
                    }
                }
                 
            /* end color_path */
                 
            <?php if(config_item('search_listing_page')&&$page_id!=config_item('search_listing_page')): ?>
                
                if( data['v_search_radius']==0)
                    data['v_search_radius'] ='';
                <?php
                
                // get title;
                $CI =& get_instance();
                $CI->load->model('page_m');
                $_page = $CI->page_m->get_lang(config_item('search_listing_page'),false,$lang_id);
                $_title=$_page->{'navigation_title_'.$lang_id};
                
                ?>
                window.location.href='<?php echo site_url($lang_code.'/'.config_item('search_listing_page').'/'.url_title_cro($_title, '-', TRUE))?>?search='+JSON.stringify(data);
                return false;
                
            <?php endif;?>     
                
            showCounters(data);  
            $.post("{ajax_load_url}/"+v_pagenum, data,
             function(data){
                if(mapRefresh && $('#wrap-map').length > 0)
                {
                    
                <?php if(config_db_item('map_version') =='open_street'):?>
                    if(map=="init") {       
                        map = L.map('wrap-map', {
                            <?php if(config_item('custom_map_center') === FALSE): ?>
                            center: [{all_estates_center}],
                            <?php else: ?>
                            center: [<?php echo config_item('custom_map_center'); ?>],
                            <?php endif; ?>
                            zoom: {settings_zoom}+1,
                            scrollWheelZoom: scrollWheelEnabled,
                            dragging: !L.Browser.mobile,
                            tap: !L.Browser.mobile
                        });     
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        var positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(map);
                        map.addLayer(clusters);
                    }
                                
                    //Loop through all the markers and remove
                    for (var i = 0; i < markers.length; i++) {
                        clusters.removeLayer(markers[i]);
                    }
                    markers = [];

                    if(data.results.length > 0)
                    {
                        $.each(data.results, function(index, listing) {
                            
                            if(typeof listing.latLng == 'undefined'){
                                return;
                            }
                            
                            var marker = L.marker(
                                [listing.latLng[0], listing.latLng[1]],
                                {icon: L.divIcon({
                                        html: '<img src="'+listing.options.icon+'">',
                                        className: 'open_steet_map_marker '+data.results[index].options.cssclass,
                                        iconSize: [31, 46],
                                        popupAnchor: [1, -35],
                                        iconAnchor: [15, 30],
                                    })
                                }
                            )/*.addTo(map)*/;

                            marker.bindPopup(listing.data);
                            clusters.addLayer(marker);
                            markers.push(marker);
                        })
                        
                        map.setView(new L.LatLng(data.results_center[0], data.results_center[1]), {settings_zoom}+1);
                    }
                    <?php else:?>
                    //Remove all markers
                    $("#wrap-map").gmap3({
                        clear: {
                            name:["marker"]
                        }
                    });
                   
                    if(data.results.length > 0)
                    {
                 
                 var markers = new Array();
                 
                    $.each(data.results, function( index, listing ) {
                    /*
                    if(!_color)  {    
                        
                        var icon= 'assets/img/markers/<?php echo $color;?>'+listing.options.cssclass+'.png'
                        
                    }else if(_color=='default') {
                        var icon= 'assets/img/markers/'+listing.options.cssclass+'.png'
                     } else {
                         var icon= 'assets/img/markers/'+_color+listing.options.cssclass+'.png'
                    }*/
                        
                    if( typeof listing.latLng !== 'undefined'){
                    
                     var icon =  listing.options.icon;
                    markers.push( {
                        latLng:[listing.latLng[0], listing.latLng[1]],
                        data:{
                            /*img_preview: listing.options.icon, */
                            /*img_preview: listing.options.icon, */
                            content:listing.data
                        }, 
                        options:{
                          /*icon: listing.options.icon*/
                                icon: icon
                        },
                    });
                }
                });

                    $("#wrap-map").gmap3({
                               map:{
                        // CENTRAL MAP DEFAULT
                        options:{
                            center: {lat:data.results_center[0], lng: data.results_center[1]},
                        }
                    },
                    marker:{
                        // DATA LOCATION
                        values:markers,
                        cluster: clusterConfig,	
                        events:{
                            <?php echo map_event(); ?>: function(marker, event, context){
                                $(this).gmap3(
                                {
                                    clear:"overlay"
                                },

                                {
                                        overlay:{
                                        latLng: marker.getPosition(),
                                        options:{
                                            content:   context.data.content,
                                            offset: {
                                                x:-38,
                                                y:-163
                                            }
                                        }
                                    }
                                });
                            }

                        }
                    }

                });

                    }
                    
                    <?php endif;?>
                }
                
                /* add row count */
                
                if($('#count_row').length>0){
                     $('#count_row').html(data.total_rows);
                 }
                /* end add row count */
                
                $(selectorResults).html(data.print);
                
                reloadElements();
                
                $("#ajax-indicator-1").hide();
                if(scroll_enabled && $(scroll_enabled).length){
                    if($('.navbar.mega-nav').length && $('.navbar.mega-nav').hasClass('affix') )
                        $(document).scrollTop( $(scroll_enabled).offset().top-70 );
                    else
                        $(document).scrollTop( $(scroll_enabled).offset().top-150 );
                } else if(scroll_enabled && $('.results_conteiner').length){
                    if($('.navbar.mega-nav').length && $('.navbar.mega-nav').hasClass('affix') )
                        $(document).scrollTop( $('.results_conteiner').offset().top-70 );
                    else
                        $(document).scrollTop( $('.results_conteiner').offset().top-150 );
                }
                
//                $(selectorResults).hide(1000,function(){
//                    $(selectorResults).html(data.print);
//                    reloadElements();
//                    $(selectorResults).show(1000);
//                });
            }, "json");
            return false;
        }
        
    $.fn.startLoading = function(data){
        //$('#saveAll, #add-new-page, ol.sortable button, #saveRevision').button('loading');
    }
    
    $.fn.endLoading = function(data){
        //$('#saveAll, #add-new-page, ol.sortable button, #saveRevision').button('reset');       
        <?php if(config_item('app_type') == 'demo'):?>
            ShowStatus.show('<?php echo str_replace("'", "\'", lang('Data editing disabled in demo')); ?>');
        <?php else:?>
            //ShowStatus.show('<?php echo lang('data_saved')?>');
        <?php endif;?>
    }

        function reloadElements()
        {          

            $('.selectpicker-small').change(function() {
                manualSearch(0);
                return false;
            });

            $('.view-type').click(function () { 
              $(this).parent().find('.view-type').removeClass("active");
              $(this).addClass("active");
              manualSearch(0);
              return false;
            });
            
            $('.pagination.properties a').click(function () { 
              var page_num = $(this).attr('href');
              var n = page_num.lastIndexOf("/"); 
              page_num = page_num.substr(n+1);
              
              manualSearch(page_num);
              return false;
            });
            
            $('.pagination.news a').click(function () { 
                var page_num = $(this).attr('href');
                var n = page_num.lastIndexOf("/"); 
                page_num = page_num.substr(n+1);
                
                $.post($(this).attr('href'), {search: $('#search_showroom').val()}, function(data){
                    $('.property_content_position').html(data.print);
                    
                    reloadElements();
                }, "json");
                
                return false;
            });

            //InitChosen();
        }
        
    {has_extra_js}
    function loadjQueryUpload()
    {
        $('form.fileupload').each(function () {
            $(this).fileupload({
            <?php if(config_item('app_type') != 'demo'):?>
            autoUpload: true,
            <?php endif;?>
            // The maximum width of the preview images:
            previewMaxWidth: 160,
            // The maximum height of the preview images:
            previewMaxHeight: 120,
            uploadTemplateId: null,
            downloadTemplateId: null,
            uploadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    /*
                    var row = $('<li class="img-rounded template-upload">' +
                        '<div class="preview"><span class="fade"></span></div>' +
                        '<div class="filename"><code>'+file.name+'</code></div>'+
                        '<div class="options-container">' +
                        '<span class="cancel"><button  class="btn btn-mini btn-warning"><i class="icon-ban-circle icon-white"></i></button></span></div>' +
                        (file.error ? '<div class="error"></div>' :
                                '<div class="progress">' +
                                    '<div class="bar" style="width:0%;"></div></div></div>'
                        )+'</li>');
                    row.find('.name').text(file.name);
                    row.find('.size').text(o.formatFileSize(file.size));
                    if (file.error) {
                        row.find('.error').text(
                            locale.fileupload.errors[file.error] || file.error
                        );
                    }
                    */
                    var row = $('<div> </div>');
                    rows = rows.add(row);
                });
                return rows;
            },
            downloadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    var row = $('<li class="img-rounded template-download fade">' +
                        '<div class="preview"><span class="fade"></span></div>' +
                        '<div class="filename"><code>'+file.short_name+'</code></div>'+
                        '<div class="options-container">' +
                        (file.zoom_enabled?
                            '<a data-gallery="gallery" class="zoom-button btn btn-mini btn-success" download="'+file.name+'"><i class="icon-search icon-white"></i></a>'
                            : '<a target="_blank" class="btn btn-mini btn-success" download="'+file.name+'"><i class="icon-search icon-white"></i></a>') +
                        ' <span class="delete"><button class="btn btn-mini btn-danger" data-type="'+file.delete_type+'" data-url="'+file.delete_url+'"><i class="icon-trash icon-white"></i></button>' +
                        ' <input type="checkbox" value="1" name="delete"></span>' +
                        '</div>' +
                        (file.error ? '<div class="error"></div>' : '')+'</li>');
                    
                    var added=false;
                    
                    if (file.error) {
                        ShowStatus.show(file.error);
                        
//                        row.find('.name').text(file.name);
//                        row.find('.error').text(
//                            file.error
//                        );
                    } else {
                        added=true;
                        row.find('.name a').text(file.name);
                        if (file.thumbnail_url) {
                            row.find('.preview').html('<img class="img-rounded" alt="'+file.name+'" data-src="'+file.thumbnail_url+'" src="'+file.thumbnail_url+'">');  
                        }
                        row.find('a').prop('href', file.url);
                        row.find('a').prop('title', file.name);
                        row.find('.delete button')
                            .attr('data-type', file.delete_type)
                            .attr('data-url', file.delete_url);
                    }
                    if(added)
                        rows = rows.add(row);
                });
                
                return rows;
            },
            destroyed: function (e, data) {
                $.fn.endLoading();
                <?php if(config_item('app_type') != 'demo'):?>
                if(data.success)
                {
                }
                else
                {
                    ShowStatus.show('<?php echo lang_check('Unsuccessful, possible permission problems or file not exists'); ?>');
                }
                <?php endif;?>
                return false;
            },
            <?php if(config_item('app_type') == 'demo'):?>
            added: function (e, data) {
                $.fn.endLoading();
                return false;
            },
            <?php endif;?>
            finished: function (e, data) {
                $('.zoom-button').unbind('click touchstart');
                $('.zoom-button').bind("click touchstart", function()
                {
                    var myLinks = new Array();
                    var current = $(this).attr('href');
                    var curIndex = 0;
                    
                    $('.files-list-u .zoom-button').each(function (i) {
                        var img_href = $(this).attr('href');
                        myLinks[i] = img_href;
                        if(current == img_href)
                            curIndex = i;
                    });
            
                    options = {index: curIndex}
            
                    blueimp.Gallery(myLinks, options);
                    
                    return false;
                });
            },
            dropZone: $(this)
        });
        });       
        
        $("ul.files").each(function (i) {
            $(this).sortable({
                update: saveFilesOrder
            });
            $(this).disableSelection();
        });
    
    }
    
    function filesOrderToArray(container)
    {
        var data = {};

        container.find('li').each(function (i) {
            var filename = $(this).find('.options-container a:first').attr('download');
            data[i+1] = filename;
        });
        
        return data;
    }
    
    function saveFilesOrder( event, ui )
    {
        var filesOrder = filesOrderToArray($(this));
        var pageId = $(this).parent().parent().parent().attr('id').substring(11);
        var modelName = $(this).parent().parent().parent().attr('rel');
        
        $.fn.startLoading();
		$.post('<?php echo site_url('files/order'); ?>/'+pageId+'/'+modelName, 
        { 'page_id': pageId, 'order': filesOrder }, 
        function(data){
            $.fn.endLoading();
		}, "json");
    }
    
    {/has_extra_js}
        
    function showCounters(data_params)
    {
        // load json

        //var data_post = $('#test-form').serializeArray();
        //data.push({name: 'property_id', value: "<?php //echo $property_id; ?>"});
        //data.push({name: 'agent_id', value: "<?php //echo $agent_id; ?>"});

        //console.log('data_params');
        //console.log(data_params);

        $.post('<?php echo site_url('api/get_all_counters/'.$lang_id.'/1')?>', data_params, function(data){
            //console.log('data');
            //console.log(data);

            // remove all
            $("input.checkbox_am").parent().find('span').html('');

            $.each(data.counters, function( index, obj ) {
              //console.log(obj.option_id);
              var m_id = obj.option_id;
              if(!$("input.checkbox_am[option_id='"+m_id+"']").is(":checked"))
              $("input.checkbox_am[option_id='"+m_id+"']").parent().find('span').html('&nbsp('+obj.count+')');
            });

        }, "json");
    }
            
        
        /* [START] NumericFields */
        
        $(function() {
            <?php if(config_db_item('swiss_number_format') == TRUE): ?>
            
            $('input.DECIMAL').number( true, 2, '.', '\'' );
            $('input.INTEGER').number( true, 0, '.', '\'' );
             
            <?php else: ?>
            
            $('input.DECIMAL').number( true, 2 );
            $('input.INTEGER').number( true, 0 );
            
            <?php endif; ?>
        });
    
        /* [END] NumericFields */
        
        /* [START] ValidateFields */
        
        $(function() {
            $('form.form-estate')
                .h5Validate({});
                $("form.form-estate").on("formValidated", function()
                {
                    if($('form.form-estate .ui-state-error').length) {
                        var offsetTop = $('form.form-estate .ui-state-error').first().offset().top-70;
                        console.log(offsetTop);
                        
                       if($('.navbar.navbar-fixed.affix-top').length)
                            offsetTop -=80
                        $(window).scrollTop(offsetTop)
                    }
                });
            });
        
        /* [END] ValidateFields */
</script>


    <script>
                var marks=new Array();
                var _map;
    $(document).ready(function(){
        
    <?php if(config_db_item('map_version') =='open_street'):?>
    if($('#wrap-map').length){
        map = L.map('wrap-map', {
            <?php if(config_item('custom_map_center') === FALSE): ?>
            center: [{all_estates_center}],
            <?php else: ?>
            center: [<?php echo config_item('custom_map_center'); ?>],
            <?php endif; ?>
            zoom: {settings_zoom}+2,
            scrollWheelZoom: scrollWheelEnabled,
            dragging: !L.Browser.mobile,
            tap: !L.Browser.mobile
        });     
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        var positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(map);
        
        <?php  if(!empty($all_estates))foreach($all_estates as $item): ?>
            <?php
                if(!isset($item['gps']))break;
                if(empty($item['gps']))continue;
            ?>
            var marker = L.marker(
                [<?php _che($item['gps']); ?>],
                {icon: L.divIcon({
                        html: '<img src="<?php _che($item['icon'])?>">',
                        className: 'open_steet_map_marker',
                        iconSize: [31, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [15, 30],
                    })
                }
            )/*.addTo(map)*/;
            marker.bindPopup("<?php echo _generate_popup($item, true); ?>");
            clusters.addLayer(marker);
            markers.push(marker);
        <?php endforeach; ?>
        map.addLayer(clusters);
    }
   <?php else:?>    
       _map= $("#wrap-map").gmap3({
         map:{
            options:{
             <?php if(config_item('custom_map_center') === FALSE && isset($all_estates_center)): ?>
             center: [{all_estates_center}],
             <?php elseif(config_item('custom_map_center')): ?>
             center: [<?php echo config_item('custom_map_center'); ?>],
             <?php endif; ?>
             zoom: {settings_zoom},
             scrollwheel: scrollWheelEnabled,
             mapTypeId: c_mapTypeId,
             mapTypeControlOptions: {
               mapTypeIds: c_mapTypeIds
             }
            }
         },
        styledmaptype:{
          id: "style1",
          options:{
            name: "<?php echo lang_check('CustomMap'); ?>"
          },
          styles: mapStyle
        },
         marker:{
            values:[
             <?php if(isset($all_estates))foreach($all_estates as $key=>$estate): if(!empty($estate['gps'])): ?>
                {latLng:[<?php echo _ch($estate['gps']);?>], adr:"<?php echo _ch($estate['address']);?>", options:{icon: "<?php _che($estate['icon'])?>"}, data:"<?php echo _generate_popup($estate, true); ?>"},
            <?php endif; endforeach; ?>
            ],
            cluster: clusterConfig,
            options: markerOptions,
            
        events:{
          <?php echo map_event(); ?>: function(marker, event, context){
              $(this).gmap3("get").setCenter(marker.getPosition())
              $(this).gmap3(
                        {
                            clear:"overlay",
                    center: marker.getPosition()
                        },

                        {
                            overlay:{
                                latLng: marker.getPosition(),
                                options:{
                                    content:   context.data,
                                    offset: {
                                        x:-38,
                                        y:-163
                                    }
                                }
                                
                            }
                        });
          },
          mouseout: function(){
            //var infowindow = $(this).gmap3({get:{name:"infowindow"}});
            //if (infowindow){
            //  infowindow.close();
            //}
          }
        }}});
       /* init_gmap_searchbox();*/
    <?php endif;?>
    });    
    </script>
    
    <script>
/* share popup */
$('document').ready(function(){
    $('.btn-share-fb').click(function(e){
        e = e || window.event
        e.preventDefault()
        var width = 600;
        var height = 300;
        window.open( 'https://www.facebook.com/sharer/sharer.php?u='+$(this).attr("data-url")+'&title='+$(this).attr("data-title")+'&display=popup&ref=plugin&src=like', '', 'width=' + width + ',height=' + height + ',left=' + (($(window).innerWidth() - width)/2) + ',top=' + (($(window).innerHeight() - height)/2) );
    })
    
    $('.btn-share-tw').click(function(e){
        e = e || window.event
        e.preventDefault()
        var width = 600;
        var height = 450;
        window.open( 'https://twitter.com/home?status='+$(this).attr("data-title")+'%20'+$(this).attr("data-url"), '', 'width=' + width + ',height=' + height + ',left=' + (($(window).innerWidth() - width)/2) + ',top=' + (($(window).innerHeight() - height)/2) );
    })
    
    $('.btn-share-google-plus').click(function(e){
        e = e || window.event
        e.preventDefault()
        var width = 500;
        var height = 400;
        window.open( 'https://plus.google.com/share?url='+$(this).attr("data-url"), '', 'width=' + width + ',height=' + height + ',left=' + (($(window).innerWidth() - width)/2) + ',top=' + (($(window).innerHeight() - height)/2) );
    })
})
/* end share popup */
$('document').ready(function(){
    reloadPaginationUniversal();
 })
            function reloadPaginationUniversal()
        {
                 
            $('.pagination-ajax-results a').click(function () { 
                var page_num = $(this).attr('href');
                var n = page_num.lastIndexOf("/"); 
                page_num = page_num.substr(n+1);
                
                var results_dom_id = '#ajax_results';
                
                $.post($(this).attr('href'), {'page_num':page_num}, function(data){
                    $(results_dom_id).html(data.print);
                    
                    reloadPaginationUniversal();
                }, "json");
                
                return false;
            });
        }

    $(document).ready(function(){
        // if results container more 1, hide other
        if($('.results_conteiner').length>1) {
            $('.results_conteiner').not(':eq('+($('.results_conteiner').length-1)+')').removeClass('results_conteiner').hide();
            $('#content-block').attr('id','');

            if(!$('#section-treefieldresult .results_conteiner').length) {
                $('#section-treefieldresult').hide();
            }
        }
        // add calendar for all inputs with class .field_datepicker (required unique id)
        $('.field_datepicker').each(function(){
            $(this).datepicker({
                place: function(){
                        var element = this.component ? this.component : this.element;
                        element.after(this.picker);
                    },   
                pickTime: false
            });
        })
        /*
        $('.field_datepicker_time').each(function(){
            $(this).datepicker({
                pickTime: true
            });
        });*/
    })

<?php if(config_db_item('agent_masking_enabled') == TRUE && isset($property_id) && isset($agent_id)): ?>
            // Popup form Start //
                /* visible */
                $('.hidden-agent-details,.hidden-file-details').css('display','block');
                
                $('.popup-with-form').magnificPopup({
                	type: 'inline',
                	preloader: false,
                	focus: '#name',
                                    
                	// When elemened is focused, some mobile browsers in some cases zoom in
                	// It looks not nice, so we disable it:
                	callbacks: {
                		beforeOpen: function() {
                			if($(window).width() < 700) {
                				this.st.focus = false;
                			} else {
                				this.st.focus = '#name';
                			}
                		}
                	}
                });
                
                
                $('#unhide-agent-mask').click(function(){
                    
                    var data = $('#test-form').serializeArray();
                    data.push({name: 'property_id', value: "<?php echo $property_id; ?>"});
                    data.push({name: 'agent_id', value: "<?php echo $agent_id; ?>"});
                    
                    //console.log( data );
                    $('#ajax-indicator-masking').css('display', 'inline');
                    
                    // send info to agent
                    $.post("<?php echo site_url('frontend/maskingsubmit/'.$lang_code); ?>", data,
                    function(data){
                        if(data=='successfully')
                        {
                            // Display agent details
                            $('.popup-with-form').css('display', 'none');
                            // Close popup
                            $.magnificPopup.instance.close();
                        }
                        else
                        {
                            $('.alert.hidden').css('display', 'block');
                            $('.alert.hidden').css('visibility', 'visible');
                            
                            $('#popup-form-validation').html(data);
                            
                            //console.log("Data Loaded: " + data);
                        }
                        $('#ajax-indicator-masking').css('display', 'none');
                    });

                    return false;
                });
                
            <?php endif; ?>

</script>

<?php
    $output ='';
    $CI =& get_instance();
    //Get template settings
    $template_name = $CI->data['settings']['template'];
    $cache_time_sec = 604800; /* one week */
    $cache_file_name = FCPATH.'templates/'.$template_name.'/assets/cache/_generate_dependentfields.js';
    //Load view
    if(file_exists(FCPATH.'templates/'.$template_name.'/widgets/_generate_dependentfields_js.php'))
        if(file_exists($cache_file_name) /*&& filemtime($cache_file_name) > time()-$cache_time_sec*/)
        {
            $output = $CI->load->view($template_name.'/widgets/_generate_dependentfields_js.php', false, true);
            require_once APPPATH."helpers/min-js.php";
            $jSqueeze = new JSqueeze();
            $output = $jSqueeze->squeeze($output, true, false);
            file_put_contents(FCPATH.'templates/'.$template_name.'/assets/cache/_generate_dependentfields.js', $output);
        } else {
            $output = $CI->load->view($template_name.'/widgets/_generate_dependentfields_js.php', false, true);
            require_once APPPATH."helpers/min-js.php";
            $jSqueeze = new JSqueeze();
            $output = $jSqueeze->squeeze($output, true, false);
            file_put_contents(FCPATH.'templates/'.$template_name.'/assets/cache/_generate_dependentfields.js', $output);
        }

    echo '<script src="assets/cache/_generate_dependentfields.js?v='.rand(000,999).'"></script>';
?>
