(function ($) {

    $.fn.nav_fix = function (option) {

        return this.each(function () {

            var setting = $.extend({
                "color_nav_up" : ["#a80b04" , "#ff4f4f" , "#b00a08"],

                "color_nav_down" : ["rgb(158, 112, 106)" , "rgb(224, 174, 157)" , "rgb(255, 220, 209)"],

                "color_nav" : ["#3c3c3c","#3f41ee"],

                "nav_up" : ["test1/test1",
                    "test2/test2" ,
                    "test3/test3" ,
                    "test4/test4",
                    "test5/test5",
                    "test6/test6",
                    "test7/test7",
                    "test8/test8",
                    "test9/test9",
                    "test10/test10",
                    "test11/test11",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12",
                    "test12/test12"],

                "nav_down" : [
                    ["testTitle/hrefTitle/test1/hreftest1" , "testTitle2/hrefTitle2/test2/hreftest2"] ,
                    ["testTitle3/hrefTitle3/test3/hreftest3" , "testTitle4/hrefTitle4/test4/hreftest4"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"],
                    ["testTitle5/hrefTitle5/test5/hreftest5" , "testTitle6/hrefTitle6/test6/hreftest6"]],

                "pster_active" : true,

                "poster" : ["" , "" , ""],

                "txt_focus" : "جستجوی ..."
            }, option);


            var width_window = $(window).width();
            var mother_Nav = $(this);

            var forme_nav;
            var width_mother;
            var margin_top;


            ///pc
            if ( width_window > 760){
               pc()
            }
            ///phone
            else {
                phone()
            }



            $(window).resize(function () {
                width_window = $(window).width();
                ///pc
                if ( width_window > 760){
                    forme_nav.remove();
                    pc()
                }
                ///phone
                else {
                    forme_nav.remove();
                    phone()
                }
            });




            function pc() {

                width_mother = parseInt(mother_Nav.css("width"));
                margin_top = parseInt($("body").css("margin-top"));


                ///childS
                mother_Nav.append("<div class='forme_nav'></div>");
                forme_nav = mother_Nav.find(".forme_nav");

                forme_nav.append("<ul class='ul_forme_nav'></ul>");
                var ul_forme_nav = forme_nav.find(".ul_forme_nav");
                ul_forme_nav.append("<ul class='scroller_ul_forme_nav'></ul>");
                var scroller_ul_forme_nav = ul_forme_nav.find(".scroller_ul_forme_nav");

                forme_nav.append("<div class='forme_input_text'></div>");
                var forme_input_text = forme_nav.find(".forme_input_text");
                forme_input_text.append("<img class='icon_search_nav' src='plugin/nav_fix/search.png'>");
                var icon_search_nav = forme_input_text.find(".icon_search_nav");
                forme_input_text.append("<input class='input_nav' type='text' placeholder="+setting.txt_focus +"/>");
                var input_nav = forme_input_text.find(".input_nav");


                for (var i=0 ; i<setting.nav_up.length ; i++){
                    scroller_ul_forme_nav.append("<li draggable='false' class='li_forme_nav'> <a draggable='false' class='a_forme_nav' href=" + setting.nav_up[i].split("/")[1] +">"+ setting.nav_up[i].split("/")[0] +"</a></li>");
                }

                forme_nav.append("<div class='nav_down'><img class='poster_nav'/></div>");


                var li_forme_nav = ul_forme_nav.find(".li_forme_nav");
                var a_forme_nav = li_forme_nav.find(".a_forme_nav");
                var nav_down = forme_nav.find(".nav_down");
                var poster_nav = nav_down.find(".poster_nav");


                //settingS
                mother_Nav.css({"height" : 0.04*width_mother + margin_top + "px"});
                forme_nav.css({"height" : 0.04*width_mother + margin_top + "px" ,"width" : width_mother*0.99+"px" , "padding-right" : width_mother*0.01+"px" ,"background" : "linear-gradient(0deg ," + setting.color_nav_up[0] +"," + setting.color_nav_up[1] +"," +  setting.color_nav_up[2] +")" , "border-radius" : "0 0 "+ width_mother*0.01 + "px " +  width_mother*0.01 + "px" });


                ul_forme_nav.css({"border-radius" : width_mother*0.02 +"px" , "margin-top" : width_mother*0.005+ "px" ,"right" : width_mother*0.036 +"px"});

                li_forme_nav.css({"height" : 0.035*width_mother +"px" ,  "border-left" : width_mother*0.00005 + "px solid #ffdbaa" , "padding-right" : width_mother*0.0025 +"px" });
                a_forme_nav.css({"color" : setting.color_nav[0] ,"line-height" : width_mother*0.0375 +"px", "font-size" : width_mother*0.015 + "pt" , "padding-left" : width_mother*0.01 +"px" , "padding-right" : width_mother*0.01 +"px"});

                nav_down.css({"width" : width_mother +"px" , "height" : width_mother*0.2 +"px", "background" : "linear-gradient(0deg ," + setting.color_nav_down[0] +"," + setting.color_nav_down[1] +"," +  setting.color_nav_down[2] +")" , "border-radius" : width_mother*0.01 + "px" , "border" : width_mother*0.001 + "px  solid #3e3d3d" , "top" : 0.04*width_mother + margin_top + "px"});

                forme_input_text.css({"width" : width_mother*0.04 + "px" , "margin-left" : width_mother*0.025 +"px" , "margin-top" : 0.005*width_mother +"px" , "border-radius" : width_mother*0.25 + "px " + width_mother*0.5 + "px " +width_mother*0.5 + "px " + width_mother*0.25 + "px"});

                icon_search_nav.css({"width" : width_mother*0.015 + "px" , "height" : width_mother*0.015 +"px" , "padding-left" : width_mother*0.015 +"px" , "padding-top" : 0.01*width_mother +"px" });

                input_nav.css({"width" : 0.15*width_mother + "px" , "height" : 0.0175*width_mother +"px" , "left" : 0.04*width_mother +"px" , "margin-top" : 0.0075*width_mother +"px" , "border" : width_mother*0.001 + "px solid #caaf2c8c" , "border-radius" : width_mother*0.05 +"px" , "font-size" : width_mother*0.01 +"pt"});

                //eventS

                var width_nav=0;

                var holdX = false;
                var mouseX_frist;
                var mouseX;
                var right_scoller_fisrt = 0;
                var right_scoller = 0;
                var scroller_position;
                for(var num = 0; num < setting.nav_up.length ; num++){
                    width_nav += li_forme_nav.eq(num).outerWidth(true) + 10
                }

                if (width_nav> parseInt(ul_forme_nav.css("width")) ){
                    scroller_ul_forme_nav.css("width" , width_nav +"px");

                    forme_nav.append("<div class='forme_scroller_left'></div>");
                    var forme_scroller_left = forme_nav.find(".forme_scroller_left");
                    forme_nav.append("<div class='forme_scroller_right'></div>");
                    var forme_scroller_right = forme_nav.find(".forme_scroller_right");

                    forme_scroller_left.css({"width" : width_mother*0.035 + "px" , "border-radius" : "0 0 "  +width_mother*0.01 + "px " + width_mother*0.02 + "px" ,"margin-left" : width_mother*0.24 +"px"});
                    forme_scroller_right.css({"width" : width_mother*0.035 + "px" , "border-radius" :   "0 0 " + width_mother*0.01 + "px "  +width_mother*0.01 + "px"});

                    forme_scroller_left.append("<img class='icon_left_navX' src='plugin/nav_fix/arrow.png'/>");
                    var icon_left_navX = forme_scroller_left.find(".icon_left_navX");

                    icon_left_navX.css({"width" : width_mother*0.015 + "px", "height" : width_mother*0.015 +"px" , "margin-top" : width_mother*0.015 +"px" , "margin-left" : width_mother*0.01 +"px"});

                    forme_scroller_right.append("<img class='icon_right_navX' src='plugin/nav_fix/arrow.png'/>");
                    var icon_right_navX = forme_scroller_right.find(".icon_right_navX");

                    icon_right_navX.css({"width" : width_mother*0.015 + "px", "height" : width_mother*0.015 +"px" , "margin-top" : width_mother*0.015 +"px" , "margin-left" : width_mother*0.01 +"px"});


                    scroller_ul_forme_nav.mousedown(function () {
                        holdX = true;

                        mouseX_frist = event.pageX;
                        right_scoller_fisrt = parseInt(scroller_ul_forme_nav.css("right"));
                    });

                    $(document).bind('mouseup mouseleave', function () {

                        if (holdX ===true){
                            holdX = false;

                            setTimeout(function () {
                                for (var i=0 ; i<setting.nav_up.length ; i++){
                                    a_forme_nav.eq(i).attr("href" , setting.nav_up[i])
                                }
                            },100);

                            if(right_scoller > 0){
                                scroller_ul_forme_nav.css({"right" :  "0px" });
                            }

                            else if (right_scoller < parseInt(ul_forme_nav.css("width")) - width_nav){
                                scroller_ul_forme_nav.css({"right" :  parseInt(ul_forme_nav.css("width")) - width_nav });
                            }
                        }

                    });

                    $(document).on("mousemove", function (event) {
                        mouseX = event.pageX;
                        scroller_position = scroller_ul_forme_nav.offset().left;

                        if (holdX === true){
                            right_scoller = parseInt(scroller_ul_forme_nav.css("right"));

                            scroller_ul_forme_nav.css({"right" : right_scoller_fisrt - (mouseX - mouseX_frist) + "px"});

                            a_forme_nav.attr("href" , "#");

                            clearTimeout(dur_slidDown);
                            dur_slidDown = setTimeout(function () {
                                nav_down.slideUp();
                            },5);
                        }
                        else {

                        }
                    });

                    forme_scroller_left.click(function () {
                        right_scoller_fisrt = parseInt(scroller_ul_forme_nav.css("right"));
                        scroller_ul_forme_nav.css({"right" : right_scoller_fisrt - (width_nav/(setting.nav_up.length)) + "px"});
                        right_scoller = parseInt(scroller_ul_forme_nav.css("right"));

                        if(right_scoller > 0){
                            scroller_ul_forme_nav.css({"right" :  "0px" });
                        }

                        else if (right_scoller < parseInt(ul_forme_nav.css("width")) - width_nav){
                            scroller_ul_forme_nav.css({"right" :  parseInt(ul_forme_nav.css("width")) - width_nav });
                        }

                    });

                    forme_scroller_right.click(function () {
                        right_scoller_fisrt = parseInt(scroller_ul_forme_nav.css("right"));
                        scroller_ul_forme_nav.css({"right" : right_scoller_fisrt + (width_nav/(setting.nav_up.length)) + "px"});
                        right_scoller = parseInt(scroller_ul_forme_nav.css("right"));


                        if(right_scoller > 0){
                            scroller_ul_forme_nav.css({"right" :  "0px" });
                        }

                        else if (right_scoller < parseInt(ul_forme_nav.css("width")) - width_nav){
                            scroller_ul_forme_nav.css({"right" :  parseInt(ul_forme_nav.css("width")) - width_nav });
                        }

                    })

                }


                var search = false;
                var anim_search;
                icon_search_nav.click(function () {
                    if(search ===false){
                        clearTimeout(anim_search);
                        anim_search = setTimeout(function () {
                            search = true;
                            forme_input_text.animate({"width" : width_mother*0.21 + "px"} , 50);
                            input_nav.focus();
                        },25);

                        clearTimeout(dur_slidDown);
                        dur_slidDown = setTimeout(function () {
                            nav_down.slideUp();
                        },50);
                    }
                    else {
                        clearTimeout(anim_search);
                        anim_search = setTimeout(function () {
                            search = false;
                            forme_input_text.animate({"width" : width_mother*0.04 + "px"} , 50);
                        },25)
                    }
                });

                $(window).on('DOMMouseScroll mousewheel', function (event) {
                    clearTimeout(dur_slidDown);
                    dur_slidDown = setTimeout(function () {
                        nav_down.slideUp();
                    },50);

                    clearTimeout(anim_search);
                    anim_search = setTimeout(function () {
                        search = false;
                        forme_input_text.animate({"width" : width_mother*0.04 + "px"} , 50);
                    },25)
                });

                ul_forme_nav.click(function () {
                    clearTimeout(anim_search);
                    anim_search = setTimeout(function () {
                        search = false;
                        forme_input_text.animate({"width" : width_mother*0.04 + "px"} , 50);
                    },25)
                });



                var index;
                var dur_slidDown;
                var number = 1;
                var navGet;
                a_forme_nav.hover(function () {
                    $(".ul_nav_down").remove();

                    clearTimeout(dur_slidDown);
                    dur_slidDown = setTimeout(function () {
                        nav_down.slideDown();
                    },50);

                    $(this).css({"color" : setting.color_nav[1] , "background" : "white" , "opacity" : "0.5" , "border-radius" : width_mother*0.01 + "px"});

                    index = $(this).parent().index();
                    navGet = setting.nav_down[index];

                    if (setting.pster_active === true){
                        poster_nav.attr("src" , setting.poster[index]);
                    }

                    for (var j =0 ; j < navGet.length ; j++){
                        nav_down.append("<div class='ul_nav_down'></div>");

                        for (var k=0; k< navGet[j].split("/").length/2 ; k++){
                            if (k === 0){
                                $(".ul_nav_down").eq(j).append("<div class='div_title_nav_down'><a href='"+ navGet[j].split("/")[1] +"'>"+ navGet[j].split("/")[0] +"</a></div>");
                            }
                            else {
                                $(".ul_nav_down").eq(j).append("<div class='div_li_nav_down'> <a href='" + navGet[j].split("/")[k + number + 1] +"'> " + navGet[j].split("/")[k + number] +"</a></div>")
                                number ++;
                            }
                        }
                        number = 1;
                    }


                    $(".ul_nav_down").css({ "margin-right" : width_mother*0.02 +"px" , "border-left" : width_mother*0.00005 + "px solid #9c9c9c" , "margin-top" : width_mother*0.0125 +"px"});
                    $(".ul_nav_down a").css({ "font-size" : width_mother*0.01 +"pt" , "border-radius" : width_mother*0.01 + "px"});

                    $(".div_title_nav_down").css({ "margin-top" : width_mother*0.01 +"px"});
                    $(".div_li_nav_down").css({ "margin-top" : width_mother*0.005 +"px"})

                },function () {
                    $(this).css({"color" : setting.color_nav[0] , "background" : "none" , "opacity" : "1"} );

                });


                forme_nav.hover("",function () {
                    clearTimeout(dur_slidDown);
                    dur_slidDown = setTimeout(function () {
                        nav_down.slideUp();
                    },50);
                });


                $(window).scroll(function ( event ) {
                    if ($(window).scrollTop() < mother_Nav.offset().top){
                        forme_nav.css({"position" : "relative"});
                    }
                    else {
                        forme_nav.css({"position" : "fixed"});
                    }
                });
            }





            function phone() {
                width_mother = parseInt(mother_Nav.css("width"));
                margin_top = parseInt($("body").css("margin-top"));


                ///childS
                mother_Nav.append("<div class='forme_nav'></div>");
                forme_nav = mother_Nav.find(".forme_nav");

                ///childS --> btn Show
                forme_nav.append("<div class='btn_show_nav'></div>");
                var btn_show_nav = forme_nav.find(".btn_show_nav");
                btn_show_nav.append("<div class='line_show'></div>");
                btn_show_nav.append("<div class='line_show'></div>");
                btn_show_nav.append("<div class='line_show'></div>");
                var line_show = btn_show_nav.find(".line_show");


                ///childS --> main_nav
                forme_nav.append("<div class='blur_main_nav_phone'></div>");
                var blur_main_nav_phone = forme_nav.find(".blur_main_nav_phone");
                forme_nav.append("<div class='main_nav_phone'></div>");
                var main_nav_phone = forme_nav.find(".main_nav_phone");


                ///childS --> main_nav ---> objs
                main_nav_phone.append("<div class='forme_scroller_nav'></div>");
                var forme_scroller_nav = main_nav_phone.find(".forme_scroller_nav");
                main_nav_phone.append("<div class='form_main_nav'></div>");
                var form_main_nav = main_nav_phone.find(".form_main_nav");



                ///childS ---> searcher
                forme_nav.append("<div class='forme_input_text'></div>");
                var forme_input_text = forme_nav.find(".forme_input_text");
                forme_input_text.append("<img class='icon_search_nav' src='plugin/nav_fix/search.png'>");
                var icon_search_nav = forme_input_text.find(".icon_search_nav");
                forme_input_text.append("<input class='input_nav' type='text' placeholder="+setting.txt_focus +"/>");
                var input_nav = forme_input_text.find(".input_nav");


                for (var i=0 ; i<setting.nav_up.length ; i++){
                    form_main_nav.append("<div class='li_main_nav'> <a draggable='false' class='a_main_nav' href='#'>"+ setting.nav_up[i].split("/")[0] +"</a> <img class='icon_nav' src='plugin/nav_fix/arrow.png'/></div>");
                    $(".li_main_nav").eq(i).append("<div class='nav_down_phone'></div>");

                    for (var j=0 ; j<setting.nav_down[i].length ; j++){
                        for (var k = 0 ; k < setting.nav_down[i][j].split("/").length/2 ; k++ ){
                            if (k === 0){
                                $(".nav_down_phone").eq(i).append("<div class='div_title_nav_down_phone'><a  class='a_title_nav_down_phone'draggable='false'  href='"+ setting.nav_down[i][j].split("/")[1] +"'>"+ setting.nav_down[i][j].split("/")[0] +"</a></div>");
                            }
                            else {
                                $(".nav_down_phone").eq(i).append("<div class='div_li_nav_down_phone'> <a draggable='false' class='a_li_nav_down_phone' href='" + setting.nav_down[i][j].split("/")[2*j + 1] +"'> " + setting.nav_down[i][j].split("/")[2*j] +"</a></div>");
                            }
                        }
                    }
                }

                var li_main_nav = form_main_nav.find(".li_main_nav");

                var a_main_nav = li_main_nav.find(".a_main_nav");

                var icon_nav = li_main_nav.find(".icon_nav");

                var nav_down_phone = li_main_nav.find(".nav_down_phone");
                var div_title_nav_down_phone = nav_down_phone.find(".div_title_nav_down_phone").children();
                var div_li_nav_down_phone = nav_down_phone.find(".div_li_nav_down_phone").children();

                var frome_nav_down = li_main_nav.find(".frome_nav_down");


                ///forme_scolle
                forme_scroller_nav.append("<div class='scoller_Y'></div>");
                var scoller_Y = forme_scroller_nav.find(".scoller_Y");





                ///setting
                mother_Nav.css({"height" : 0.075*width_mother + margin_top + "px"});
                forme_nav.css({"height" : 0.075*width_mother + margin_top + "px" ,"width" : width_mother*0.99+"px" , "padding-right" : width_mother*0.01+"px" ,"background" : "linear-gradient(0deg ," + setting.color_nav_up[0] +"," + setting.color_nav_up[1] +"," +  setting.color_nav_up[2] +")" , "border-radius" : "0 0 "+ width_mother*0.01 + "px " +  width_mother*0.01 + "px" });


                ///setting--->btn Show
                btn_show_nav.css({"width" : width_mother*0.075 + "px" , "margin-right" : width_mother*0.025 +"px" , "margin-top" : 0.01*width_mother +"px", "border-radius" : width_mother*0.5 + "px " + width_mother*0.25 + "px " +width_mother*0.25 + "px " + width_mother*0.5 + "px"});
                line_show.css({"width" : width_mother*0.055 + "px" , "height" : width_mother*0.0075 + "px" , "margin-left" : width_mother*0.015 +"px" , "margin-top" : width_mother*0.0125 +"px" , "border-radius" : width_mother*0.02 +"px"});


                ///setting--->searcher
                forme_input_text.css({"width" : width_mother*0.075 + "px" , "margin-left" : width_mother*0.025 +"px" , "margin-top" : 0.01*width_mother +"px" , "border-radius" : width_mother*0.25 + "px " + width_mother*0.5 + "px " +width_mother*0.5 + "px " + width_mother*0.25 + "px"});
                icon_search_nav.css({"width" : width_mother*0.025 + "px" , "height" : width_mother*0.025 +"px" , "padding-left" : width_mother*0.025 +"px" , "padding-top" : 0.02*width_mother +"px" });
                input_nav.css({"width" : 0.35*width_mother + "px" , "height" : 0.05*width_mother +"px" , "left" : 0.075*width_mother +"px" , "margin-top" : 0.0075*width_mother +"px" , "border" : width_mother*0.001 + "px solid #caaf2c8c" , "border-radius" : width_mother*0.05 +"px" , "font-size" : width_mother*0.02 +"pt"});


                ///setting --> main_phone
                var height_window = $(window).height() - parseInt(forme_nav.css("height"));
                blur_main_nav_phone.css({"width" :"0px" , "height" : height_window + "px" , "top" : parseInt(forme_nav.css("height")) + "px"});
                main_nav_phone.css({"width" : "0px" , "height" : height_window + "px" , "top" : parseInt(forme_nav.css("height")) + "px" ,  "background" : "linear-gradient(270deg ," + setting.color_nav_down[0] +"," + setting.color_nav_down[1] +"," +  setting.color_nav_down[2] +")" , "border-radius" : width_mother*0.02 + "px " + "0 0 "+  width_mother*0.02 + "px"});




                li_main_nav.css({ "border-bottom" : width_mother*0.001 +"px solid #f9f9f9" });

                a_main_nav.css({"border-radius" : width_mother*0.01 + "px" , "font-size" : width_mother*0.025 + "pt", "color" : setting.color_nav[0] });

                icon_nav.css({"width" : 0.025*width_mother + "px" , "height" : 0.025*width_mother + "px" , "margin-right" : 0.025*width_mother + "px"});

                div_title_nav_down_phone.css({"border-radius" : width_mother*0.01 + "px" , "font-size" : width_mother*0.02 +"pt"});
                div_li_nav_down_phone.css({"border-radius" : width_mother*0.01 + "px" , "font-size" : width_mother*0.0175 +"pt"});


                form_main_nav.css({"border-right" : width_mother*0.001 +"px solid #f9f9f9"});

                frome_nav_down.css({"width" : width_mother*0.2 +"px"});

                nav_down_phone.css({"border-radius" : width_mother*0.025 +"px"});

                forme_scroller_nav.css({"margin-top" : width_mother*0.025 + "px", "border-radius" : width_mother*0.02 +"px"});


                scoller_Y.css({"width" : width_mother*0.025 + "pt" , "height" : width_mother*0.1 + "px" , "border-radius" : width_mother*0.01 + "px" , "margin-left" : -width_mother*0.005 +"px" });




                ////events

                var show_nav = false;
                var anim_show_nav;
                var index;

                var height_nav = 0;

                var anim_show_nav_down;

                var percent_scollerY = 0;

                var height_scollerY = parseInt(forme_scroller_nav.css("height"));
                var mouseY;
                var top_scoller;
                var holdY = false;


                btn_show_nav.click(function () {

                    percent_scollerY = 0;
                    scoller_Y.css("top" ,  "0px" );
                    form_main_nav.css("top" ,  "0px" );


                    icon_nav.css({"transform":  "rotate(0deg)" });
                    $(".a_main_nav").css("pointer-events" , "none");


                    if( show_nav === false){
                        clearTimeout(anim_show_nav);
                        anim_show_nav = setTimeout(function () {
                            show_nav = true;
                            blur_main_nav_phone.css({"width" :  width_mother +"px"});
                            main_nav_phone .animate({"width" : width_mother*0.6 +"px"} , 100)
                        });

                        nav_down_phone.slideUp(1);

                        li_main_nav.hover(function (event) {
                            $(".a_main_nav" ,this).css({"color" : setting.color_nav[1] , "background" : "white" , "opacity" : "0.5"});
                        },function () {
                            $(".a_main_nav" ,this).css({"color" : setting.color_nav[0] , "background" : "none" , "opacity" : "1"} );
                        });




                        setInterval(function () {
                            height_nav =0;
                            for (var i=0 ; i<setting.nav_up.length ; i++){
                                height_nav += li_main_nav.eq(i).outerHeight(true)
                            }
                            if (height_nav < height_window){
                                forme_scroller_nav.css("opacity" , "0")
                            }
                            else {
                                forme_scroller_nav.css("opacity", "1");
                            }

                            top_scoller = forme_scroller_nav.offset().top;

                            form_main_nav.css({"height" : height_nav +"px"});

                        },10);



                        if (height_nav < height_window){
                            main_nav_phone.mousedown(function () {
                                holdY = true;

                            });

                            $(document).bind('mouseup mouseleave', function () {

                                if (holdY ===true){
                                    holdY = false;
                                }
                            });

                            $(document).on("mousemove", function (event) {
                                mouseY =  event.pageY;

                                if (holdY === true){

                                    percent_scollerY = ((mouseY - top_scoller - parseInt(scoller_Y.css("height"))/2)/(height_scollerY - parseInt(scoller_Y.css("height")) ));

                                    if (percent_scollerY < 0 ){
                                        percent_scollerY = 0;
                                    }
                                    else if (percent_scollerY > 1){
                                        percent_scollerY = 1  ;
                                    }
                                    scoller_Y.css("top" , percent_scollerY*(height_scollerY - parseInt(scoller_Y.css("height")))  + "px" );

                                    form_main_nav.css("top" , -percent_scollerY*(height_nav - height_scollerY)  + "px" );
                                }
                            });


                            var scolering;


                            main_nav_phone.on('DOMMouseScroll mousewheel', function (event) {
                                $("body").off('scroll');
                                if (event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0) {
                                    //alternative options for wheelData: wheelDeltaX & wheelDeltaY

                                    // scroll down
                                    clearTimeout(scolering);
                                    scolering = setTimeout(function () {
                                        if (percent_scollerY + 0.05 > 1) {
                                            percent_scollerY = 1
                                        }
                                        else {
                                            percent_scollerY += 0.05
                                        }

                                    },10)
                                }
                                else {
                                    //scroll up
                                    clearTimeout(scolering);
                                    scolering = setTimeout(function () {
                                        if (percent_scollerY - 0.05 < 0) {
                                            percent_scollerY = 0
                                        }
                                        else {
                                            percent_scollerY -= 0.05
                                        }

                                    },10);
                                }

                                scoller_Y.css("top" , percent_scollerY*(height_scollerY - parseInt(scoller_Y.css("height")))  + "px" );

                                form_main_nav.css("top" , -percent_scollerY*(height_nav - height_scollerY)  + "px" );

                                return false;

                            });
                        }

                        li_main_nav.click(function () {
                            index = $(this).index();
                            icon_nav.css({"transform":  "rotate(0deg)" });
                            clearTimeout(anim_show_nav_down);

                            for (var i=0 ; i<setting.nav_up.length ; i++){
                                if (i !== index){
                                    $(".a_main_nav").eq(i).css("pointer-events" , "none");
                                }

                                else {
                                    $(".a_main_nav").eq(i).css("pointer-events" , "auto");
                                }
                            }


                            anim_show_nav_down = setTimeout(function () {
                                nav_down_phone.slideUp();
                                nav_down_phone.eq(index).slideDown();

                                $(".a_main_nav").eq(index).attr("href" , setting.nav_up[index].split("/")[1]);

                            },100);

                            icon_nav.eq(index).css({"transform":  "rotate(270deg)" });

                        });

                    }
                    else {
                        clearTimeout(anim_show_nav);
                        anim_show_nav = setTimeout(function () {
                            show_nav = false;
                            blur_main_nav_phone.css({"width" :  "0"});
                            main_nav_phone .animate({"width" : "0"} , 100);
                        });
                    }


                });

                blur_main_nav_phone.click(function () {
                    if( show_nav === true) {
                        clearTimeout(anim_show_nav);
                        anim_show_nav = setTimeout(function () {
                            show_nav = false;
                            blur_main_nav_phone.css({"width" :  "0"});
                            main_nav_phone .animate({"width" : "0"} , 100);

                        })
                    }
                });








                var search = false;
                var anim_search;
                icon_search_nav.click(function () {
                    if(search ===false){
                        clearTimeout(anim_search);
                        anim_search = setTimeout(function () {
                            search = true;
                            forme_input_text.animate({"width" : width_mother*0.5 + "px"} , 50);
                            input_nav.focus();
                        },25);
                    }
                    else {
                        clearTimeout(anim_search);
                        anim_search = setTimeout(function () {
                            search = false;
                            forme_input_text.animate({"width" : width_mother*0.075 + "px"} , 50);
                        },25)
                    }
                });



                $(window).scroll(function ( event ) {
                    if ($(window).scrollTop() < mother_Nav.offset().top){
                        forme_nav.css({"position" : "relative"});
                    }
                    else {
                        forme_nav.css({"position" : "fixed"});
                    }
                });


            }
        })

    }

})(jQuery);


