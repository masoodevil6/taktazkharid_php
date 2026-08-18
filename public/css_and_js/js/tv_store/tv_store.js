var video_player = $(".video_player");
var src = video_player.attr("data-src");
var poster = video_player.attr("data-poster");
var title = video_player.attr("data-title");

video_player.video_player({
    src : src,
    poster : poster,
    title : title
});



$(".form_text").find("img").css({"width" : "" , "height" : ""});