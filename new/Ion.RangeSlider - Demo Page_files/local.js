// Local.js
// version 1.0.33
// © 2013 Denis Ineshin | IonDen.com
// =====================================================================================================================

var ion = ion || {};

// =====================================================================================================================
// Launch all modules

$(function () {

    var $links = $(".skins span"),
        $content = $(".type_table"),
        tm;

    var resize = function () {
        clearTimeout(tm);

        $content.width("99%");

        tm = setTimeout(function () {
            clearTimeout(tm);

            $content.width("100%");
        }, 250);
    };

    $links.on("click", function () {
        $(this).addClass("on").siblings().removeClass("on");
        var css = "static/css/" + $(this).data("skin") + "?" + Math.round(Math.random() * 10000000);
        $("#skinCss").attr("href", css);

        resize();
    });

});




(function() {
    if (!window.console) {
        window.console = {};
    }
    // union of Chrome, FF, IE, and Safari console methods
    var m = [
        "log", "info", "warn", "error", "debug", "trace", "dir", "group",
        "groupCollapsed", "groupEnd", "time", "timeEnd", "profile", "profileEnd",
        "dirxml", "assert", "count", "markTimeline", "timeStamp", "clear"
    ];
    // define undefined methods as noops to prevent errors
    for (var i = 0; i < m.length; i++) {
        if (!window.console[m[i]]) {
            window.console[m[i]] = function() {};
        }
    }
})();

