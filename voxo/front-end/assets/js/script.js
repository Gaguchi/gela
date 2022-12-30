/*-----------------------------------------------------------------------------------

 Template Name:Voxo
 Template URI: themes.pixelstrap.com/Voxo
 Description: This is Ecommerce website
 Author: Pixelstrap
 Author URI: https://themeforest.net/user/pixelstrap

 ----------------------------------------------------------------------------------- */
// 01.Tap to top js
// 02.Image to background js
// 03.menu js
// 04.search box function
// 05.color select function
// 06.size select function
// 07.modal function
// 08.add to cart
// 09.add to wishlist
// 10.category menu
// 11.Footer function
// 12.cart dunction
// 13.log in functions
// 14.product page quantity counter
// 15.other js
// 16.Recently puchase modal
// 17.active ul js
// 18.cookie bar js
// 19.hide header on scroll down js
// 20.shop list-grid js
// 21.Shop List-grid js
// 22.Mouseup functions
// 23.Feather js
// 24.header Dropdown js

(function ($) {
    "use strict";

    /*=====================
      1. Tap To Top Js
      ==========================*/
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 600) {
            $('.tap-to-top').addClass('show');
        } else {
            $('.tap-to-top').removeClass('show');
        }
    });

    $('.tap-to-top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0,
        },
            600
        );
        return false;
    });
    /*=====================
      2. Image to background js
      ==========================*/
    $(".bg-top").parent().addClass("b-top");
    $(".bg-bottom").parent().addClass("b-bottom");
    $(".bg-center").parent().addClass("b-center");
    $(".bg-left").parent().addClass("b-left");
    $(".bg-right").parent().addClass("b-right");
    $(".bg_size_content").parent().addClass("b_size_content");
    $(".bg-img").parent().addClass("bg-size");
    $(".bg-img.blur-up").parent().addClass("blur-up lazyload");
    $(".bg-img").each(function () {
        var el = $(this),
            src = el.attr("src"),
            parent = el.parent();

        parent.css({
            "background-image": "url(" + src + ")",
            "background-size": "cover",
            "background-position": "center",
            "background-repeat": "no-repeat",
            display: "block",
        });

        el.hide();
    });

    /*=====================
      3. Menu js
      ==========================*/
    $(".toggle-nav, .sidebar-toggle").on("click", function () {
        $(".nav-menu").css("right", "0px");
        $(".mobile-poster").css("right", "0px");
        $(".bg-overlay").addClass("show");
    });
    $(".back-btn, .bg-overlay").on("click", function () {
        $(".nav-menu").css("right", "-410px");
        $(".mobile-poster").css("right", "-410px");
        $(".bg-overlay").removeClass("show");
    });

    var contentwidth = $(window).width();
    if (contentwidth < "1200") {
        $(".menu-title").append('<span class="according-menu">+</span>');
        $(".menu-title").on("click", function () {
            $(".menu-title")
                .removeClass("active")
                .find("span")
                .replaceWith('<span class="according-menu">+</span>');
            $(".menu-content").slideUp("normal");
            if ($(this).next().is(":hidden") == true) {
                $(this).addClass("active");
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">-</span>');
                $(this).next().slideDown("normal");
            } else {
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">+</span>');
            }
        });
        $(".menu-content").hide();
    }

    var contentwidth = $(window).width();
    if (contentwidth < "1200") {
        $(".menu-title-level1").append(
            '<span class="according-menu">+</span>'
        );
        $(".menu-title-level1").on("click", function () {
            $(".menu-title-level1")
                .removeClass("active")
                .find("span")
                .replaceWith('<span class="according-menu">+</span>');
            $(".level1").slideUp("normal");
            if ($(this).next().is(":hidden") == true) {
                $(this).addClass("active");
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">-</span>');
                $(this).next().slideDown("normal");
            } else {
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">+</span>');
            }
        });
        $(".nav-sub-childmenu .level1").hide();
    }

    var contentwidth = $(window).width();
    if (contentwidth < "1200") {
        $(".submenu-title").append('<span class="according-menu">+</span>');
        $(".submenu-title").on("click", function () {
            $(".submenu-title")
                .removeClass("active")
                .find("span")
                .replaceWith('<span class="according-menu">+</span>');
            $(".submenu-content").slideUp("normal");
            if ($(this).next().is(":hidden") == true) {
                $(this).addClass("active");
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">-</span>');
                $(this).next().slideDown("normal");
            } else {
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">+</span>');
            }
        });
        $(".submenu-content").hide();
    }

    /*=====================
       4. search box function
       ==========================*/
    $(".search-box").on("click", function () {
        $(this).closest(".main-menu").find(".search-full").addClass("open");
    });
    $(window).on("load resize", function () {
        // open searchbox
        $(".search-type").on("click", function () {
            $(this).parents(".search-full").addClass("show");
        });

        // close seach
        $(".close-search").on("click", function () {
            $(this).closest(".main-menu").find(".search-full").removeClass("open");
        });
    });

    /*=====================
      5. color select function
      ==========================*/
    $(".color-variant li").on("click", function () {
        $(this).toggleClass("selected").siblings("li").removeClass("selected");
    });

    /*=====================
      6. size select function
      ==========================*/
    $(".size-detail ul li").on("click", function () {
        $(this).toggleClass("selected").siblings("li").removeClass("selected");
    });

    /*=====================
       7. modal function
       ==========================*/
    $("#quick-view").on("show.bs.modal", function (event) {
        $(window).trigger("resize");
        // $(".quick-view-slider").slick("slickNext");
        // $(".quick-nav").slick("slickNext");
    });

    /*=====================
       8. Add to cart
       ==========================*/
    $(".product-box .cart-wrap li .addtocart-btn").on("click", function () {
        $.notify({
            icon: "fa fa-check",
            title: "Success!",
            message: "Item Successfully added to your cart",
        }, {
            element: "body",
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
                from: "top",
                align: "right",
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            animate: {
                enter: "animated fadeInDown",
                exit: "animated fadeOutUp",
            },
            icon_type: "class",
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-info progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                "</div>" +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                "</div>",
        });
    });

    /*=====================
      9. Add to wishlist
      ==========================*/
    $(".product-box a.wishlist").on("click", function () {
        $.notify({
            icon: "fa fa-check",
            title: "Success!",
            message: "Item Successfully added in wishlist",
        }, {
            element: "body",
            position: null,
            type: "info",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
                from: "top",
                align: "right",
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            animate: {
                enter: "animated fadeInDown",
                exit: "animated fadeOutUp",
            },
            icon_type: "class",
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-info progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                "</div>" +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                "</div>",
        });
    });

    /*=====================
      10. category menu
       ==========================*/
    $(".toggle-category").on("click", function () {
        $(".category-dropdown").addClass("open");
        $(".bg-overlay").addClass("show");
    });
    $(".back-category, .bg-overlay").on("click", function () {
        $(".category-dropdown").removeClass("open");
        $(".bg-overlay").removeClass("show");
    });
    var contentwidth = $(window).width();
    if (contentwidth < "1200") {
        $(".category-menu li.submenu >a").append(
            '<span class="according-menu">+</span>'
        );
        $(".category-menu li.submenu >a").on("click", function () {
            $(".category-menu li.submenu >a")
                .removeClass("active")
                .find("span")
                .replaceWith('<span class="according-menu">+</span>');
            $(".category-mega-menu").slideUp("normal");
            if ($(this).next().is(":hidden") == true) {
                $(this).addClass("active");
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">-</span>');
                $(this).next().slideDown("normal");
            } else {
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">+</span>');
            }
        });
        $(".category-mega-menu").hide();
    }

    var contentwidth = $(window).width();
    if (contentwidth < "1200") {
        $(".title-category").append('<span class="according-menu">+</span>');
        $(".title-category").on("click", function () {
            $(".title-category")
                .removeClass("active")
                .find("span")
                .replaceWith('<span class="according-menu">+</span>');
            $(".category-childmenu ul").slideUp("normal");
            if ($(this).next().is(":hidden") == true) {
                $(this).addClass("active");
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">-</span>');
                $(this).next().slideDown("normal");
            } else {
                $(this)
                    .find("span")
                    .replaceWith('<span class="according-menu">+</span>');
            }
        });
        $(".category-childmenu ul").hide();
    }

    /*=====================
       11. Footer function
       ==========================*/
    var contentwidth = $(window).width();
    if (contentwidth < "576") {
        $(".footer-title h5").append(
            '<span class="according-menu"><i class="fas fa-chevron-down"></i></span>'
        );
        $(".footer-title").on("click", function () {
            $(".footer-title")
                .removeClass("active")
                .find("span")
                .replaceWith(
                    '<span class="according-menu"><i class="fas fa-chevron-down"></i></span>'
                );
            $(".footer-content").slideUp("normal");
            if ($(this).next().is(":hidden") == true) {
                $(this).addClass("active");
                $(this)
                    .find("span")
                    .replaceWith(
                        '<span class="according-menu"><i class="fas fa-chevron-up"></i></span>'
                    );
                $(this).next().slideDown("normal");
            } else {
                $(this)
                    .find("span")
                    .replaceWith(
                        '<span class="according-menu"><i class="fas fa-chevron-down"></i></span>'
                    );
            }
        });
        $(".footer-content").hide();
    } else {
        $(".footer-content").show();
    }

    /*=====================
       12. cart function
       ==========================*/
    $(".cart-dropdown .cart-media, .cart-dropdown > button").on("click", function () {
        $(".cart-dropdown").addClass("show");
        $("body").addClass("o-hidden");
    });

    $(".back-cart").on("click", function () {
        $(".cart-dropdown").removeClass("show");
        $("body").removeClass("o-hidden");
    });

    /*=====================
        13. Log In functions
     ==========================*/
    $(function () {
        $(".input input")
            .focus(function () {
                $(this)
                    .parent(".input")
                    .each(function () {
                        $("label", this).css({
                            "line-height": "18px",
                            "font-weight": "100",
                            top: "0px",
                        });
                        $(".spin", this).css({
                            width: "100%",
                        });
                    });
            })
            .blur(function () {
                $(".spin").css({
                    width: "0px",
                });
                if ($(this).val() == "") {
                    $(this)
                        .parent(".input")
                        .each(function () {
                            $("label", this).css({
                                "line-height": "60px",
                                "font-weight": "300",
                                top: "10px",
                            });
                        });
                }
            });

        $(".button").click(function (e) {
            var pX = e.pageX,
                pY = e.pageY,
                oX = parseInt($(this).offset().left),
                oY = parseInt($(this).offset().top);
            $(".x-" + oX + ".y-" + oY + "").animate({
                width: "500px",
                height: "500px",
                top: "-250px",
                left: "-250px",
            },
                600
            );
            $("button", this).addClass("active");
        });

        $(".alt-2").on("click", function () {
            if (!$(this).hasClass("material-button")) {
                $(".shape").css({
                    width: "100%",
                    height: "100%",
                    transform: "rotate(0deg)",
                });

                setTimeout(function () {
                    $(".overbox").css({
                        overflow: "initial",
                    });
                }, 600);

                $(this).animate({
                    width: "140px",
                    height: "140px",
                },
                    500,
                    function () {
                        $(".box").removeClass("back");

                        $(this).removeClass("active");
                    }
                );

                $(".overbox .title").fadeOut(300);
                $(".overbox .input").fadeOut(300);
                $(".overbox .button").fadeOut(300);

                $(".alt-2").addClass("material-buton");
            }
        });

        $(".material-button").on("click", function () {
            if ($(this).hasClass("material-button")) {
                setTimeout(function () {
                    $(".overbox").css({
                        overflow: "hidden",
                    });
                    $(".box").addClass("back");
                }, 200);
                $(this).addClass("active").animate({
                    width: "850px",
                    height: "850px",
                });

                setTimeout(function () {
                    $(".shape").css({
                        width: "50%",
                        height: "50%",
                        transform: "rotate(45deg)",
                    });

                    $(".overbox .title").fadeIn(300);
                    $(".overbox .input").fadeIn(300);
                    $(".overbox .button").fadeIn(300);
                }, 700);

                $(this).removeClass("material-button");
            }

            if ($(".alt-2").hasClass("material-buton")) {
                $(".alt-2").removeClass("material-buton");
                $(".alt-2").addClass("material-button");
            }
        });
    });

    /*=====================
      14. Product page Quantity Counter
     ==========================*/
    $(".qty-box .quantity-right-plus").on("click", function () {
        var $qty = $(".qty-box .input-number");
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });

    $(".qty-box .quantity-left-minus").on("click", function () {
        var $qty = $(".qty-box .input-number");
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });

    /*=====================
      15. Other Js
     ==========================*/
    $(".size-box ul li").on("click", function (e) {
        $(".size-box ul li").removeClass("active");
        $("#selectSize").removeClass("cartMove");
        $(this).addClass("active");
        $(this).parent().addClass("selected");
    });

    $("#cartEffect").on("click", function (e) {
        if ($("#selectSize .size-box ul").hasClass("selected")) {
            $("#cartEffect").text("Added to bag ");
            $(".added-notification").addClass("show");
            setTimeout(function () {
                $(".added-notification").removeClass("show");
            }, 5000);
        } else {
            $("#selectSize").addClass("cartMove");
        }
    });

    /*=====================
     16. Recently puchase modal
     ==========================*/
    setInterval(function () {
        $(".recently-purchase").toggleClass("show");
    }, 20000);

    $(".recently-purchase .close-popup").on("click", function () {
        $(".recently-purchase").removeClass("show");
    });

    /*=====================
    17. active ul js
     ==========================*/
    $(".image-section li").on("click", function () {
        $(".image-section li").removeClass("active");
        $(this).addClass("active");
    });

    /*=====================
      18. Coockie js
     ==========================*/
    $(".cookie-bar-section #button").on("click", function () {
        $(".cookie-bar-section").toggleClass("hide");
    });

    /*=====================
     19. Hide header on scroll down js
     ==========================*/
    $(function () {
        var $window = $(window);
        var lastScrollTop = 0;
        var $header = $("header");
        var headerHeight = $header.outerHeight();

        $window.scroll(function () {
            var windowTop = $window.scrollTop();

            if (windowTop >= headerHeight) {
                $header.addClass("nav-down");
            } else {
                $header.removeClass("nav-down");
                $header.removeClass("nav-up");
            }

            if ($header.hasClass("nav-down")) {
                if (windowTop < lastScrollTop) {
                    $header.addClass("nav-up");
                } else {
                    $header.removeClass("nav-up");
                }
            }
            $("#lastscrolltop").text("LastscrollTop: " + lastScrollTop);

            lastScrollTop = windowTop;

            $("#windowtop").text("scrollTop: " + windowTop);
        });
    });

    /*=====================
        20. Shop List-grid js
     ==========================*/
    $(".grid-options .grid-btn").on("click", function () {
        $(".product-list-section").removeClass("list-style");
    });

    $(".grid-options .list-btn").on("click", function () {
        $(".product-list-section").addClass("list-style");
    });
    $('.two-grid').on('click', function (e) {
        $(".product-list-section").removeClass("row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 list-style").addClass("row-cols-2");
    });
    $('.three-grid').on('click', function (e) {
        $(".product-list-section").removeClass("row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 list-style").addClass("row-cols-md-3 row-cols-2");
    });
    $('.grid-btn').on('click', function (e) {
        $(".product-list-section").removeClass("row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 list-style").addClass("row-cols-lg-4 row-cols-md-3 row-cols-2");
    });
    $('.five-grid').on('click', function (e) {
        $(".product-list-section").removeClass("list-style").addClass("row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2");
    });
    var contentwidth = $(window).width();
    if (contentwidth < "1199") {
        $(".grid-options .grid-btn").addClass("active");
    }
    if (contentwidth < "991") {
        $(".grid-options .three-grid").addClass("active");
    }
    if (contentwidth < "767") {
        $(".grid-options .two-grid").addClass("active");
    }

})(jQuery);

