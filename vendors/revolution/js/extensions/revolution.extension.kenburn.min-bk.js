/********************************************
 * REVOLUTION 5.0 EXTENSION - KEN BURN
 * @version: 1.0.0 (03.08.2015)
 * @requires jquery.themepunch.revolution.js
 * @author ThemePunch
 *********************************************/
!(function () {
  var t = jQuery.fn.revolution;
  jQuery.extend(!0, t, {
    stopKenBurn: function (t) {
      void 0 != t.data("kbtl") && t.data("kbtl").pause();
    },
    startKenBurn: function (t, e, a) {
      var r = t.data(),
        n = t.find(".defaultimg"),
        s = n.data("lazyload") || n.data("src"),
        i =
          (r.owidth / r.oheight,
          "carousel" === e.sliderType ? e.carousel.slide_width : e.ul.width()),
        o = e.ul.height();
      t.data("kbtl") && t.data("kbtl").kill(),
        (a = a || 0),
        0 == t.find(".tp-kbimg").length &&
          (t.append(
            '<div class="tp-kbimg-wrap" style="z-index:2;width:100%;height:80%;top:0px;left:0px;position:absolute;"><img class="tp-kbimg" src="' +
              s +
              '" style="position:absolute;" width="' +
              r.owidth +
              '" height="440"></div>'
          ),
          t.data("kenburn", t.find(".tp-kbimg")));
      var d = function (t, e, a, r, n, s, i) {
          var o = t * a,
            d = e * a,
            l = Math.abs(r - o),
            h = Math.abs(n - d),
            p = new Object();
          return (
            (p.l = (0 - s) * l),
            (p.r = p.l + o),
            (p.t = (0 - i) * h),
            (p.b = p.t + d),
            (p.h = s),
            (p.v = i),
            p
          );
        },
        l = function (t, e, a, r, n) {
          var s = t.bgposition.split(" ") || "center center",
            i =
              "center" == s[0]
                ? "50%"
                : "left" == s[0] || "left" == s[1]
                ? "0%"
                : "right" == s[0] || "right" == s[1]
                ? "100%"
                : s[0],
            o =
              "center" == s[1]
                ? "50%"
                : "top" == s[0] || "top" == s[1]
                ? "0%"
                : "bottom" == s[0] || "bottom" == s[1]
                ? "100%"
                : s[1];
          (i = parseInt(i, 0) / 100 || 0), (o = parseInt(o, 0) / 100 || 0);
          var l = new Object();
          return (
            (l.start = d(
              n.start.width,
              n.start.height,
              n.start.scale,
              e,
              a,
              i,
              o
            )),
            (l.end = d(n.start.width, n.start.height, n.end.scale, e, a, i, o)),
            l
          );
        },
        h = function (t, e, a) {
          var r = a.scalestart / 100,
            n = a.scaleend / 100,
            s =
              void 0 != a.oofsetstart
                ? a.offsetstart.split(" ") || [0, 0]
                : [0, 0],
            i =
              void 0 != a.offsetend ? a.offsetend.split(" ") || [0, 0] : [0, 0];
          a.bgposition =
            "center center" == a.bgposition ? "50% 50%" : a.bgposition;
          {
            var o = new Object(),
              d = t * r,
              h = ((d / a.owidth) * a.oheight, t * n);
            (h / a.owidth) * a.oheight;
          }
          if (
            ((o.start = new Object()),
            (o.starto = new Object()),
            (o.end = new Object()),
            (o.endo = new Object()),
            (o.start.width = t),
            (o.start.height = (o.start.width / a.owidth) * a.oheight), //Aqui modifique el ancho de la imagen del banner
            o.start.height < e)
          ) {
            var p = e / o.start.height;
            (o.start.height = e), (o.start.width = o.start.width * p);
          }
          (o.start.transformOrigin = a.bgposition),
            (o.start.scale = r),
            (o.end.scale = n),
            (o.start.rotation = a.rotatestart + "deg"),
            (o.end.rotation = a.rotateend + "deg");
          var g = l(a, t, e, s, o);
          (s[0] = parseFloat(s[0]) + g.start.l),
            (i[0] = parseFloat(i[0]) + g.end.l),
            (s[1] = parseFloat(s[1]) + g.start.t),
            (i[1] = parseFloat(i[1]) + g.end.t);
          var c = g.start.r - g.start.l,
            b = g.start.b - g.start.t,
            u = g.end.r - g.end.l,
            f = g.end.b - g.end.t;
          return (
            (s[0] = s[0] > 0 ? 0 : c + s[0] < t ? t - c : s[0]),
            (i[0] = i[0] > 0 ? 0 : u + i[0] < t ? t - u : i[0]),
            (s[1] = s[1] > 0 ? 0 : b + s[1] < e ? e - b : s[1]),
            (i[1] = i[1] > 0 ? 0 : f + i[1] < e ? e - f : i[1]),
            (o.starto.x = s[0] + "px"),
            (o.starto.y = s[1] + "px"),
            (o.endo.x = i[0] + "px"),
            (o.endo.y = i[1] + "px"),
            (o.end.ease = o.endo.ease = a.ease),
            (o.end.force3D = o.endo.force3D = !0),
            o
          );
        };
      void 0 != t.data("kbtl") && (t.data("kbtl").kill(), t.removeData("kbtl"));
      var p = t.data("kenburn"),
        g = p.parent(),
        c = h(i, o, r),
        b = new punchgs.TimelineLite();
      b.pause(),
        (c.start.transformOrigin = "0% 0%"),
        (c.starto.transformOrigin = "0% 0%"),
        b.add(punchgs.TweenLite.fromTo(p, r.duration / 1e3, c.start, c.end), 0),
        b.add(
          punchgs.TweenLite.fromTo(g, r.duration / 1e3, c.starto, c.endo),
          0
        ),
        b.progress(a),
        b.play(),
        t.data("kbtl", b);
    },
  });
})(jQuery);
