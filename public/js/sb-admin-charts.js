/******/
/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(45);
__webpack_require__(46);
__webpack_require__(47);
__webpack_require__(48);
__webpack_require__(49);
module.exports = __webpack_require__(50);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)"
        }
      }]
    },
    legend: {
      display: false
    }
  }
});
// -- Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [4215, 5312, 6251, 7841, 9821, 14984]
    }]
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }]
    },
    legend: {
      display: false
    }
  }
});
// -- Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Blue", "Red", "Yellow", "Green"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745']
    }]
  }
});

/***/ }),

/***/ 46:
/***/ (function(module, exports) {

Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif', Chart.defaults.global.defaultFontColor = "#292b2c";var ctx = document.getElementById("myAreaChart"),
    myLineChart = new Chart(ctx, { type: "line", data: { labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"], datasets: [{ label: "Sessions", lineTension: .3, backgroundColor: "rgba(2,117,216,0.2)", borderColor: "rgba(2,117,216,1)", pointRadius: 5, pointBackgroundColor: "rgba(2,117,216,1)", pointBorderColor: "rgba(255,255,255,0.8)", pointHoverRadius: 5, pointHoverBackgroundColor: "rgba(2,117,216,1)", pointHitRadius: 20, pointBorderWidth: 2, data: [1e4, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451] }] }, options: { scales: { xAxes: [{ time: { unit: "date" }, gridLines: { display: !1 }, ticks: { maxTicksLimit: 7 } }], yAxes: [{ ticks: { min: 0, max: 4e4, maxTicksLimit: 5 }, gridLines: { color: "rgba(0, 0, 0, .125)" } }] }, legend: { display: !1 } } }),
    ctx = document.getElementById("myBarChart"),
    myLineChart = new Chart(ctx, { type: "bar", data: { labels: ["January", "February", "March", "April", "May", "June"], datasets: [{ label: "Revenue", backgroundColor: "rgba(2,117,216,1)", borderColor: "rgba(2,117,216,1)", data: [4215, 5312, 6251, 7841, 9821, 14984] }] }, options: { scales: { xAxes: [{ time: { unit: "month" }, gridLines: { display: !1 }, ticks: { maxTicksLimit: 6 } }], yAxes: [{ ticks: { min: 0, max: 15e3, maxTicksLimit: 5 }, gridLines: { display: !0 } }] }, legend: { display: !1 } } }),
    ctx = document.getElementById("myPieChart"),
    myPieChart = new Chart(ctx, { type: "pie", data: { labels: ["Blue", "Red", "Yellow", "Green"], datasets: [{ data: [12.21, 15.58, 11.25, 8.32], backgroundColor: ["#007bff", "#dc3545", "#ffc107", "#28a745"] }] } });

/***/ }),

/***/ 47:
/***/ (function(module, exports) {

// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable();
});

/***/ }),

/***/ 48:
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#dataTable").DataTable();
});

/***/ }),

/***/ 49:
/***/ (function(module, exports) {

(function ($) {
  "use strict"; // Start of use strict
  // Configure tooltips for collapsed side navigation

  $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
    template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
  });
  // Toggle the side navigation
  $("#sidenavToggler").click(function (e) {
    e.preventDefault();
    $("body").toggleClass("sidenav-toggled");
    $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
    $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
  });
  // Force the toggled class to be removed when a collapsible nav link is clicked
  $(".navbar-sidenav .nav-link-collapse").click(function (e) {
    e.preventDefault();
    $("body").removeClass("sidenav-toggled");
  });
  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function (e) {
    var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  });
  // Scroll to top button appear
  $(document).scroll(function () {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });
  // Configure tooltips globally
  $('[data-toggle="tooltip"]').tooltip();
  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function (event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
})(jQuery); // End of use strict

/***/ }),

/***/ 50:
/***/ (function(module, exports) {

!function (e) {
  "use strict";
  e('.navbar-sidenav [data-toggle="tooltip"]').tooltip({ template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>' }), e("#sidenavToggler").click(function (o) {
    o.preventDefault(), e("body").toggleClass("sidenav-toggled"), e(".navbar-sidenav .nav-link-collapse").addClass("collapsed"), e(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
  }), e(".navbar-sidenav .nav-link-collapse").click(function (o) {
    o.preventDefault(), e("body").removeClass("sidenav-toggled");
  }), e("body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse").on("mousewheel DOMMouseScroll", function (e) {
    var o = e.originalEvent,
        t = o.wheelDelta || -o.detail;this.scrollTop += 30 * (t < 0 ? 1 : -1), e.preventDefault();
  }), e(document).scroll(function () {
    e(this).scrollTop() > 100 ? e(".scroll-to-top").fadeIn() : e(".scroll-to-top").fadeOut();
  }), e('[data-toggle="tooltip"]').tooltip(), e(document).on("click", "a.scroll-to-top", function (o) {
    var t = e(this);e("html, body").stop().animate({ scrollTop: e(t.attr("href")).offset().top }, 1e3, "easeInOutExpo"), o.preventDefault();
  });
}(jQuery);

/***/ })

/******/ });