/*=====================
    21. Shop List-grid js
 ==========================*/
$(".grid-options ul li").click(function () {
    $(".grid-options li.active").removeClass("active");
    $(this).addClass("active")
});

/*=====================
    22. Mouseup functions
 ==========================*/
$(document).mouseup(function (e) {
    // searchbox
    var searchbar = $(".search-full");
    if (!searchbar.is(e.target) && searchbar.has(e.target).length === 0) {
        $(".search-full").removeClass("show");
    }

    // menu sidebar
    var navMenu = $(".nav-menu");
    if (!navMenu.is(e.target) && navMenu.has(e.target).length === 0) {
        $(".nav-menu").css("right", "-410px");
        $("body").removeClass("o-hidden");
    }

    // category menu
    var categoryMenu = $(".category-dropdown");
    if (!categoryMenu.is(e.target) && categoryMenu.has(e.target).length === 0) {
        $(".category-dropdown").removeClass("open");
        $("body").removeClass("o-hidden");
    }

    // category menu
    var categoryMenu = $(".cart-dropdown");
    if (!categoryMenu.is(e.target) && categoryMenu.has(e.target).length === 0) {
        $(".cart-dropdown").removeClass("show");
        $("body").removeClass("o-hidden");
    }

    // top filter
    var topFilter = $(".top-filter-section .onclick-title");
    if (!topFilter.is(e.target) && topFilter.has(e.target).length === 0) {
        $(".top-filter-section .onclick-title").removeClass("show");
    }
});

