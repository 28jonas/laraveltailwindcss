import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import "../js/libs/simplebar/simplebar.min.js";
import "../js/libs/chart.js/chart.min.js";
import "../js/libs/apexcharts/apexcharts.min.js";
import "../js/libs/echarts/echarts.min.js";
import "../js/pages/analytics-index.init.js";


"use strict";

function _classCallCheck(e, t) {
    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _defineProperties(e, t) {
    for (var n = 0; n < t.length; n++) {
        var o = t[n];
        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
    }
}

function _createClass(e, t, n) {
    return t && _defineProperties(e.prototype, t), n && _defineProperties(e, n), Object.defineProperty(e, "prototype", {writable: !1}), e
}

function dismissDropdownMenu() {
    document.querySelectorAll(".dropdown-menu").forEach(function (e) {
        e.classList.remove("block"), e.classList.add("hidden")
    }), document.querySelectorAll(".dropdown-toggle").forEach(function (e) {
        e.classList.remove("block")
    })
}

document.getElementById("toggle-menu").addEventListener("click", function () {
    var e = document.getElementById("mobile-menu-2");
    e.classList.toggle("block"), e.classList.contains("block") ? e.classList.remove("hidden") : e.classList.add("hidden")
}), document.querySelectorAll(".dropdown").forEach(function (n) {
    n.querySelectorAll(".dropdown-toggle").forEach(function (t) {
        t.addEventListener("click", function (e) {
            t.classList.toggle("block"), 1 != t.classList.contains("block") ? (n.querySelector(".dropdown-menu").classList.remove("block"), n.querySelector(".dropdown-menu").classList.add("hidden")) : (dismissDropdownMenu(), n.querySelector(".dropdown-menu").classList.add("block"), n.querySelector(".dropdown-menu").classList.remove("hidden"), n.querySelector(".dropdown-menu").classList.contains("block") ? t.classList.add("block") : t.classList.remove("block"), e.stopPropagation())
        })
    })
}), window.addEventListener("click", function (e) {
    dismissDropdownMenu()
});
var App = function () {
    function e() {
        _classCallCheck(this, e)
    }

    return _createClass(e, [{
        key: "init", value: function () {
            var t = document.querySelector("html"), e = document.querySelector("#toggle-theme"),
                n = null == e ? void 0 : e.querySelector("i");
            null != e && e.addEventListener("click", function () {
                "dark" == t.getAttribute("class") ? document.body.setAttribute("data-layout-mode", "light") : document.body.setAttribute("data-layout-mode", "dark"), t.classList.toggle("dark");
                var e = t.classList.contains("dark") ? "moon" : "sun";
                n.className = "ti ti-" + "".concat(e) + " top-icon"
            })
        }
    }]), e
}();
window.addEventListener("DOMContentLoaded", function (e) {
    (new App).init()
});
var Menu = function () {
    function e() {
        _classCallCheck(this, e)
    }

    return _createClass(e, [{
        key: "init", value: function () {
            document.querySelectorAll(".navbar").length && document.querySelectorAll(".navbar li a").forEach(function (e, t) {
                var n, o = window.location.href.split(/[?#]/)[0];
                o.includes(".html") || (o += "index.html"), e.href === o && ((n = e).classList.add("active"), n.parentNode.parentNode.classList.add("active"), n.parentNode.parentNode.parentNode.parentNode.classList.add("active"), n.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add("active"))
            })
        }
    }]), e
}();
(new Menu).init();
