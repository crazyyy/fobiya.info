$(document).ready(function(){var e=window.matchMedia("(min-width: 1200px)");e.matches||$(".header_search a").click(function(){$(".header_search").animate({width:"260px"}),$(".header_search input").animate({width:"220px"})}),$(".mm_btn, .menu_close").click(function(){$(".top_menu_wrap").slideToggle()}),$('[href="#"]').click(function(e){e.preventDefault()}),$(".slider").bxSlider({auto:!0}),jQuery(function(e){current_page==max_pages&&e("#true_loadmore").remove(),e("#true_loadmore").click(function(a){a.preventDefault(),e(this).text("Загружаю...");var r={action:"loadmore",query:true_posts,page:current_page};e.ajax({url:ajaxurl,data:r,type:"POST",dataType:"html",success:function(a){a?(e(a).appendTo("#results"),e("#true_loadmore").text("Показать ещё статьи"),current_page++,current_page==max_pages&&e("#true_loadmore").remove()):e("#true_loadmore").remove()}})})}),$("#newartlink").click(function(){$("#new-art").css({display:"block"}),$("#pop-art").css({display:"none"}),$("#newartlink").addClass("current"),$("#popartlink").removeClass("current")}),$("#popartlink").click(function(){$("#pop-art").css({display:"block"}),$("#new-art").css({display:"none"}),$("#popartlink").addClass("current"),$("#newartlink").removeClass("current")})});
//# sourceMappingURL=maps/scripts1.js.map