/*=====================
    23. Feather js
 ==========================*/
feather.replace();

/*=====================
    24. header Dropdown js
 ==========================*/
$('.dropdown .dropdown-menu li').click(function () {
    $(this).parents('.dropdown').find('span').text($(this).text());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});


/*=====================
    25. Text effect
 ==========================*/

 var words = ['ოდიში აგრო','ქ. ზუგდიდი', 'სოხუმის ქ. 192', 'ჰერბიციდები', 'პესტიციდები', 'ფუნგიციდები', 'სასუქები'],
 part,
 i = 0,
 offset = 0,
 len = words.length,
 forwards = true,
 skip_count = 0,
 skip_delay = 35,
 speed = 80;
var wordflick = function () {
setInterval(function () {
 if (forwards) {
   if (offset >= words[i].length) {
     ++skip_count;
     if (skip_count == skip_delay) {
       forwards = false;
       skip_count = 0;
     }
   }
 }
 else {
   if (offset == 0) {
     forwards = true;
     i++;
     offset = 0;
     if (i >= len) {
       i = 0;
     }
   }
 }
 part = words[i].substr(0, offset);
 if (skip_count == 0) {
   if (forwards) {
     offset++;
   }
   else {
     offset--;
   }
 }
 $('.word').text(part);
},speed);
};

