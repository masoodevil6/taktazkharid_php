(function ($) {

    $.fn.gif_show = function (option) {

        return this.each(function () {

            var setting = $.extend({
                "src_bg" : "plugin/gif_show/bg_gif_show.jpg",
                "text" : "مشاهده همه پیشنهاد های شگفت انگیز",
                "src" : [],
                "num_gif" : "3",
                "href" : ""
            }, option);


            var mother = $(this);
            var width_mother = parseInt(mother.css("width"));
            mother.css("height" , width_mother*0.2 + "px");


            mother.append("<div class='frome_gif'> <img class='bg_frome_gif' src='"+setting.src_bg +"'> <div class='right_gif_show'></div> <a href='"+setting.href +"' class='txt_mid_gif_show'>"+setting.text+"</a> <div class='left_gif_show'></div>  </div>");


            for (var i=0 ; i<setting.num_gif ; i++){
                mother.find(".frome_gif").find(".right_gif_show").append("<div class='border_gif'> <img class='gifs_show'/> </div>");
                mother.find(".frome_gif").find(".left_gif_show").append("<div class='border_gif'> <img class='gifs_show'/> </div>");

                //mother.find(".frome_gif").find(".gifs_show").eq(i).css("left" , width_mother*0.01 + "px")

            }

            mother.find(".frome_gif").css({"border-radius" : width_mother*0.015 + "px"});
            mother.find(".frome_gif").find(".txt_mid_gif_show").css({"border-radius" : width_mother*0.01 + "px", "font-size" : width_mother*0.012 + "pt" , "line-height" : width_mother*0.06 +"px"});
            mother.find(".frome_gif").find(".gifs_show").css({"width" : width_mother*0.08 + "px" , "height" : width_mother*0.08 + "px" });


            var choose_img_gif =[];
            var choose_gif =[];

            for (var i=0 ; i< setting.num_gif*2 ;i++){
                choose_gif[i] = Math.floor(4*Math.random());
                choose_img_gif[i] = Math.floor(setting.src.length*Math.random());

                mother.find(".gifs_show").eq(i).css("animation-name" , "Aanimat" + choose_gif[i]);
                mother.find(".gifs_show").eq(i).attr("src" , setting.src[choose_img_gif[i]])
            }

            setInterval(function () {
                for (var i=0 ; i< setting.num_gif*2 ;i++){

                    mother.find(".gifs_show").eq(i).css("animation-name" , "Aanimat" + choose_gif[i]);
                    mother.find(".gifs_show").eq(i).attr("src" , setting.src[choose_img_gif[i]]);

                    choose_gif[i] = Math.floor(4*Math.random());
                    choose_img_gif[i] = Math.floor(setting.src.length*Math.random());
                }
            },2500);





            $(window).resize(function () {
                var width_mother = parseInt(mother.css("width"));
                mother.css("height" , width_mother*0.2 + "px");

                mother.find(".frome_gif").css({"border-radius" : width_mother*0.015 + "px"});
                mother.find(".frome_gif").find(".txt_mid_gif_show").css({"border-radius" : width_mother*0.01 + "px", "font-size" : width_mother*0.012 + "pt" , "line-height" : width_mother*0.06 +"px"});
                mother.find(".frome_gif").find(".gifs_show").css({"width" : width_mother*0.08 + "px" , "height" : width_mother*0.08 + "px" });
            })
        })


    }



})(jQuery);


