jQuery(
    (function ($) {
        "use strict";
        // $(window).on("scroll", function () {
        //     if ($(this).scrollTop() > 350) {
        //         $(".navbar-area").addClass("is-sticky");
        //     } else {
        //         $(".navbar-area").removeClass("is-sticky");
        //     }
        // });
        jQuery(".mean-menu").meanmenu({ meanScreenWidth: "1199" });
        $(".others-option-for-responsive .dot-menu").on("click", function () {
            $(".others-option-for-responsive .container .container").toggleClass("active");
        });
        $(".header-information").on("click", function () {
            $(".top-header-area").toggleClass("active");
        });
        $(".default-btn .optional-btn")
            .on("mouseenter", function (e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find("span").css({ top: relY, left: relX });
            })
            .on("mouseout", function (e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find("span").css({ top: relY, left: relX });
            });
        $(".home-slides").owlCarousel({ loop: true, nav: true, dots: false, autoplayHoverPause: false, autoplay: false, items: 1, navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"] });
        $(".home-slides").on("translate.owl.carousel", function () {
            $(".main-slides-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slides-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slides-content .slides-btn .default-btn").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-slides-content .slides-btn .optional-btn").removeClass("animated fadeInUp").css("opacity", "0");
        });
        $(".home-slides").on("translated.owl.carousel", function () {
            $(".main-slides-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slides-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slides-content .slides-btn .default-btn").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-slides-content .slides-btn .optional-btn").addClass("animated fadeInUp").css("opacity", "1");
        });
        $(".testimonial-slides").owlCarousel({
            loop: true,
            nav: true,
            items: 1,
            dots: false,
            smartSpeed: 200,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            margin: 0,
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        });
        $(".review-slides").owlCarousel({
            loop: true,
            nav: true,
            items: 1,
            dots: false,
            smartSpeed: 200,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
        });
        $(".newsletter-form")
            .validator()
            .on("submit", function (event) {
                if (event.isDefaultPrevented()) {
                    formErrorSub();
                    submitMSGSub(false, "Please enter your email correctly.");
                } else {
                    event.preventDefault();
                }
            });
        function callbackFunction(resp) {
            if (resp.result === "success") {
                formSuccessSub();
            } else {
                formErrorSub();
            }
        }
        function formSuccessSub() {
            $(".newsletter-form")[0].reset();
            submitMSGSub(true, "Thank you for subscribing!");
            setTimeout(function () {
                $("#validator-newsletter").addClass("hide");
            }, 4000);
        }
        function formErrorSub() {
            $(".newsletter-form").addClass("animated shake");
            setTimeout(function () {
                $(".newsletter-form").removeClass("animated shake");
            }, 1000);
        }
        function submitMSGSub(valid, msg) {
            if (valid) {
                var msgClasses = "validation-success";
            } else {
                var msgClasses = "validation-danger";
            }
            $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
        }

        $("select").niceSelect();
        $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
        $(".popup-youtube").magnificPopup({ disableOn: 320, type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: false, fixedContentPos: false });
        $(".accordion")
            .find(".accordion-title")
            .on("click", function () {
                $(this).toggleClass("active");
                $(this).next().slideToggle("fast");
                $(".accordion-content").not($(this).next()).slideUp("fast");
                $(".accordion-title").not($(this)).removeClass("active");
            });
        function makeTimer() {
            var endTime = new Date("December 31, 2022 18:00:00 PDT");
            var endTime = Date.parse(endTime) / 1000;
            var now = new Date();
            var now = Date.parse(now) / 1000;
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - days * 86400) / 3600);
            var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
            var seconds = Math.floor(timeLeft - days * 86400 - hours * 3600 - minutes * 60);
            if (hours < "10") {
                hours = "0" + hours;
            }
            if (minutes < "10") {
                minutes = "0" + minutes;
            }
            if (seconds < "10") {
                seconds = "0" + seconds;
            }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
        setInterval(function () {
            makeTimer();
        }, 0);
        $(window).on("scroll", function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $(".go-top").addClass("active");
            if (scrolled < 600) $(".go-top").removeClass("active");
        });
        $(".go-top").on("click", function () {
            $("html, body").animate({ scrollTop: "0" }, 500);
        });
        if ($(".wow").length) {
            var wow = new WOW({ mobile: false });
            wow.init();
        }
        jQuery(window).on("load", function () {
            jQuery(".preloader").fadeOut(500);
        });
    })(jQuery)
);