$(document).ready(function () {
wordflick();
});




/*=====================
    27. shop element
 ==========================*/


// $('#shop-1').on('click', function (e) {
//     if (!$(this).hasClass("active")){
//         $("#shop-2").removeClass("active");
//         $(this).addClass("active");
//         $(".products-section-2").removeClass("unhidden-section").addClass("hidden-section");
//         $(".products-section-1").removeClass("hidden-section").addClass("unhidden-section");
//     }
//     });

// $('#shop-2').on('click', function (e) {
//     if (!$(this).hasClass("active")){
//         $("#shop-1").removeClass("active");
//         $(this).addClass("active");
//         $(".products-section-1").removeClass("unhidden-section").addClass("hidden-section");
//         $(".products-section-2").removeClass("hidden-section").addClass("unhidden-section");
//     }
//     });


// $("#filters-brand :checkbox").click(function() {
//     $(".productcheck").hide();
//     $("#filters-brand :checkbox:checked").each(function() {
//         $("." + $(this).val()).show();
//     });
//     });


// $("#filters-category :checkbox").click(function() {
//     $(".productcheck").hide();
//     $("#filters-category :checkbox:checked").each(function() {
//         $("." + $(this).val()).show();
//     });
//     });

    // $("#filters :checkbox").click(function() {

    //     var re = new RegExp($("#filters :checkbox:checked").map(function() {
    //                            return this.value;
    //                         }).get().join("|") );
    //     $("div").each(function() {
    //        var $this = $(this);
    //        $this[re.source!="" && re.test($this.attr("class")) ? "show" : "hide"]();
    //     });
    //  });
    
    var $filterCheckboxes = $('input[type="checkbox"]');

    $filterCheckboxes.on('change', function() {
    
      var selectedFilters = {};
    
      $filterCheckboxes.filter(':checked').each(function() {
    
        if (!selectedFilters.hasOwnProperty(this.name)) {
          selectedFilters[this.name] = [];
        }
    
        selectedFilters[this.name].push(this.value);
    
      });
    
      // create a collection containing all of the filterable elements
      var $filteredResults = $('.productcheck');
    
      // loop over the selected filter name -> (array) values pairs
      $.each(selectedFilters, function(name, filterValues) {
    
        // filter each .flower element
        $filteredResults = $filteredResults.filter(function() {
    
          var matched = false,
            currentFilterValues = $(this).data('category').split(' ');
    
          // loop over each category value in the current .flower's data-category
          $.each(currentFilterValues, function(_, currentFilterValue) {
    
            // if the current category exists in the selected filters array
            // set matched to true, and stop looping. as we're ORing in each
            // set of filters, we only need to match once
    
            if ($.inArray(currentFilterValue, filterValues) != -1) {
              matched = true;
              return false;
            }
          });
    
          // if matched is true the current .flower element is returned
          return matched;
    
        });
      });
    
      $('.productcheck').hide().filter($filteredResults).show();
    
    });
    

