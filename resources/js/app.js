const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav");

    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");

        //Burger Animation
        burger.classList.toggle("toggle");
    });
};

navSlide();

var btn = $("#button");

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass("show");
    } else {
        btn.removeClass("show");
    }
});

btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "100");
});

// fb and link share div floating script
$(document).ready(function () {
    if ($("#fixed").length > 0) {
        // Get the current top location of the share div bar.
        var stickyNavTop = $("#fixed").offset().top;

        // Set the header's height to its current height in CSS
        // If we don't do this, the content will jump suddenly when passing through stickyNavTop.
        $("header").height($("header").height());

        $(window).scroll(function () {
            if ($(window).scrollTop() >= stickyNavTop) {
                $("#fixed").addClass("fixed-header");
            } else {
                $("#fixed").removeClass("fixed-header");
            }
        });
    }
});

window.fbAsyncInit = function () {
    FB.init({
        appId: "960515098106780",
        status: true,
        cookie: true,
        xfbml: true,
    });
};
(function (d, debug) {
    var js,
        id = "facebook-jssdk",
        ref = d.getElementsByTagName("script")[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement("script");
    js.id = id;
    js.async = true;
    js.src =
        "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);
})(document, /*debug*/ false);
function postToFeed(title, desc, url, image) {
    var obj = {
        method: "feed",
        link: url,
        picture: "http://www.url.com/images/" + image,
        name: title,
        description: desc,
    };
    function callback(response) {}
    FB.ui(obj, callback);
}

$(".btnShare").click(function () {
    elem = $(this);
    postToFeed(
        elem.data("title"),
        elem.data("desc"),
        elem.prop("href"),
        elem.data("image")
    );
    return false;
});
