/* Image gallery script. Big Image */ 

$(document).ready(function(){

    jQuery('ul.nav li.dropdown').hover(function() {
        //jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
        //jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
    
    jQuery('ul.nav li.dropdown').click(function(e) {

        var target = $(e.target)
        
        if($(this).hasClass('open'))
        { 
             if(target.is('ul.nav li.dropdown>a'))
             {
                window.location = $(this).find('a').attr('href');
             } 
        }
        else if( $(this).find('.dropdown-menu').css('display') != 'block')
        {
          $(this).addClass('open');
          jQuery(this).find('.dropdown-menu').fadeIn();
          return false;
        }
    });
    
    /*
    $('.selectpicker').selectpicker({
        style: 'btn-large'
    });
    
    $('.selectpicker-small').selectpicker({
        style: 'btn-default'
    });
    */
   
    $("a.developed_by").hover(
      function () {
        $(this).animate({ 
            opacity: 1
        }, 200 );
      }, 
      function () {
        $(this).animate({ 
            opacity: 0.4
        }, 200 );
      }
    );
    
    // iOS (touchstart), other (click)
    $(document).on('touchstart click', 'a.preview:not(.direct-download)', function () {
        var myLinks = new Array();
        var current = $(this).attr('href');
        var curIndex = 0;
         
        $('.files-list a:not(.direct-download)').each(function (i) {
            var img_href = $(this).attr('href');
            myLinks[i] = img_href;
            if(current == img_href)
                curIndex = i;
        });
        
        options = {index: curIndex}
        
        blueimp.Gallery(myLinks,options);
        
        return false;
    });   
    
});

function support_history_api()
{
    return !!(window.history && history.pushState);
}

/* End Image gallery script. Big Image */ 

function custom_number_format(val)
{
    return val.toFixed(2);
}

function searchpopup() {
	$('.btn-popup').on('click', function(e){
		//alert('test');
		$('.block-search-popup').addClass('show');
		$('body').addClass('overflowfix');
	})
	$('#search-start').on('click', function(e) {
		$('.block-search-popup').removeClass('show');
		$('body').removeClass('overflowfix');
	})
	$('.btn-close-lightbox').on('click', function(e) {
		$('.block-search-popup').removeClass('show');
		$('body').removeClass('overflowfix');
	})
}

function filterpopup() {
	$('.customfilter').on('click', function(e){
		//alert('test');
		$('.filter-checkbox-container').addClass('show');
		$('body').addClass('overflowfix');
	});
	$('.refresh_filters').on('click', function(e) {
		$('.filter-checkbox-container').removeClass('show');
		$('body').removeClass('overflowfix');
	});
	$('.btn-close-lightbox2').on('click', function(e) {
		$('.filter-checkbox-container').removeClass('show');
		$('body').removeClass('overflowfix');
	});
}


function matchactive() {
	$(document).on('change', function(){
		//alert('t00');
		$('ul.right_categoriesmenu .collapse').removeClass('in');
		//$('ul.right_categoriesmenu li').removeClass('active').addClass('nonactive');
		
		var menuactive = $('ul.dropdown-menu li.selected .text').html();
		$('ul.right_categoriesmenu span.item:contains('+menuactive+')').parents('.nav-item').next('ul').addClass('in');
		//$('ul.right_categoriesmenu span.item:contains('+menuactive+')').parents('li').addClass('active').siblings().removeClass('nonactive');
	});
}
$(document).ready(function() {
  // Custom 
  var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
	var headerH = $('.top-header').height();
	
    if (scrollElement.scrollTop() >= headerH){
      stickyWrapper.height(stickyHeight);
      sticky.addClass("affix");
       sticky.removeClass("affix-top");
    }
    else{
      sticky.removeClass("affix");
      sticky.addClass("affix-top");
      stickyWrapper.height('auto');
    }
  };
  
  // Find all data-toggle="sticky-onscroll" elements
  $('[data-spy="affix2"]').each(function() {
    var sticky = $(this);
    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass('sticky');
    
    // Scroll & resize events
    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
      stickyToggle(sticky, stickyWrapper, $(this));
    });
    
    // On page load
    stickyToggle(sticky, stickyWrapper, $(window));
  });
  
    $('[data-spy="affix"]').on('affixed.bs.affix', function(){
       $('.sticky-wrapper').css('display','block')
    });
  
    $('[data-spy="affix"]').on('affix-top.bs.affix', function(){
       $('.sticky-wrapper').css('display','none')
    });
	
	searchpopup();
	filterpopup();
	
	matchactive();
});
$( document ).ajaxComplete(function() {
      filterpopup();
    });