/*=====================
    25. Preloader
 ==========================*/

 window.onload = function(){
    //hide the preloader
    document.querySelector(".preloader").style.display = "none";
}

/*=====================
    26. create video element
 ==========================*/

 const box = document.createElement('p'); // is a node
 box.innerHTML = 'test satu dua tiga';


 $(window).on('load', function() {
    if ($("#generate-video").length){
    $( "#generate-video" ).prepend( '<video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg"><source src="assets/videos/cornfield.mp4" type="video/mp4"></video>' );
}});


/*=====================
    25. Price Change
 ==========================*/
 var price = 0;
 var oldprice = 0;
 var discount = 0;
 var unitprice = 0;
 var unitpricediscount = 0;

 
 $(".pricechange").click(function() {
    $(".pricechange").removeAttr("id");
    $(this).attr("id","activeprice");
    if ($(".input-number").val() < 11) {
        $("#oldprice").hide();
        $("#discount").hide();
        price = $("#activeprice").attr('value')*$(".input-number").val();
        unitprice = $("#activeprice").attr('value')*1;
        unitpricediscount = $("#activeprice").attr('realvalue')*1;
    } else {
        $("#oldprice").show();
        $("#discount").show();
        unitprice = $("#activeprice").attr('value')*1;
        unitpricediscount = $("#activeprice").attr('realvalue')*1;
        price = $("#activeprice").attr('realvalue')*$(".input-number").val();
        oldprice = $("#activeprice").attr('value')*$(".input-number").val();
        discount = $("#activeprice").attr('value')*$(".input-number").val() - $("#activeprice").attr('realvalue')*$(".input-number").val();
    };

    $("#oldprice").text('₾' + oldprice.toFixed(2));
    $("#discount").text('დანაზოგი: ₾' + discount.toFixed(2));
    $("#pricetag").text(price.toFixed(2));
    $("#unitprice").text(unitprice.toFixed(2));
    $("#wholesaleprice").text(unitpricediscount.toFixed(2));
});


