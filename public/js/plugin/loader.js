
!function(e, t, n, i) {
    function o(t, n) {
        this.element = t,
        this.options = e.extend({}, d, n),
        this._defaults = d,
        this._name = p,
        this.init()
    }
    var r, s, a, l, p = "preloader", d = {
        text: "",
        percent: "",
        duration: "",
        zIndex: "",
        setRelative: !1
    }, c = '<span class="preloader-text"></span>', h = '<span class="preloader-percent"></span>', u = !1, f = {
        remove: function() {
            r && (u = !1,
            r.remove())
        },
        update: function(e) {
            var t = e[1];
            if (t.percent.length > 0 && l)
                l.text(t.percent + "%");
            else if (!l)
                return console.warn("Значение не может быть обновлено"),
                !1;
            if (t.text.length > 0 && a)
                a.text(t.text);
            else if (!a)
                return console.warn("Значение не может быть обновлено"),
                !1
        }
    };
    o.prototype.init = function() {
        function t() {
            var e, t = f.scrollTop(), n = $preloaderContainer.height();
            e = Math.round(i / 2 - n / 2 + t) + "px",
            $preloaderContainer.css({
                top: e
            })
        }
        var n, i, o, d, f = e(this.element);
        return u ? (console.warn("Plugin " + p + " is already initialized"),
        !1) : (f.prepend('<div class="preloader"><div class="preloader-container"><div class="preloader-animation"></div></div></div>'),
        r = f.find(".preloader"),
        $preloaderContainer = f.find(".preloader-container"),
        s = r.find(".preloader-animation"),
        i = f.height(),
        o = f[0].scrollHeight,
        d = r.height(),
        o > d && (r.height(o),
        f.on("scroll", t).trigger("scroll")),
        this.options.text.length > 0 && ($preloaderContainer.prepend(c),
        a = f.find(".preloader-text"),
        a.text(this.options.text)),
        this.options.percent.length > 0 && (n = this.options.percent,
        n < 0 ? n = 0 : n > 100 && (n = 100),
        $preloaderContainer.prepend(h),
        l = f.find(".preloader-percent"),
        l.text(n + "%")),
        this.options.duration.length > 0 && setTimeout(function() {
            r.remove()
        }, this.options.duration),
        this.options.zIndex.length > 0 && r.css("z-index", this.options.zIndex),
        1 == this.options.setRelative && f.css("position", "relative"),
        void (u = !0))
    }
    ,
    e.fn[p] = function(t, n) {
        var i = arguments[0]
          , r = Array.prototype.slice.call(arguments);
        return f[i] ? this.each(function() {
            f[i].call(this, r)
        }) : "object" != typeof i && i ? void e.error("Method " + i + " does not exist on jQuery." + p) : this.each(function() {
            e.data(this, "plugin_" + p) || e.data(this, "plugin_" + p),
            new o(this,i)
        })
    }
}(jQuery, window, document);
	$("body").append('<div class="col-8 align-self-center someBlock"></div>');
	var     obj = {},

    someBlock = $('.someBlock');

    function getValues() {
        obj.textVal = $('#textInput').val();
        obj.percentVal = $('#percentInput').val();
        obj.durationVal = $('#durationInput').val();
        
    }

    function loader(){
    	$("body div:first").append(`<div class="overlay_class"></div>`)
        getValues();
        someBlock.preloader({
            text: '',
            percent: "",
            duration: ""
        });
    }
    
    function hide_loader(){
    	$("body .overlay_class").remove()
        someBlock.preloader('remove');
        $('.form-control').attr('disabled', false);
    }


