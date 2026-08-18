(function ($) {

    $.fn.list_down = function (option) {

        return this.each(function () {

            var setting = $.extend({
                title : "title",
                list: "mytag",
                closs :  "on",
                lang: "fa",
                colorTitleOn : "#d2d2d2",
                colorTitleOff : "#e6e6e6",
                colorlist: "#ededed",
                click : "on",
                show : "off"
            }, option);


            var mother_list = $(this);
            var width_mother = parseInt(mother_list.css("width"));

            switch (setting.lang) {
                case "eng":
                    mother_list.append("<div class='titleDown'> <div class='titleList'> " + setting.title + "</div> <img class='arrowList' src='plugin/list_down/arrow.png'/></div>");
                    mother_list.find(".titleDown").find(".titleList").css({"float": "left",  "font-size" : width_mother*0.015 + "pt" ,  "padding" : "0 " +width_mother*0.025 +"px"});
                    mother_list.find(".titleDown").find(".arrowList").css({"float": "right", "width" : width_mother*0.005 +"px" ,  "height" : width_mother*0.005 +"px"});
                    break;

                case "fa":
                    mother_list.append("<div class='titleDown'> <img class='arrowList' src='plugin/list_down/arrow.png'/> <div class='titleList'> " + setting.title + "</div> </div>");
                    mother_list.find(".titleDown").find(".arrowList").css({"float": "left" , "width" : width_mother*0.0075 +"px" ,  "height" : width_mother*0.0075 +"px"});
                    mother_list.find(".titleDown").find(".titleList").css({"float": "right",  "font-size" : width_mother*0.015 + "px" , "padding" : "0 " +width_mother*0.025 +"px"});
                    break;
            }

            mother_list.find(".titleDown").css({"background":setting.colorTitleOff , "height" : width_mother*0.02 + "px" , "border-radius" : width_mother*0.0075 +"px " +  width_mother*0.0075 +"px 0 0"});
            mother_list.find(".titleDown").find(".arrowList").css({"margin-left" : width_mother*0.0025 + "%" , "margin-top" : width_mother*0.0005 + "%"});


            mother_list.append("<div class='listDown'></div>");


            $(window).resize(function () {
                width_mother = parseInt(mother_list.css("width"));
                mother_list.find(".titleDown").find(".titleList").css({"font-size" : width_mother*0.015 + "px" , "padding" : "0 " +width_mother*0.025 +"px"});
                mother_list.find(".titleDown").css({"height" : width_mother*0.02 + "px" , "border-radius" : width_mother*0.0075 +"px " +  width_mother*0.0075 +"px 0 0"});
                mother_list.find(".titleDown").find(".arrowList").css({"margin-left" : width_mother*0.0025 + "%" , "margin-top" : width_mother*0.0005 + "%",  "width" : width_mother*0.0075 +"px" ,  "height" : width_mother*0.0075 +"px"});


                mother_list.find(".listDown").css("display" , "block");

                setTimeout(function () {
                    if (setting.show ==="on"){
                        mother_list.find(".listDown").css("display" , "block");
                        mother_list.find(".titleDown").css({"background": setting.colorTitleOn});
                        mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(0deg)")
                    }
                    else {
                        mother_list.find(".listDown").css("display" , "none");
                        mother_list.find(".titleDown").css({"background":setting.colorTitleOff});
                        mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(180deg)")
                    }
                },1);
            });



            mother_list.find(".listDown").css("display" , "block");

            setTimeout(function () {
                if (setting.show ==="on"){
                    mother_list.find(".listDown").css("display" , "block");
                    mother_list.find(".titleDown").css({"background": setting.colorTitleOn});
                    mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(0deg)")
                }
                else {
                    mother_list.find(".listDown").css("display" , "none");
                    mother_list.find(".titleDown").css({"background":setting.colorTitleOff});
                    mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(180deg)")
                }
            },1);






            mother_list.find(".listDown").append(setting.list);

            mother_list.find(".listDown").children().css({
                "border" : "#A7A7A7 2px solid",
                "border-radius" : "0 0 5px 5px",
                "background": setting.colorlist});



            ///......

            for (var i=0; i< $(".titleDown").length ; i++){
                mother_list.find(".titleDown").attr("data" , i)
            }



            switch (setting.click) {
                case "on":

                    mother_list.find(".titleDown").click(function () {

                        if (setting.closs === "on"){

                            if (mother_list.find(".listDown").css("display") === "none") {
                                var numList = parseInt(mother_list.find(".titleDown").attr("data"));
                                for (var j=0; j< $(".titleDown").length ; j++){
                                    if (numList == j){
                                        $(".titleDown").eq(j).css({"background": setting.colorTitleOn});
                                        $(".listDown").eq(j).css({"display": "block"});
                                        $(".titleDown").eq(j).find(".arrowList").css("transform", "rotate(0deg)")
                                    }
                                    else {
                                        $(".listDown").eq(j).css({"display": "none"});
                                        $(".titleDown").eq(j).css({"background": setting.colorTitleOff});
                                        $(".titleDown").eq(j).find(".arrowList").css("transform", "rotate(180deg)")
                                    }
                                }
                            }

                            else {
                                mother_list.find(".titleDown").css({"background": setting.colorTitleOff});
                                mother_list.find(".listDown").css({"display": "none"});
                                mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(180deg)")
                            }

                        }


                        else {
                            if (mother_list.find(".listDown").css("display") === "none") {
                                mother_list.find(".titleDown").css({"background": setting.colorTitleOn});
                                mother_list.find(".listDown").css({"display": "block"});
                                mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(0deg)")
                            }
                            else {
                                mother_list.find(".titleDown").css({"background": setting.colorTitleOff});
                                mother_list.find(".listDown").css({"display": "none"});
                                mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(180deg)")
                            }
                        }
                    });
                    break;

                case "off":
                    mother_list.hover(function () {
                        mother_list.find(".titleDown").css({"background":setting.colorTitleOn});
                        mother_list.find(".listDown").css({"display" : "block"});
                        mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(0deg)")
                    },function () {
                        mother_list.find(".titleDown").css({"background":setting.colorTitleOff});
                        mother_list.find(".listDown").css({"display" : "none"});
                        mother_list.find(".titleDown").find(".arrowList").css("transform", "rotate(180deg)")
                    });
                    break;
            }


        })


    }



})(jQuery);


