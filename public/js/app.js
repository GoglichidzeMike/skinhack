/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

var navSlide = function navSlide() {
  var burger = document.querySelector(".burger");
  var nav = document.querySelector(".nav");
  burger.addEventListener("click", function () {
    //Toggle Nav
    nav.classList.toggle("nav-active"); //Burger Animation

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
  $("html, body").animate({
    scrollTop: 0
  }, "100");
}); // quiz functions

$(document).ready(function () {
  $("#start").click(function () {
    $(".q-0").fadeOut("200", function () {
      $(".q-1").css({
        display: "flex"
      }).fadeIn("200");
    }); // $(".q-0").css({ display: "none" });
    // $(".q-1").css({ display: "flex" });
  });
  $("#nextBtn-1").click(function () {
    if ($("#name").val()) {
      $(".q-1").fadeOut("200", function () {
        $(".q-2").css({
          display: "flex"
        }).fadeIn("200");
      }); // $(".q-1").css({ display: "block" });
      // $(".q-2").css({ display: "flex" });
    }
  });
  $("#nextBtn-2").click(function () {
    if ($("#q-2-1").is(":checked") || $("#q-2-2").is(":checked") || $("#q-2-3").is(":checked") || $("#q-2-4").is(":checked")) {
      $(".q-2").fadeOut("200", function () {
        $(".q-3").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-3").click(function () {
    if ($("#q-3-1").is(":checked") || $("#q-3-2").is(":checked") || $("#q-3-3").is(":checked")) {
      $(".q-3").fadeOut("200", function () {
        $(".q-4").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-4").click(function () {
    if ($("input[name='questionFour[]']:checked").length === 3) {
      $(".q-4").fadeOut("200", function () {
        $(".q-5").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-5").click(function () {
    if ($("#q-5-1").is(":checked") || $("#q-5-2").is(":checked") || $("#q-5-3").is(":checked") || $("#q-5-4").is(":checked") || $("#q-5-5").is(":checked")) {
      $(".q-5").fadeOut("200", function () {
        $(".q-6").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-6").click(function () {
    if ($("#q-6-1").is(":checked") || $("#q-6-2").is(":checked") || $("#q-6-3").is(":checked") || $("#q-6-4").is(":checked") || $("#q-6-5").is(":checked")) {
      $(".q-6").fadeOut("200", function () {
        $(".q-7").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-7").click(function () {
    if ($("#q-7-1").is(":checked") || $("#q-7-2").is(":checked") || $("#q-7-3").is(":checked") || $("#q-7-4").is(":checked") || $("#q-7-5").is(":checked")) {
      $(".q-7").fadeOut("200", function () {
        $(".q-8").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-8").click(function () {
    if ($("#q-8-1").is(":checked") || $("#q-8-2").is(":checked") || $("#q-8-3").is(":checked") || $("#q-8-4").is(":checked")) {
      $(".q-8").fadeOut("200", function () {
        $(".q-9").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-9").click(function () {
    if ($("#q-9-1").is(":checked") || $("#q-9-2").is(":checked") || $("#q-9-3").is(":checked") || $("#q-9-4").is(":checked") || $("#q-9-5").is(":checked") || $("#q-9-6").is(":checked") || $("#q-9-7").is(":checked") || $("#q-9-8").is(":checked") || $("#q-9-9").is(":checked") || $("#q-9-10").is(":checked") || $("#q-9-11").is(":checked")) {
      $(".q-9").fadeOut("200", function () {
        $(".q-10").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  }); //
  //

  $("#nextBtn-10").click(function () {
    if ($("#q-10-1").is(":checked") || $("#q-10-2").is(":checked") || $("#q-10-3").is(":checked") || $("#q-10-4").is(":checked") || $("#q-10-5").is(":checked")) {
      $(".q-10").fadeOut("200", function () {
        $(".q-11").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  });
  $("#nextBtn-11").click(function () {
    if (($("#q-11-1").is(":checked") || $("#q-11-2").is(":checked")) && $("#age").val() && $("#questionExtra").val()) {
      $(".q-11").fadeOut("200", function () {
        $(".q-final").css({
          display: "flex"
        }).fadeIn("200");
      });
    }
  }); //
  //
  //
  // set minimum of 3 checked to proceed

  var limit = 4;
  $(".max-3").on("change", function (evt) {
    if ($("input[name='questionFour[]']:checked").length >= limit) {
      this.checked = false;
    }
  }); //check if the image is being uploaded if not throw alert and empty input

  $('[type="file"]').change(function () {
    var fileInput = $(this);

    if (fileInput.length && fileInput[0].files && fileInput[0].files.length) {
      var url = window.URL || window.webkitURL;
      var image = new Image();

      image.onload = function () {
        console.log("Valid Image");
      };

      image.onerror = function () {
        alert("Invalid image");
      };

      image.src = url.createObjectURL(fileInput[0].files[0]);
    }
  }); //modal close button controls

  $(".close").click(function () {
    $(".overlay").css({
      display: "none"
    });
  }); //click anywhere but the modal to close it

  $(".overlay").on("click", function (e) {
    if (e.target !== this) {
      return;
    }

    $(".overlay").hide();
  }); //prevents enter press from submitting a form

  $(window).keydown(function (event) {
    if (event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			__webpack_require__.O();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;