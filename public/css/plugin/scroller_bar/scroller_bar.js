(function ($) {

    $.fn.scroller_bar = function (option) {

        return this.each(function () {

            var setting = $.extend({
                "scrollY" : true,
                "scrollX" : true
            }, option);

            var body = $(this);

            var window_width = $(window).width();
            var window_height= $(window).height();

            var width_body = parseInt(body.css("width"));
            var height_body = parseInt(body.css("height"));



            var btn = false;

            $(document).keyup(function( event ) {
                btn =false;
            }).keydown(function( event ) {
                btn =false;
                if(event.which ===16){
                    btn =true
                }
            });




            var forme_scrollerY = "";
            var scroller_divY ;
            var scrollerY ;
            var scroller_barY ;


            ///scrollY
            if ((parseInt(body.css("height"))/$(window).height())>1){
                scrollY();
            }
            function scrollY() {
                if (setting.scrollY ===true && (parseInt(body.css("height"))/$(window).height())>1){
                    body.css({"overflow" : "hidden" , "user-select" : "none"});

                    body.append("<div class='forme_scrollerY'> <div class='scroller_divY'> <div  class='scroller_barY'><div  class='scrollerY'> </div></div>  </div> </div>");
                    forme_scrollerY = body.find(".forme_scrollerY");
                    scroller_divY = forme_scrollerY.find(".scroller_divY");
                    scrollerY = scroller_divY.find(".scrollerY");
                    scroller_barY = scroller_divY.find(".scroller_barY");


                    var height_scroller_bar = parseInt(scroller_barY.css("height"));



                    scrollerY.css({"height" : ($(window).height()/parseInt(body.css("height")))*200 + "px"});


                    scroller_barY.css({"border-radius" : width_body*0.05+"px"});


                    forme_scrollerY.hover(function () {
                        if (holdY === false){
                            forme_scrollerY.fadeTo(200,0.8);
                            setTimeout(function () {
                                forme_scrollerY.fadeTo(500,0.4);
                            },3000)
                        }
                        else {
                            forme_scrollerY.fadeTo(200,0.8);
                        }
                    },function () {
                        if (holdY === false){
                            forme_scrollerY.fadeTo(500,0.4);
                        }
                    });



                    ///scroolY
                    var holdY = false;
                    var mouseY;
                    var scrollY = $(window).scrollTop();
                    var position_mouseY;

                    var minY;
                    var maxY;
                    var percent_scrollerY = 0;
                    scrollerY.css("top" ,- parseInt(scrollerY.css("height"))/2 +"px");

                    var margin_top = parseInt(scroller_barY.css("top"));



                    forme_scrollerY.mousedown(function () {
                        holdY = true;
                    });

                    $( document ).bind('mouseup mouseleave', function() {
                        holdY = false;
                        forme_scrollerY.fadeTo(500,0.4);
                    });




                    $( document ).on( "mousemove mousedown", function( event ) {
                        mouseY = event.pageY;
                        scrollY= $(window).scrollTop();
                        width_body = parseInt(body.css("width"));
                        height_body = parseInt(body.css("height"));

                        if (holdY === true){
                            forme_scrollerY.css("opacity","0.8");
                            minY = scroller_barY.offset().top  ;
                            maxY = minY + height_scroller_bar ;
                            position_mouseY = mouseY - minY ;

                            if (mouseY < minY){
                                scrollerY.css("top" ,- parseInt(scrollerY.css("height"))/2 +"px");
                                percent_scrollerY = 0;
                            }
                            else if (mouseY>=minY && mouseY<=maxY){
                                percent_scrollerY = (position_mouseY)/(height_scroller_bar);
                                scrollerY.css({"top" : percent_scrollerY*height_scroller_bar - parseInt(scrollerY.css("height"))/2 +"px"});
                            }
                            else if(mouseY>maxY){
                                percent_scrollerY = 1;
                            }

                            $(window).scrollTop(percent_scrollerY*(height_body + margin_top- window_height) );
                        }
                    });




                    $(window).on( 'DOMMouseScroll mousewheel', function ( event ) {
                        if (btn === false){
                            if (event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0 ) {
                                //alternative options for wheelData: wheelDeltaX & wheelDeltaY
                                //scroll down
                                if (percent_scrollerY + 0.05 > 1) {
                                    percent_scrollerY = 1
                                }
                                else {
                                    percent_scrollerY += 0.05
                                }
                            }

                            else {
                                //scroll up
                                if (percent_scrollerY - 0.05 < 0) {
                                    percent_scrollerY = 0
                                }
                                else {
                                    percent_scrollerY -= 0.05
                                }
                            }
                            $(window).scrollTop(percent_scrollerY * (height_body + margin_top - window_height));
                            scrollerY.animate({"top": percent_scrollerY * height_scroller_bar - parseInt(scrollerY.css("height")) / 2 + "px"}, 20);

                            return false;
                        }
                    });



                    $(window).resize(function () {
                        window_width = $(window).width();
                        window_height= $(window).height();

                        width_body = parseInt(body.css("width"));
                        height_body = parseInt(body.css("height"));

                        scrollY = $(window).scrollTop();
                        margin_top = parseInt(scroller_barY.css("top"));

                        scrollerY.css({"height" : ($(window).height()/parseInt(body.css("height")))*200 + "px"});

                        height_scroller_bar = parseInt(scroller_barY.css("height"));


                        scroller_barY.css({"border-radius" : width_body*0.05+"px"});

                        height_scroller_bar = parseInt(scroller_barY.css("height"));

                        scrollerY.css({"top" : percent_scrollerY*height_scroller_bar - parseInt(scrollerY.css("height"))/2 +"px"});
                        $(window).scrollTop(percent_scrollerY*(height_body + margin_top- window_height) );

                        if ((parseInt(body.css("height"))/$(window).height())< 1){
                            forme_scrollerY.remove()
                            forme_scrollerY = "";
                        }
                    })
                }
            }





            var forme_scrollerX = "" ;
            var scroller_divX ;
            var scrollerX ;
            var scroller_barX ;


            ///scrollX

            if ((parseInt(body.css("width"))/$(window).width())>1){
                scrollX();
            }
            function scrollX() {
                if (setting.scrollX === true && (parseInt(body.css("width")) / $(window).width()) > 1) {
                    body.css({"overflow": "hidden", "user-select": "none"});

                    body.append("<div class='forme_scrollerX'> <div class='scroller_divX'> <div  class='scroller_barX'><div  class='scrollerX'> </div></div>  </div> </div>");
                    forme_scrollerX = body.find(".forme_scrollerX");
                    scroller_divX = forme_scrollerX.find(".scroller_divX");
                    scrollerX = scroller_divX.find(".scrollerX");
                    scroller_barX = scroller_divX.find(".scroller_barX");

                    var width_scroller_bar = parseInt(scroller_barX.css("width"));


                    scrollerX.css({"width": ($(window).width() / parseInt(body.css("width"))) * 200 + "px"});


                    scroller_barX.css({"border-radius": width_body * 0.05 + "px"});


                    forme_scrollerX.hover(function () {
                        if (holdX === false) {
                            forme_scrollerX.fadeTo(200, 0.8);
                            setTimeout(function () {
                                forme_scrollerX.fadeTo(500, 0.4);
                            }, 3000)
                        }
                        else {
                            forme_scrollerX.fadeTo(200, 0.8);
                        }
                    }, function () {
                        if (holdX === false) {
                            forme_scrollerX.fadeTo(500, 0.4);
                        }
                    });


                    ///scroolY
                    var holdX = false;
                    var mouseX;
                    var scrollX = $(window).scrollLeft();
                    var position_mouseX;

                    var minX;
                    var maxX;
                    var percent_scrollerX = 0;
                    scrollerX.css("left", -parseInt(scrollerX.css("width")) / 2 + "px");

                    var margin_left = parseInt(scroller_barX.css("left"));


                    forme_scrollerX.mousedown(function () {
                        holdX = true;
                    });

                    $(document).bind('mouseup mouseleave', function () {
                        holdX = false;
                        forme_scrollerX.fadeTo(500, 0.4);
                    });


                    $(document).on("mousemove mousedown", function (event) {
                        mouseX = event.pageX;
                        scrollX = $(window).scrollLeft();
                        width_body = parseInt(body.css("width"));
                        height_body = parseInt(body.css("height"));

                        if (holdX === true) {
                            forme_scrollerX.css("opacity", "0.8");
                            minX = scroller_barX.offset().left;
                            maxX = minX + width_scroller_bar;
                            position_mouseX = mouseX - minX;

                            if (mouseX < minX) {
                                scrollerX.css("left", -parseInt(scrollerX.css("width")) / 2 + "px");
                                percent_scrollerX = 0;
                            }
                            else if (mouseX >= minX && mouseX <= maxX) {
                                percent_scrollerX = (position_mouseX) / (width_scroller_bar);
                                scrollerX.css({"left": percent_scrollerX * width_scroller_bar - parseInt(scrollerX.css("width")) / 2 + "px"});
                            }
                            else if (mouseX > maxX) {
                                percent_scrollerX = 1;
                            }

                            $(window).scrollLeft(percent_scrollerX * (width_body + margin_left - window_width));
                        }
                    });

                    $(window).on('DOMMouseScroll mousewheel', function (event) {



                        if (btn === true) {
                            if (event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0) {
                                //alternative options for wheelData: wheelDeltaX & wheelDeltaY
                                // scroll down

                                if (percent_scrollerX - 0.05 < 0) {
                                    percent_scrollerX = 0
                                }
                                else {
                                    percent_scrollerX -= 0.05
                                }

                            }
                            else {
                                //scroll up
                                if (percent_scrollerX + 0.05 > 1) {
                                    percent_scrollerX = 1
                                }
                                else {
                                    percent_scrollerX += 0.05
                                }
                            }

                            scrollerX.animate({"left": percent_scrollerX * width_scroller_bar - parseInt(scrollerX.css("width")) / 2 + "px"}, 20);
                            $(window).scrollLeft(percent_scrollerX * (width_body + margin_left - window_width));

                            return false;
                        }
                    });


                    $(window).resize(function () {
                        window_width = $(window).width();
                        window_height = $(window).height();

                        width_body = parseInt(body.css("width"));
                        height_body = parseInt(body.css("height"));


                        scrollX = $(window).scrollLeft();
                        margin_left = parseInt(scroller_barX.css("left"));
                        scrollerX.css({"width": ($(window).width() / parseInt(body.css("width"))) * 200 + "px"});

                        width_scroller_bar = parseInt(scroller_barX.css("width"));

                        scroller_barX.css({"border-radius": width_body * 0.05 + "px"});

                        width_scroller_bar = parseInt(scroller_barX.css("width"));

                        scrollerX.css({"left": percent_scrollerX * width_scroller_bar - parseInt(scrollerX.css("width")) / 2 + "px"});
                        $(window).scrollTop(percent_scrollerX * (width_body + margin_left - window_width));

                        if ((parseInt(body.css("width"))/$(window).width())< 1){
                            forme_scrollerX.remove();
                            forme_scrollerX = "";
                        }
                    })
                }
            }



            $(window).resize(function () {
                if (forme_scrollerY ===""){
                    if ((parseInt(body.css("height"))/$(window).height())>1){
                        scrollY()
                    }
                }

                if (forme_scrollerX ===""){
                    if ((parseInt(body.css("width"))/$(window).width())>1){
                        scrollX()
                    }

                }
            })

        })

    }



})(jQuery);