// $(".pricechange").click(function() {
//     unitprice = $("#activeprice").attr('value');
//     unitpricediscount = $("#activeprice").attr('realvalue');
    
//     console.log(unitprice);
//     console.log(unitpricediscount);
    

//     $("#unitprice").text(unitprice);
//     $("#wholesaleprice").text(unitpricediscount);
// });

$(".priceupdate").click(function() {
    if ($(".input-number").val() < 11) {
        $("#oldprice").hide();
        $("#discount").hide();
        price = $("#activeprice").attr('value')*$(".input-number").val();
    } else {
        $("#oldprice").show();
        $("#discount").show();
        price = $("#activeprice").attr('realvalue')*$(".input-number").val();
        oldprice = $("#activeprice").attr('value')*$(".input-number").val();
        discount = $("#activeprice").attr('value')*$(".input-number").val() - $("#activeprice").attr('realvalue')*$(".input-number").val();
    };

    $("#oldprice").text('₾' + oldprice.toFixed(2));
    $("#discount").text('დანაზოგი: ₾' + discount.toFixed(2));
    $("#pricetag").text(price.toFixed(2));
});




// $(".pricechange").click(function() {
//     $(".pricechange").removeAttr("id");
//     $(this).attr("id","activeprice");
//     if ($(".input-number").val() < 10) {
//         $("#oldprice").hide();
//         $("#discount").hide();
//         price = $("#activeprice").attr('value')*$(".input-number").val();
//     } else if ($(".input-number").val() > 10 , ($(".input-number").val() < 20))
//     {
//         $("#oldprice").show();
//         $("#discount").show();
//         price = $("#activeprice").attr('value')*$(".input-number").val() - $("#activeprice").attr('value')*$(".input-number").val()*0.2;
//         oldprice = $("#activeprice").attr('value')*$(".input-number").val();
//         discount = $("#activeprice").attr('value')*$(".input-number").val()*0.2;
//     } else {
//         $("#oldprice").show();
//         $("#discount").show();
//         price = $("#activeprice").attr('value')*$(".input-number").val() - $("#activeprice").attr('value')*$(".input-number").val()*0.3;
//         oldprice = $("#activeprice").attr('value')*$(".input-number").val();
//         discount = $("#activeprice").attr('value')*$(".input-number").val()*0.3;
//     };

