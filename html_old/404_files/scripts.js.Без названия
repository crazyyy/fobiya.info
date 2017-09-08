$(document).ready(function() { 

//serach
var mq = window.matchMedia( "(min-width: 1200px)" );

if (mq.matches) {

} else {
  $(".header_search a").click(function(){
     $(".header_search").animate({width: '260px'});
     $(".header_search input").animate({width: '220px'});
 });  
}

//mobile_menu

$(".mm_btn, .menu_close").click(function() {
        $(".top_menu_wrap").slideToggle();
    });

    $('[href="#"]').click(function(e) {
        e.preventDefault();
    });

  //Слайдер
  $('.slider').bxSlider({  
	auto: true
  });
    jQuery(function($) {
        if (current_page == max_pages) $("#true_loadmore").remove();
        $('#true_loadmore').click(function(e) {
            e.preventDefault();
            $(this).text('Загружаю...');
            var data = {
                'action': 'loadmore',
                'query': true_posts,
                'page': current_page
            };
            $.ajax({
                url: ajaxurl,
                data: data,
                type: 'POST',
                dataType: 'html',
                success: function(data) {
                    if (data) {
                        $(data).appendTo('#results');
                        $('#true_loadmore').text('Показать ещё статьи');
                        current_page++;
                        if (current_page == max_pages) $("#true_loadmore").remove();
                    } else {
                        $('#true_loadmore').remove();
                    }
                }
            });
        });
    });
    $("#newartlink").click(function() {
        $("#new-art").css({
            "display": "block"
        });
        $("#pop-art").css({
            "display": "none"
        });
        $("#newartlink").addClass("current");
        $("#popartlink").removeClass("current");
    });
    $("#popartlink").click(function() {
        $("#pop-art").css({
            "display": "block"
        });
        $("#new-art").css({
            "display": "none"
        });
        $("#popartlink").addClass("current");
        $("#newartlink").removeClass("current");
    });

});