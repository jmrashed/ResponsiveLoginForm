// IonDen.com — Plugins
// Engine.js
// version 1.0.9
// by Denis Ineshin | IonDen.com
// =====================================================================================================================

var ion = ion || {}; // IonDen namespace

// =====================================================================================================================
// Reading news, rev: 6

ion.twitter = {
    init: function(){
        var self = this;
        this.text = $("#twitter__text");

        $.ajax({
            dataType: "json",
            url: "news.txt",
            success: function(data){
                self.publish(data);
            }
        });
    },
    publish: function(obj){
        var text = linkify(obj.news);
        this.text.html(text);
    }
};


// =====================================================================================================================
// code prettify, rev: 11

ion.prettify = function(){
    var pre = $("pre");
    if(!pre.length) return;

    var n = navigator.userAgent,
        r = /msie\s\d+/i,
        v;
    if(n.search(r) > 0){
        v = r.exec(n).toString();
        v = v.split(" ")[1];
        if(v < 9) return;
    }

    var color_1 = "#fff000";
    var color_2 = "#11d922";
    var color_3 = "#ff0000";
    var color_4 = "#999999";
    pre.each(function(){
        var t = $(this).html();
        t = t.replace(/\{/g,"<span style='color: "+color_1+";'>{</span>");
        t = t.replace(/(true|false|\$)/gi,"<span style='color: "+color_1+";'>$1</span>");
        t = t.replace(/\}/g,"<span style='color: "+color_1+";'>}</span>");
        t = t.replace(/"([^"]*)"/g,"<span style='color: "+color_2+";'>\"$1\"</span>");
        t = t.replace(/var/g,"<span style='color: "+color_3+";'>var</span>");
        t = t.replace(/tools/g,"<span style='color: "+color_3+";'>tools</span>");
        t = t.replace(/this/g,"<span style='color: "+color_1+";'>this</span>");
        t = t.replace(/self/g,"<span style='color: "+color_1+";'>self</span>");
        t = t.replace(/function/g,"<span style='color: "+color_1+";'>function</span>");
        t = t.replace(/\./g,"<span style='color: "+color_4+";'>.</span>");
        t = t.replace(/\,/g,"<span style='color: "+color_4+";'>,</span>");
        t = t.replace(/(\/\/[\s\S]*?\n)/gi,"<span style='color: "+color_4+";'>$1</span>");
        $(this).html(t);
    });
};


// =====================================================================================================================
// Start modules

$(function(){
    if($("div.twitter").length > 0){
        ion.twitter.init();
    }
    ion.prettify();
});