//     $("#oldprice").text('₾' + oldprice.toFixed(2));
//     $("#discount").text('დანაზოგი: ₾' + discount.toFixed(2));
//     $("#pricetag").text(price.toFixed(2));
// });


// $(".priceupdate").click(function() {
//     if ($(".input-number").val() < 10) {
//         $("#oldprice").hide();
//         $("#discount").hide();
//         price = $("#activeprice").attr('value')*$(".input-number").val();
//     } else if ($(".input-number").val() > 10 , ($(".input-number").val() < 20))
//     {
//         $("#oldprice").show();
//         $("#discount").show();
//         price = $("#activeprice").attr('value')*$(".input-number").val() - $("#activeprice").attr('value')*$(".input-number").val()*0.2;
//         oldprice = $("#activeprice").attr('value')*$(".input-number").val();
//         discount = $("#activeprice").attr('value')*$(".input-number").val()*0.2;
//     } else {
//         $("#oldprice").show();
//         $("#discount").show();
//         price = $("#activeprice").attr('value')*$(".input-number").val() - $("#activeprice").attr('value')*$(".input-number").val()*0.3;
//         oldprice = $("#activeprice").attr('value')*$(".input-number").val();
//         discount = $("#activeprice").attr('value')*$(".input-number").val()*0.3;
//     };

//     $("#oldprice").text('₾' + oldprice.toFixed(2));
//     $("#discount").text('დანაზოგი: ₾' + discount.toFixed(2));
//     $("#pricetag").text(price.toFixed(2));
// });